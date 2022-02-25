<!doctype html>
<html lang="en">

<head>
    <title>Election - Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://use.fontawesome.com/393b5419bd.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/normalise.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>



    {{-- ## START NAVBAR ## --}}

    <nav>
        <div class="nav-1 row align-items-center justify-content-between">
            <div>
                <img onclick="showNav()" class="burger-btn" id="burger-btn" src="{{ asset('images/burger-btn.png') }}">
                <img onclick="hideNav()" class="close-btn hide-btn" id="close-btn"
                    src="{{ asset('images/close-btn.png') }}">

                <a class="logout-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    تسجيل خروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>


                {{-- <a href="{{ route('logout') }}" class="logout-btn">تسجيل خروج</a> --}}

            </div>
            <div>
                <div class="row align-items-center">
                    <div class="text-right">
                        <a href="{{ route('profilePage') }}" class="p-0 m-0 profile-name">{{ auth()->user()->name }}</a>
                        <p class="p-0 m-0 role">{{ auth()->user()->email }}</p>
                        <p class="p-0 m-0 role">دورك : {{ auth()->user()->role }}</p>
                    </div>
                    <div class="profile-img-cont">
                        <img class="profile-img" src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                    </div>
                </div>
            </div>

            <div class="nav-2 row container-fluid justify-content-center" id="nav-2">

                <div class="nav-2-tables">
                    <p>المستخدمين</p>
                    <div class="nav-2-tables-content">
                        <a href="{{ route('dataEntryPage') }}">Data Entry</a>
                        <a href="{{ route('murakebPage') }}">المراقبين</a>
                        <a href="{{ route('mandoubMutajawwelPage') }}">المندوبين المتجولين</a>
                        <a href="{{ route('mandoubSebetPage') }}">المندوبين الثابتين</a>
                        <a href="{{ route('munassekPage') }}">المنسقين</a>
                    </div>
                </div>

                <div class="nav-2-tables">
                    <p>لوائح الشّطب</p>
                    <div class="nav-2-tables-content">
                        <a href="{{ route('alMuntakhibinPage') }}">المنتخِبين</a>
                        <a href="{{ route('lamYantakhibouPage') }}">لم ينتخبوا بعد</a>
                    </div>
                </div>

                <div class="nav-2-tables">
                    <p>المرشّحين</p>
                    <div class="nav-2-tables-content">
                        <a href="{{ route('index') }}/#almurashahin">جميع المرشّحين</a>
                    </div>
                </div>

            </div>


        </div>


    </nav>
    {{-- ## END NAVBAR ## --}}

    {{-- ## START MAIN ## --}}
    @yield('mainContent')
    {{-- ## END MAIN ## --}}


    <p class="developed-by">Developed By Gms &copy; 2022</p>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/hide-nav.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/akdiyeMuhafazat.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>