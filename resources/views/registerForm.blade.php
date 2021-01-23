@extends('layout.mainLayout')

@section("body")
    <body>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-6">
                    Register:
                    <form class="" action="\register" method="POST">
                        @csrf
                        <input class="form-control" type="text" name="name" required placeholder="name">
                        <br>
                        <input class="form-control" type="email" name="email" required placeholder="email">
                        <br>
                        <input class="form-control" type="password" name="password" required placeholder="password">
                        <br>
                        <button class="btn btn-success form-control">register</button>
                    </form>
                    <a class="" style="text-decoration:underline red" href="\login">login?</a>

                </div>
            </div>
        </div>
    </body>

@endsection
