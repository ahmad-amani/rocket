@extends("layout.rocketLayout")
@section("head")
    <style>
        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        .sidebar {
            background: linear-gradient(135deg, #cbd1d2 20%, #d6d6d6 80%);;
            box-shadow: 0 0 20px 3px black;
            padding: 20px 30px 20px 20px;
        }

        .otherSide{
            box-shadow: 0 0 20px 3px black;
        }

        .sidebar-list, .sidebar-list > * {
            padding: 0;
            list-style: none;
        }

        .sidebar-list li {
            transition: all .2s linear;
            padding: 5px 0px;
        }

        .sidebar-list li:hover {
            transition: all .2s linear;

            background-color: rgba(4, 4, 4, 0.65);
        }

        .sidebar-list li:hover a {
            transition: all .2s linear;
            color: white;
        }

    </style>
@endsection
@section("banner")
    <div class="row justify-content-center align-content-start" style="height: 100%">
        <div class="col-3 desktop_menu_block sidebar text-right" id="sidebar" style="background-color: white;height: 100%;font-weight: bolder">
            <div> {{auth()->user()->name}}</div>
            <div style="border-bottom: 1px solid rgba(39,36,36,0.45);margin-top: 5px"></div>
            <div>
                <ul class="sidebar-list" style="font-weight: bold">
                    <li>
                        <a @if(\Illuminate\Support\Facades\Route::current()->uri=="createCourse") style="border-bottom: 1px solid red" @endif href="\createCourse">ایجاد دوره</a>
                    </li>
                    <li>
                        <a @if(\Illuminate\Support\Facades\Route::current()->uri=="listCourses") style="border-bottom: 1px solid red" @endif  href="\listCourses">لیست دوره ها</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-9 otherSide" style="background-color: #a0aec0e8;height: 100%">
            @yield("otherSide")
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#btn-sidebar").click(function () {
                $("#sidebar").toggleClass("dontShowUpper575Block");
                $("#sidebar").css({"position": "fixed"});

            })
        })
    </script>
@endsection
