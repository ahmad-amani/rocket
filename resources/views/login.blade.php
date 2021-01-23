@extends('layout.mainLayout')

@section("body")
    <body>
        <div class="container">

            <div class="row justify-content-center">
                @isset($error)
                    <div class="col-12 alert-danger">
                        {{$error}}
                    </div>
                @endisset
                <br>

                <div id="hidden-success-message" class="col-12 alert-success hidden-div">
                    ورود موفق! در حال انتقال
                    <a id="div-timer" class="timer">
                        5
                    </a>
                </div>
                <div id="hidden-error-message" class="col-12 alert-danger hidden-div">
                    ورود ناموفق!
                </div>

                <div class="col-6">
                    <form action="" method="post">
                        <input type="hidden" id="csrfToken" name="_token" value="{{csrf_token()}}">
                        login:
                        <input class="form-control" id="email" type="text" name="email" placeholder="email">
                        <br>
                        <input class="form-control" id="password" type="password" name="password" placeholder="password">
                        <br>
                        remember?:
                        <input type="checkbox" name="remember" id="">
                        <button id="submitBtn" class="btn btn-success form-control">login</button>
                    </form>
                    <a class="" style="text-decoration:underline red" href="\register">join us?</a>
                </div>
            </div>
        </div>
    </body>
@endsection
