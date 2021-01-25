@extends("layout.rocketSidebarLayout")


@section("otherSide")

    <div class="row">
        <div class="col-12 text-right" style="padding: 20px;">
            <h1>خوش آمدید</h1>
            <br>
            <h4> نام:  {{auth()->user()->name}}</h4>
            <h4>   ایمیل: {{auth()->user()->email}}</h4>
            <h4> تعداد دوره: {{auth()->user()->course()->count()}}</h4>
        </div>
    </div>

@endsection
