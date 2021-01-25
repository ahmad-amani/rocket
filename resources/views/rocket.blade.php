@extends("layout.rocketLayout")

            <!-- banner -->
            @section("banner")
                <div class="row banner_container">
                    <div class="container" style="max-width: 1500px;">
                        <div class="introduce_text_title">
                            <h2 class="text_title text-right"> آموزش برنامه نویسی با راکت</h2>
                            <br>
                        </div>
                        <div class="introduce_text_body col-md-9 col-xl-5" style="max-width: 700px;">
                            ما باور داریم که کاربران ایرانی لایق بهترین‌ها هستند، از این رو ما تمام تلاش خود را می‌کنیم تا بتوانیم فیلم‌ها و مقالات آموزشی بروز و کاربردی را در اختیارتان قرار دهیم تا با استفاده از آنها بتوانید جزء بهترین‌ها در صنعت طراحی و برنامه‌نویسی وب شوید. ما ادعا نمی‌کنیم که بهترین هستیم ولی همیشه تمام تلاش خود را می‌کنیم بهترین عملکرد را به شما ارائه دهیم.
                        </div>
                        <div class="picture_one" style="position: absolute; opacity: .1">
                            <img src="img/headerfm.png" alt="">
                        </div>
                        <div class="picture_two" style="float: left; background-image: url('img/mydeveloper.svg');min-height: 400px;min-width: 400px;background-size:cover;"></div>

                    </div>
                </div>
                <!-- end of banner -->
            @endsection
            @section("afterBanner")
        </div>
        <!-- second part. show posts -->
        <div style="background-color: #f8f6f6;">
            <div class="container justify-content-between second_container">
                <div class="container-fluid justify-content-between">
                    <br>
                    <!-- post navbar -->
                    <div class="row justify-content-between post_nav">
                        <div class="col-5 text-right">
                            <a class="latest_post" href="">جدیدترین دوره‌ها</a>
                        </div>
                        <div class="col-5 text-left">
                            <a class="all_post" href="">مشاهده همه دوره‌ها</a>
                        </div>
                    </div>
                    <!-- end post navbar -->
                    <br>
                    <!-- posts -->
                    <div class="row justify-content-start">

                        <div class="col-12  justify-content-start">
                            <div class="row justify-content-start">
                            @foreach($courses as $course)
                                <!-- post -->
                                    <div class="col-12  col-lg-6 col-xl-3 post_wrapper" >
                                        <!-- image of post -->
                                        <div class="col-12 justify-content-between post_image_div">
                                            <div class="row">
                                                <div class="col-12" style="position: relative">
                                                    <div class="row image_div" style="background-image: url('img/{{$course->image}}');">
                                                        <div class="col-5 bookmark">
                                                            <a href="#" style="cursor: pointer">
                                                                <img src="img/bookmark.svg" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- text and details -->
                                            <div class="row">
                                                <div class="col-12 text-right post_text_container">
                                                    <h4>{{$course->title}}</h4>
                                                    <p class="post_text_body" style="min-height: 100px;max-height: 100px">
                                                        {{$course->shortText}}
                                                    </p>
                                                    <p style="color: #ff0000">

                                                    @if($course->flag)
                                                        <div class="post_text_svg" href="">

                                                            <img src="img/postText.svg" alt="">

                                                        </div>
                                                        <div style="float: right;padding-top: 10px;color: red">دسترسی رایگان برای اعضای ویژه</div>
                                                    @else
                                                        <div style="min-height: 33px"></div>
                                                    @endif
                                                    <div style="clear: both"></div>
                                                    </p>
                                                    <div class="row justify-content-center" style="margin-top: -15px">
                                                        <hr class="col-11">
                                                    </div>
                                                    <div class="row justify-content-between">
                                                        <div class="col-6">
                                                            ۲۵
                                                            <img style="border-radius: 50%" src="/img/icon/like.png" alt="">
                                                            ۰۱:۵۲:۲۷
                                                            <img src="/img/icon/clock14.png" alt="">
                                                        </div>
                                                        <div class="col-6 text-left" style="color: red">{{$course->price ? $course->price.' تومان ':'رایگان'}} </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end text -->

                                        </div>
                                    </div>
                                    {{--  end post --}}
                                @endforeach

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- end second part -->
        <br>
        <!--  third part bahs va goft o go -->
        <div class="row discuss_container text-right">
            {{-- background --}}
            <div class="col-12 background" style="background-image: url('img/background.png')"></div>
            {{-- end baack --}}
            <div class="picture_one" style="position: absolute; opacity: .1">
                <img src="img/headerfm.png" alt="">
            </div>

            <div class="col-12 third-part-container">
                <div class="row">
                    {{--part question--}}
                    <div class="question-wrapper col-12 col-xl-6">

                        <h2 style="color: rgba(0,0,0,0.76)">بحث و گفتگو</h2>
                        <ul>
                            <li>
                                حل مشکلات و ارور‌های برنامه‌نویسی
                            </li>
                        </ul>
                        {{-- question container 1 --}}
                        <div class="col-12 question-container">
                            <div class="row justify-content-between">
                                {{--pic--}}
                                <div class="col-2" style="max-width: 70px">
                                    <div class="col-2 pic-div" style="background-image: url('img/profile.png')">
                                    </div>
                                </div>
                                {{--end pic--}}

                                {{--question title--}}
                                <div class="col-10 col-sm-8 text-right" style="">
                                    <a href="#" style="cursor: pointer;text-decoration: none;font-size: 18px;font-weight: bold">
                                        ساختار دیتابیس کد تخفیف در لاراول
                                    </a>
                                    <p style="font-size: 12px;margin-top: 10px">
                                        ۱ ساعت پیش
                                        <font style="color: red">توسط</font>
                                        محسن فلاح
                                        <font style="color: red">مطرح شد</font>

                                    </p>
                                </div>
                                {{--end question title--}}
                                {{--answer count--}}
                                <div class="col-sm-2 text-left btn-answer-count" style="text-align: left;padding: 5px 0px;margin-top: 10px">
                                    <button class="text-left mr-auto" style="font-size: 10px;background-color: #6c757d;border-radius: 3px 7px;color: white;padding: 2px 7px ;text-align: center">
                                        0 پاسخ
                                    </button>
                                </div>
                                {{--end of answer count--}}

                            </div>

                        </div>
                        {{-- end of question container --}}
                        {{-- question container 2 --}}
                        <div class="col-12 question-container">
                            <div class="row justify-content-between">
                                {{--pic--}}
                                <div class="col-2" style="max-width: 70px">
                                    <div class="col-2 pic-div" style="background-image: url('img/profile.png')">
                                    </div>
                                </div>
                                {{--end pic--}}

                                {{--question title--}}
                                <div class="col-10 col-sm-8 text-right" style="">
                                    <a href="#" style="cursor: pointer;text-decoration: none;font-size: 18px;font-weight: bold">
                                        ساختار دیتابیس کد تخفیف در لاراول
                                    </a>
                                    <p style="font-size: 12px;margin-top: 10px">
                                        ۱ ساعت پیش
                                        <font style="color: red">توسط</font>
                                        محسن فلاح
                                        <font style="color: red">مطرح شد</font>

                                    </p>
                                </div>
                                {{--end question title--}}
                                {{--answer count--}}
                                <div class="col-sm-2 text-left btn-answer-count" style="text-align: left;padding: 5px 0px;margin-top: 10px">
                                    <button class="text-left mr-auto" style="font-size: 10px;background-color: #6c757d;border-radius: 3px 7px;color: white;padding: 2px 7px ;text-align: center">
                                        0 پاسخ
                                    </button>
                                </div>
                                {{--end of answer count--}}

                            </div>

                        </div>
                        {{-- end of question container --}}
                        {{-- question container 3 --}}
                        <div class="col-12 question-container">
                            <div class="row justify-content-between">
                                {{--pic--}}
                                <div class="col-2" style="max-width: 70px">
                                    <div class="col-2 pic-div" style="background-image: url('img/profile.png')">
                                    </div>
                                </div>
                                {{--end pic--}}

                                {{--question title--}}
                                <div class="col-10 col-sm-8 text-right" style="">
                                    <a href="#" style="cursor: pointer;text-decoration: none;font-size: 18px;font-weight: bold">
                                        ساختار دیتابیس کد تخفیف در لاراول
                                    </a>
                                    <p style="font-size: 12px;margin-top: 10px">
                                        ۱ ساعت پیش
                                        <font style="color: red">توسط</font>
                                        محسن فلاح
                                        <font style="color: red">مطرح شد</font>

                                    </p>
                                </div>
                                {{--end question title--}}
                                {{--answer count--}}
                                <div class="col-sm-2 text-left btn-answer-count" style="text-align: left;padding: 5px 0px;margin-top: 10px">
                                    <button class="text-left mr-auto" style="font-size: 10px;background-color: #6c757d;border-radius: 3px 7px;color: white;padding: 2px 7px ;text-align: center">
                                        0 پاسخ
                                    </button>
                                </div>
                                {{--end of answer count--}}

                            </div>

                        </div>
                        {{-- end of question container --}}
                        {{-- question container 4 --}}
                        <div class="col-12 question-container">
                            <div class="row justify-content-between">
                                {{--pic--}}
                                <div class="col-2" style="max-width: 70px">
                                    <div class="col-2 pic-div" style="background-image: url('img/profile.png')">
                                    </div>
                                </div>
                                {{--end pic--}}

                                {{--question title--}}
                                <div class="col-10 col-sm-8 text-right" style="">
                                    <a href="#" style="cursor: pointer;text-decoration: none;font-size: 18px;font-weight: bold">
                                        ساختار دیتابیس کد تخفیف در لاراول
                                    </a>
                                    <p style="font-size: 12px;margin-top: 10px">
                                        ۱ ساعت پیش
                                        <font style="color: red">توسط</font>
                                        محسن فلاح
                                        <font style="color: red">مطرح شد</font>

                                    </p>
                                </div>
                                {{--end question title--}}
                                {{--answer count--}}
                                <div class="col-sm-2 text-left btn-answer-count" style="text-align: left;padding: 5px 0px;margin-top: 10px">
                                    <button class="text-left mr-auto" style="font-size: 10px;background-color: #6c757d;border-radius: 3px 7px;color: white;padding: 2px 7px ;text-align: center">
                                        0 پاسخ
                                    </button>
                                </div>
                                {{--end of answer count--}}

                            </div>

                        </div>
                        {{-- end of question container --}}
                        {{-- question container 5 --}}
                        <div class="col-12 question-container">
                            <div class="row justify-content-between">
                                {{--pic--}}
                                <div class="col-2" style="max-width: 70px">
                                    <div class="col-2 pic-div" style="background-image: url('img/profile.png')">
                                    </div>
                                </div>
                                {{--end pic--}}

                                {{--question title--}}
                                <div class="col-10 col-sm-8 text-right" style="">
                                    <a href="#" style="cursor: pointer;text-decoration: none;font-size: 18px;font-weight: bold">
                                        ساختار دیتابیس کد تخفیف در لاراول
                                    </a>
                                    <p style="font-size: 12px;margin-top: 10px">
                                        ۱ ساعت پیش
                                        <font style="color: red">توسط</font>
                                        محسن فلاح
                                        <font style="color: red">مطرح شد</font>

                                    </p>
                                </div>
                                {{--end question title--}}
                                {{--answer count--}}
                                <div class="col-sm-2 text-left btn-answer-count" style="text-align: left;padding: 5px 0px;margin-top: 10px">
                                    <button class="text-left mr-auto" style="font-size: 10px;background-color: #6c757d;border-radius: 3px 7px;color: white;padding: 2px 7px ;text-align: center">
                                        0 پاسخ
                                    </button>
                                </div>
                                {{--end of answer count--}}

                            </div>

                        </div>
                        {{-- end of question container --}}


                        {{-- button show all discuss --}}
                        <div class="row" style="padding: 0 14px">
                            <button class="btn btn-primary mr-auto" style="border-radius: 17px">
                                مشاهده همه گفتگوها
                            </button>
                        </div>
                        {{-- end of button show all discuss --}}
                    </div>
                    {{--end part question --}}
                    {{--last videos container--}}
                    <div class="last-video-wrapper clear-right-padding col-12 col-xl-6">
                        {{-- header of last video--}}

                        {{-- end of header of last video--}}
                        {{-- videos container--}}
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <h3 style="color: rgba(0,0,0,0.76)">آخرین ویدویوهای آموزشی</h3>
                                <ul class="ul-li">
                                    <li style="margin: 0;padding: 0">
                                        برنامه‌نویسی وب و موبایل
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4  text-align-center " style="padding-top: 20px">
                                <button class="btn btn-primary mr-auto" style="border-radius: 17px;text-align: center;padding: 5px 15px">
                                    همه ویدیوها
                                </button>
                            </div>
                        </div>
                        {{-- video container --}}
                        <div class="col-12 video-container">
                            <a href="#" style="color:white;cursor: pointer;text-decoration: none;font-size: 20px;font-weight: bold">
                                سخن پایانی
                            </a>
                            <div class="row" style="min-height: 10px;"></div>
                            <a href="" style="color: wheat;font-weight: bold;padding-bottom: 5px;">
                                آموزش کامل sass
                            </a>
                            - قسمت ۲۸
                            <div class="row" style="min-height: 5px;"></div>
                        </div>
                        {{-- video container --}}

                        {{-- video container --}}
                        <div class="col-12 video-container">
                            <a href="#" style="color:white;cursor: pointer;text-decoration: none;font-size: 20px;font-weight: bold">
                                سخن پایانی
                            </a>
                            <div class="row" style="min-height: 10px;"></div>
                            <a href="" style="color: wheat;font-weight: bold;padding-bottom: 5px;">
                                آموزش کامل sass
                            </a>
                            - قسمت ۲۸
                            <div class="row" style="min-height: 5px;"></div>
                        </div>
                        {{-- video container --}}

                        {{-- video container --}}
                        <div class="col-12 video-container">
                            <a href="#" style="color:white;cursor: pointer;text-decoration: none;font-size: 20px;font-weight: bold">
                                سخن پایانی
                            </a>
                            <div class="row" style="min-height: 10px;"></div>
                            <a href="" style="color: wheat;font-weight: bold;padding-bottom: 5px;">
                                آموزش کامل sass
                            </a>
                            - قسمت ۲۸
                            <div class="row" style="min-height: 5px;"></div>
                        </div>
                        {{-- video container --}}

                        {{-- video container --}}
                        <div class="col-12 video-container">
                            <a href="#" style="color:white;cursor: pointer;text-decoration: none;font-size: 20px;font-weight: bold">
                                سخن پایانی
                            </a>
                            <div class="row" style="min-height: 10px;"></div>
                            <a href="" style="color: wheat;font-weight: bold;padding-bottom: 5px;">
                                آموزش کامل sass
                            </a>
                            - قسمت ۲۸
                            <div class="row" style="min-height: 5px;"></div>
                        </div>
                        {{-- video container --}}

                        {{-- video container --}}
                        <div class="col-12 video-container">
                            <a href="#" style="color:white;cursor: pointer;text-decoration: none;font-size: 20px;font-weight: bold">
                                سخن پایانی
                            </a>
                            <div class="row" style="min-height: 10px;"></div>
                            <a href="" style="color: wheat;font-weight: bold;padding-bottom: 5px;">
                                آموزش کامل sass
                            </a>
                            - قسمت ۲۸
                            <div class="row" style="min-height: 5px;"></div>
                        </div>
                        {{-- video container --}}

                        {{-- end of videos container--}}
                    </div>
                    {{--end of last videos container--}}
                </div>
                <br>
                <br>
                <br>
            </div>

        </div>
        <br>
        <br>
        <br>
    @endsection
    <!--  end of third part     -->
