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
                <a href="" class="logout-btn">تسجيل خروج</a>
            </div>
            <div>
                <div class="row align-items-center">
                    <div class="text-right">
                        <p class="p-0 m-0 profile-name">طه عبدالله</p>
                        <p class="p-0 m-0 role">taha.abdallah1999@gmail.com</p>
                        <p class="p-0 m-0 role">دورك : مسؤول</p>
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
                        <a href="">Data Entry</a>
                        <a href="">المراقبين</a>
                        <a href="">المندوبين متجولين</a>
                        <a href="">المندوبين الثابتين</a>
                        <a href="">المنسقين</a>
                    </div>
                </div>

                <div class="nav-2-tables">
                    <p>لوائح الشّطب</p>
                    <div class="nav-2-tables-content">
                        <a href="">المنتخِبين</a>
                        <a href="">لم ينتخبوا بعد</a>
                    </div>
                </div>

                <div class="nav-2-tables">
                    <p>المرشّحين</p>
                    <div class="nav-2-tables-content">
                        <a href="">جميع المرشّحين</a>
                    </div>
                </div>

            </div>


        </div>


    </nav>
    {{-- ## END NAVBAR ## --}}

    <div class="container row align-items-center justify-content-around m-auto main-cont">
        <input class="search-bar" type="search" name="" id="" placeholder="بحث">
        <a class="adding-btn" href="">اضافة مُنتَخِب <i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>

    {{-- ## START TABLE 1 ## --}}
    <div class="container">
        <h5 class="table-title">لوائح الشّطب</h5>
        <table class="table table-responsive text-center content-table">
            <thead>
                <tr>
                    <th>
                        <p>انتخب / لم ينتخب</p>
                    </th>
                    <th>
                        <p>ملاحظة</p>
                    </th>
                    <th>
                        <p>رقم الهاتف</p>
                    </th>
                    <th>
                        <p>القضاء</p>
                    </th>
                    <th>
                        <p>المحافظة</p>
                    </th>
                    <th>
                        <p>رقم القيد</p>
                    </th>
                    <th>
                        <p>المذهب</p>
                    </th>
                    <th>
                        <p>تاريخ الولادة</p>
                    </th>
                    <th>
                        <p>الجنس</p>
                    </th>
                    <th>
                        <p>اسم الأم</p>
                    </th>
                    <th>
                        <p>اسم الأب</p>
                    </th>
                    <th>
                        <p>الاسم</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="ntakhab">
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr class="mantakhab">
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr class="ntakhab">
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr class="ntakhab">
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr class="mantakhab">
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>انتخب</p>
                    </td>
                    <td>
                        <p>لا يوجد ملاحظات</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>

                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>الشمال</p>
                    </td>
                    <td>
                        <p>71</p>
                    </td>
                    <td>
                        <p>مسلم سنّي</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>ذكر</p>
                    </td>
                    <td>
                        <p>ميرنا</p>
                    </td>
                    <td>
                        <p>نضال</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    {{-- ## END TABLE 1 ## --}}





    {{-- ## START TABLE 2 ## --}}
    <h5 class="table-title-2">المرشّحين</h5>
    <div class="container">
        <table class="table table-responsive text-center content-table-2">
            <thead>
                <tr>
                    <th>
                        <p>عدد الأصوات</p>
                    </th>
                    <th>
                        <p>القضاء</p>
                    </th>
                    <th>
                        <p>اسم اللائحة</p>
                    </th>
                    <th>
                        <p>الاسم</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        <p>165</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>سوا للبنان</p>
                    </td>
                    <td>
                        <p>طه عبدالله</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- ## END TABLE 2 ## --}}


    <p class="developed-by">Developed By Gms &copy; 2022</p>


    {{-- ## END MAIN ## --}}










    <!-- Optional JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/hide-nav.js') }}"></script>
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