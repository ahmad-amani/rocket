@extends("layout.mainLayout")

@section("body")
    <body class="justify-content-center">
        <div class="mobile_menu_list container-fluid justify-content-between text-right">
            <!-- modal -->
            <div class="row justify-content-between">
                <div class="col-1"></div>
                <div class="col-8" style="padding: 0;margin: 0;">
                    <div class="row mobile_menu_list_item" style="background-color: white;">
                        <div class="col-12">
                            <input class="form-control" type="text" name="" id="" placeholder="دنبال چی هستی؟">
                        </div>
                        <div class="col-12">صفحه اصلی</div>
                        @guest()
                            <div class="col-12">
                                <a href="\login">
                                    ورود
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="\register">عضویت</a>
                            </div>
                        @endguest
                        @auth()
                            <div class="col-12">
                                <a href="\home"> خانه</a>
                                <a href="\logout"> خروج</a>
                            </div>
                        @endauth
                        <div class="col-12">بحث و گفتگو‌ها</div>
                        <div class="col-12">دوره‌های آموزشی</div>
                        <div class="col-12">آخرین ویدیوها</div>
                        <div class="col-12">مقالات</div>
                        <div class="col-12">راکت‌کست</div>
                        <div class="col-12">کانال تلگرام</div>
                        <div class="col-12">ارتباط با ما</div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <!-- end modal -->
        <div class="container-fluid justify-content-center  nav_container" style="overflow-x: hidden;">


            <!-- the first nav bar show when screen width > 680px -->
            <div class="row first_navbar_response">
                <div class="col-5">
                    <div class="row text-right">
                        <div class="col-4">کانال تلگرام</div>
                        <div class="col-4">درباره راکت</div>
                        <div class="col-4">همکاری با ما</div>
                    </div>
                </div>
                <div class="col-3">

                </div>
                <div class="col-4">
                    <div class="row text-left">
                        <div class="col-8">سوالات متداول</div>
                        <div class="col-4 text-right"> ارتباط با ما</div>
                    </div>
                </div>
            </div>
            <!-- end first nav -->

            <!-- main nav bar include logo and search , ... -->
            <div class="row navbar main_nav justify-content-center align-content-center">
                <!-- rocket logo svg -->
                <div class="col-5 col-md-2 col-lg-3 rocket-logo">
                    <a href="/">
                        <img src="img/rocket.svg" alt="">
                    </a>
                </div>

                <!-- end of rocket logo svg -->

                <!-- mobile menu.. hamberger logo -->
                <div class="col-4 mobile_menu dontShowUnder370"></div>
                <div id="mobile" class="mobile_menu col-3 text-left mobile_nav_menu_logo ">
                    <p>
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px">
                            <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 L 0 7.5 z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 L 0 22.5 z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 L 0 37.5 z"/>
                        </svg>
                    </p>
                </div>
                <!-- end ofmobile menu.. hamberger logo -->
                <!-- search input -->
                <div class="col-7 justify-content-between search_form">
                    <div class="row">
                        <div class="col-1 search_logo">
                            <div style="position: absolute;top: 13px; left: 9px">
                                <img src="img/search.svg" alt="">
                            </div>

                        </div>
                        <div class="col-11" style="position: absolute;top:-18px;left: 10px;z-index: 1">
                            <input type="text" placeholder="دنبال چی میگردی؟" class="search form-control" style="outline: 0px;padding: 23px;background-color: #e2e8f0;border-radius: 25px;width: 100%">
                        </div>
                    </div>

                </div>
                <!-- end search input -->
                <!-- desktop menu width > 780 -->
                <div class="desktop_menu col-2 text-center">

                    @guest()
                        <a style="" href="\register">عضویت</a>
                        <a style="" href="\login">ورود</a>
                    @endguest
                    @auth()
                        <a style="color: white;margin-left: 5px" class="btn btn-success" href="\home">
                            خانه
                        </a>
                        <form action="\logout" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit"> خروج</button>
                        </form>
                    @endauth
                </div>
                <!-- end destop menu -->

            </div>
            <!-- end of main nav  -->

            <!-- second response nav width > 780 -->

            <div class="row" style="background-color:  #4f4e4e;">
                <div class="col-12 second_navbar_response" style="max-width: 1500px;margin: 0 auto;background-color:  #4f4e4e;color: white;padding: 15px;margin-top: 10px">
                    <div class="col-7 justify-content-between">
                        <div class="row justify-content-between" style="">
                            <div class="">صفحه اصلی</div>
                            <div class=" main_item" style="position: relative">دوره‌های آموزشی
                                <div style="position: absolute;min-height: 100px;min-width: 100px;z-index:5000" class="container_for_hidden_nav">

                                    <!-- the hidden nav -->
                                    <ul class="main_ul" style="position: absolute;z-index: 20000;right: -40px;top: 15px">
                                        <div class="arrow-up"></div>
                                        <div class="row" style="width: 180px;margin-left: 40px;background-color: #5b616b">
                                            <ul class="text-right" style="font-size: 18px;text-decoration: none;list-style:circle; color: white;">
                                                <li style="padding: 14px 0;border-bottom: 1px solid black;">همه دوره‌ها</li>
                                                <li style="padding: 14px 0;border-bottom: 1px solid black;">آخرین ویدیوها</li>
                                                <li style="padding: 14px 0;">گام‌های یادگیری</li>
                                            </ul>
                                        </div>
                                    </ul>
                                    <!-- end the hidden nav -->
                                </div>
                            </div>
                            <div class="">بحث و گفتگو‌ها</div>
                            <div class="">مقالات</div>
                            <div class="">راکت‌کست</div>
                            <div class="">رزومه‌ساز</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end second nav -->

            <!-- banner -->
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
                    <div class="row justify-content-between">

                        <div class="col-12  justify-content-between">
                            <div class="row justify-content-between">
                            @foreach($courses as $course)
                                <!-- post -->
                                    <div class="col-12  col-lg-6 col-xl-3 post_wrapper">
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
                                                    <p class="post_text_body">
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
                                                        <div class="col-7">
                                                            ۲۵
                                                            <img style="border-radius: 50%" src="/img/icon/like.png" alt="">
                                                            ۰۱:۵۲:۲۷
                                                            <img src="/img/icon/clock14.png" alt="">
                                                        </div>
                                                        <div class="col-5 text-left" style="color: red">{{$course->price ? $course->price.' تومان ':'رایگان'}} </div>
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
        <!--  end of third part     -->
    </body>
@endsection
