@extends('layout.rocketLayout')
@section("head")
    <link rel="stylesheet" href="{{asset("css/auth.css")}}">
@endsection

@section("banner")

    <div class="row align-content-center justify-content-center" style="height: 100%;max-width: 1500px;max-height: 900px;top:20%;margin: 0 auto">
        <div class="col-11 col-sm-8">

            <div class="row justify-content-center" style="height: 100%;direction: ltr;">
                {{--form container --}}

                <div class="col-12 form-container remove-padding-under-450" style="background:linear-gradient(135deg, #e1e6e5 20%, #c7ced3 80%);box-shadow: 1px 11px 20px 14px #26618a;padding-top: 10%;background-color: white">
                <div class="dontShowUpper575 text-center form-title"><span style="">LOGIN</span></div>
                    @isset($error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endisset
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-field-wrapper">
                            <fieldset class="field-sets">
                                <legend class="legends">E-MAIL</legend>
                                <input class="input-field"     @if($errors->has("email")) style="border-color: red" @endif type="text" name="email">
                                @if($errors->has("email"))
                                    <span class="error-span" style="color: red;">
                                        <ul>
                                            @foreach($errors->get("email") as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </span>
                                    <div style="min-height: 5px"></div>
                                @endif
                            </fieldset>
                        </div>

                        <div class="form-field-wrapper">
                            <fieldset class="field-sets">
                                <legend class="legends">PASSWORD</legend>
                                <input class="input-field pass" id="pass1"  @if($errors->has("password")) style="border-color: red" @endif type="password" name="password">
                                @if($errors->has("password"))
                                    <span class="error-span" style="color: red;">
                                        <ul>
                                            @foreach($errors->get("password") as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </span>
                                    <div style="min-height: 5px"></div>
                                @endif
                            </fieldset>
                        </div>

                        <div class="col-12" style="padding: 20px 0px" id="links">
                            <button class="btn btn-block btn-success" id="btn-sign-up">Login</button> &nbsp; Or
                            <a href="/register" style="color: #4dc0b5;font-size: larger">register</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{--end of form container --}}

        {{-- login form describe   --}}
        <div class="dontShowUnder780 col-sm-4 register-form-describe">
            <div class="col-12 background " style=";background-image: url('img/background.png')"></div>
            <div class="row" style="position: relative;width: 100%;margin: 0 auto;">
                <div class="col-12" style="position: absolute;top: 50px;">
                    <h1 style="color: #000000; opacity: 1;font-weight: bolder">Log In</h1>
                    <p style="padding:30px 6px">
                        Sign Up for free, Rocket is much better when you have an account
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi, architecto asperiores dolores error excepturi exercitationem fugiat in incidunt maiores necessitatibus perferendis provident quidem quisquam quod sit, voluptas? Nostrum, placeat!
                    </p>
                </div>
            </div>
        </div>
        {{--        end of register form describe --}}
    </div>
@endsection
@section("foot")
    <script>

        $(document).ready(function () {
            $(".input-field").focusin(function (event) {

                $(this).closest(".field-sets").addClass("field-sets-focus");
                aa = $(this).closest(".field-sets").children(".legends").text();
                $(this).closest(".field-sets").children(".error-span").addClass("hidden-div");
                $(this).closest(".field-sets").children(".legends").addClass("legends-focus");
                $(this).attr({"placeholder": "please enter " + aa.toLowerCase()})
            })

            $(".input-field").focusout(function (event) {
                $(this).closest(".field-sets").removeClass("field-sets-focus");
                aa = $(this).closest(".field-sets").children(".legends").removeClass("legends-focus");
                $(this).closest(".field-sets").children(".error-span").removeClass("hidden-div");
                $(this).attr({"placeholder": ""})
            })


        })


    </script>
@endsection
