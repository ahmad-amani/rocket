@extends('layout.rocketLayout')
@section("head")
    <link rel="stylesheet" href="css/register.css">
@endsection

@section("banner")
    <style>
        /*.hidden-div*/
    </style>
    <div class="row align-content-center justify-content-center" style="height: 100%;max-width: 1500px;max-height: 900px;top:20%;margin: 0 auto">
        <div class="col-12 col-sm-8">
            <div class="row" style="height: 100%;direction: ltr;">
                {{--form container --}}
                <div class="col-12 form-container remove-padding-under-450" style="background:linear-gradient(135deg, #e1e6e5 20%, #c7ced3 80%);box-shadow: 1px 11px 20px 14px #26618a;padding-top: 10%;background-color: white">
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-field-wrapper">
                            <fieldset class="field-sets">
                                <legend class="legends">NAME</legend>
                                <input class="input-field"     @if($errors->has("name")) style="border-color: red" @endif type="text" name="name">
                                @if($errors->has("name"))
                                    <span class="error-span" style="color: red;">
                                        <ul>
                                            @foreach($errors->get("name") as $error)
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
                                <legend class="legends">E-MAIL</legend>
                                <input class="input-field"  @if($errors->has("email")) style="border-color: red" @endif type="text" name="email">
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
                                <input class="input-field pass" id="pass1"  @if($errors->has("password")) style="border-color: red" @endif type="text" name="password">
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


                        <div class="form-field-wrapper">
                            <fieldset class="field-sets">
                                <legend class="legends">REPEAT PASSWORD</legend>
                                <input class="input-field pass" id="pass2"  @if($errors->has("repeatPassword")) style="border-color: red" @endif type="text" name="repeatPassword">
                                @if($errors->has("repeatPassword"))
                                    <span class="error-span" style="color: red;">
                                        <ul>
                                            @foreach($errors->get("repeatPassword") as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </span>
                                    <div style="min-height: 5px"></div>
                                @endif
                            </fieldset>
                        </div>
                        <br>
                        <div style="padding-left: 20px" id="term-div">
                            <input type="checkbox" style="outline-color: red" name="terms" id="terms">
                            by sing up you agree with
                            <span style="color: green">terms and condition</span>
                            @if($errors->has("terms"))
                                <span class="error-span" style="color: red;">
                                    <ul>
                                        @foreach($errors->get("terms") as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </span>
                                <div style="min-height: 5px"></div>
                            @endif
                        </div>
                        <div style="padding: 20px">
                            <button class="btn btn-success" id="btn-sign-up">Sign Up</button> &nbsp; Or
                            <a href="/login" style="color: #4dc0b5;font-size: larger">login</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{--end of form container --}}

        {{-- register form describe   --}}
        <div class="dontShowUnder780 col-sm-4 register-form-describe">
            <div class="col-12 background " style=";background-image: url('img/background.png')"></div>
            <div class="row" style="position: relative;width: 100%;margin: 0 auto;">
                <div class="col-12" style="position: absolute;top: 50px;">
                    <h1 style="color: #000000; opacity: 1;font-weight: bolder">Sign Up</h1>
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

            $("#btn-sign-up").click(function (e) {
                if(!$("#terms").prop("checked")){
                    e.preventDefault();
                    alert("you must accepts the terms")
                    $("#term-div").css({"background-color":"#ff000029"});
                }
            })

            $(".pass").focusout(function () {
                pass1=$("#pass1").val();
                pass2=$("#pass2").val();

                if(pass1.length > 6 && pass1==pass2){
                  $(".pass").css({"border-color":"green"});
                }else{
                    $(".pass").css({"border-color":"red"});
                }
            })

        })


    </script>
@endsection
