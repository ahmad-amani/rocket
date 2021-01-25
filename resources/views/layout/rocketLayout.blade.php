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
                            </div>

                            <div class="col-12">
                                <a href="\listCourses"> لیست دوره ها </a>
                            </div>

                            <div class="col-12">
                                <a href="\createCourse"> افزودن دوره </a>
                            </div>


                            <div class="col-12">
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
                <div class="container" style="max-width: 1500px;padding: 0">
                    @yield("banner")
                </div>
            </div>
            @yield("afterBanner")
        </div>
    </body>
@endsection
