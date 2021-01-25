<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(["guest"])->except(["logout"]);
        $this->middleware(["auth"])->only(["logout"]);
    }


    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20|required_with:repeatPassword|same:repeatPassword',
            'repeatPassword' => 'required|min:6|max:20',
            "terms"=>"required"
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        auth()->login($user);
        return \Illuminate\Support\Facades\Redirect::intended("home");
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $res = \auth()->guard()->attempt(["email" => $email, "password" => $password]);

        if ($request->expectsJson())
        {
            if ($res == 1)
            {
                $view = Redirect::intended("home");
                return 1;
            } else
            {
                return view("login")->with(["error" => "something went wrong"]);
            }
        }

        if ($res == 1)
        {
            return Redirect::intended("home")->withInput();
        } else
        {
            return view("login")->with(["error" => "something went wrong"]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
