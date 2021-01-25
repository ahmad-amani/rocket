@extends("layout.rocketSidebarLayout")


@section("otherSide")

    <div class="row">
        <div class="col-12 text-right" style="padding: 20px">
            <table class="table table-bordered table-responsive table-secondary table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عکس</th>
                        <th scope="col">توضیحات</th>
                        <th scope="col">قیمت</th>
                        <th scope="col">اعضای ویژه</th>
                        <th scope="col">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <th scope="row">{{$course->id}}</th>
                            <td>{{$course->title}}</td>
                            <td>
                                <img src="/img/{{$course->image}}" width="100" height="100">
                            </td>
                            <td>{{$course->shortText}}</td>
                            <td>{{$course->price??"رایگان"}}</td>
                            <td>{{$course->flag?"بله":"خیر"}}</td>
                            <td>
                                <form action="/deleteCourse/{{$course->id}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-danger" style="padding: 8px 19px;margin-bottom: 5px">حذف</button>
                                </form>
                                <button class="btn btn-success">
                                    <a href="/editCourse/{{$course->id}}">
                                        ویرایش
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
