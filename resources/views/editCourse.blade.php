@extends("layout.rocketSidebarLayout")


@section("otherSide")
    <style>
        .form-control {
            width: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <div class="row justify-content-center text-right">
        <div class="col-12 col-sm-8 col-md-9" style="padding: 30px">
            <h4>ویرایش کردن دوره</h4>
            @if($errors->any())
                <ul style="padding: 0">
                    @foreach($errors->all() as $error)
                        <li class="alert alert-danger">
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            @endif
            <form action="/updateCourse/{{$course->id}}" enctype="multipart/form-data" method="post">
                @method("put")
                @csrf
                عنوان
                <input class="form-control" name="title" type="text" style="margin: 5px" value="{{$course->title}}">
                توضیحات
                <textarea class="form-control" style="width: 100%;padding: 5px;margin: 5px" name="shortText" id="" rows="5">{{$course->shortText}}</textarea>
                {{--            <input class="form-control" type="text" style="margin: 5px">--}}
                عکس
                <input class="form-control" type="file" name="image" style="margin: 5px" value="{{$course->image}}">
                قیمت
                <input class="form-control" type="text" name="price" style="margin: 5px" value="{{$course->price}}">
                رایگان برای اعضای ویژه
                <input class="" type="checkbox" name="flag" style="margin: 5px" @if($course->flag) checked @endif>
                <button class="btn btn-block btn-success" style="margin: 5px">ویرایش</button>
            </form>
            <div class="col-12" style="min-height: 30px"></div>
        </div>
    </div>
@endsection
