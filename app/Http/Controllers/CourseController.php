<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    public function delete(Course $course)
    {
        if (Gate::denies("editCourse", $course->userid))
        {
            return abort(403);
        }
        unlink(public_path("img/") . $course->image);
        $course->delete();
        return Redirect::back();
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        if (Gate::denies("editCourse", $course->userid))
        {
            return abort(403);
        }
        $course->title = $request->title;
        $course->shortText = $request->shortText;
        $course->flag = $request->flag == "on" ? 1 : 0;
        $course->price = $request->price;
        if (isset($request->image))
        {
            unlink(public_path("img/") . $course->image);
            $uplod = $request->image;
            $name = time() . random_int(1000, 99999) . $uplod->getClientOriginalName();
            $uplod->move("img/", $name);
            $course->image = $name;
        }
        $course->update();
        return Redirect::to("listCourses");
    }

    public function edit(Course $course)
    {
        if (Gate::denies("editCourse", $course->userid))
        {
            return abort(403);
        }
        return view("editCourse")->with(["course" => $course]);
    }

    public function all()
    {
        $userCourses = \App\Models\Course::query()->where("userid", auth()->id())->get();
        return view("listCourses")->with(["courses" => $userCourses]);
    }

    public function store(Request $request)
    {


        $course = new \App\Models\Course();
        $course->shortText = $request->shortText;
        $course->title = $request->title;
        $course->userid = auth()->id();
        if (isset($request->price))
        {
            $course->price = $request->price;
        }

        $course->flag = $request->flag == "on" ? 1 : 0;
        $uplod = $request->image;
        $name = time() . random_int(1000, 99999) . $uplod->getClientOriginalName();
        $uplod->move("img/", $name);
        $course->image = $name;
        $course->save();
        return Redirect::to("/");
    }


}
