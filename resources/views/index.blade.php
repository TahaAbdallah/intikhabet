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

    <div class="main-bg">

        {{-- ## START NAVBAR ## --}}

        <nav>
            <div class="nav-1 row align-items-center justify-content-between">
                <div>
                    <img onclick="showNav()" class="burger-btn" id="burger-btn"
                        src="{{ asset('images/burger-btn.png') }}">
                    <img onclick="hideNav()" class="close-btn hide-btn" id="close-btn"
                        src="{{ asset('images/close-btn.png') }}">
                    <a href="" class="logout-btn">تسجيل خروج</a>
                </div>
                <div>
                    <div class="row align-items-center">
                        <div class="text-right">
                            <p class="p-0 m-0 profile-name">طه عبدالله</p>
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

        <div class="row justify-content-center">

            <div class="container-fluid table-title-cont">
                <h5 class="table-title">لوائح الشّطب</h5>
            </div>

            <div class="container-fluid row justify-content-between table-content-cont">

                <div>
                    <p class="table-content-title">ملاحظة</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                    <p class="table-content-contents">لا يوجد ملاحظات</p>
                </div>
                <div>
                    <p class="table-content-title">رقم الهاتف</p>
                    <p class="table-content-contents">86123456</p>
                    <p class="table-content-contents">71123456</p>
                    <p class="table-content-contents">86123456</p>
                    <p class="table-content-contents">71123456</p>
                    <p class="table-content-contents">86123456</p>
                    <p class="table-content-contents">71123456</p>
                    <p class="table-content-contents">86123456</p>
                    <p class="table-content-contents">71123456</p>
                    <p class="table-content-contents">86123456</p>
                    <p class="table-content-contents">71123456</p>
                </div>
                <div>
                    <p class="table-content-title">انتخب / لم ينتخب</p>
                    <p class="table-content-contents">انتخب</p>
                    <p class="table-content-contents">لم ينتخب</p>
                    <p class="table-content-contents">انتخب</p>
                    <p class="table-content-contents">لم ينتخب</p>
                    <p class="table-content-contents">انتخب</p>
                    <p class="table-content-contents">لم ينتخب</p>
                    <p class="table-content-contents">انتخب</p>
                    <p class="table-content-contents">لم ينتخب</p>
                    <p class="table-content-contents">انتخب</p>
                    <p class="table-content-contents">لم ينتخب</p>
                </div>
                <div>
                    <p class="table-content-title">القضاء</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                    <p class="table-content-contents">طرابلس</p>
                </div>
                <div>
                    <p class="table-content-title">المحافظة</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                    <p class="table-content-contents">الشمال</p>
                </div>
                <div>
                    <p class="table-content-title">رقم القيد</p>
                    <p class="table-content-contents">217</p>
                    <p class="table-content-contents">71</p>
                    <p class="table-content-contents">217</p>
                    <p class="table-content-contents">71</p>
                    <p class="table-content-contents">217</p>
                    <p class="table-content-contents">71</p>
                    <p class="table-content-contents">217</p>
                    <p class="table-content-contents">71</p>
                    <p class="table-content-contents">217</p>
                    <p class="table-content-contents">71</p>
                </div>
                <div>
                    <p class="table-content-title">المذهب</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                    <p class="table-content-contents">مسلم سنّي</p>
                </div>
                <div>
                    <p class="table-content-title">تاريخ الولادة</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                    <p class="table-content-contents">30/4/1999</p>
                </div>
                <div>
                    <p class="table-content-title">الجنس</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                    <p class="table-content-contents">ذكر</p>
                </div>
                <div>
                    <p class="table-content-title">اسم الأم</p>
                    <p class="table-content-contents">ميرنا</p>
                    <p class="table-content-contents">سميرة</p>
                    <p class="table-content-contents">ميرنا</p>
                    <p class="table-content-contents">سميرة</p>
                    <p class="table-content-contents">ميرنا</p>
                    <p class="table-content-contents">سميرة</p>
                    <p class="table-content-contents">ميرنا</p>
                    <p class="table-content-contents">سميرة</p>
                    <p class="table-content-contents">ميرنا</p>
                    <p class="table-content-contents">سميرة</p>
                </div>
                <div>
                    <p class="table-content-title">اسم الأب</p>
                    <p class="table-content-contents">نضال</p>
                    <p class="table-content-contents">رامي</p>
                    <p class="table-content-contents">نضال</p>
                    <p class="table-content-contents">رامي</p>
                    <p class="table-content-contents">نضال</p>
                    <p class="table-content-contents">رامي</p>
                    <p class="table-content-contents">نضال</p>
                    <p class="table-content-contents">رامي</p>
                    <p class="table-content-contents">نضال</p>
                    <p class="table-content-contents">رامي</p>
                </div>
                <div>
                    <p class="table-content-title">الاسم</p>
                    <p class="table-content-contents">طه عبدالله</p>
                    <p class="table-content-contents">كريم كمالي</p>
                    <p class="table-content-contents">طه عبدالله</p>
                    <p class="table-content-contents">كريم كمالي</p>
                    <p class="table-content-contents">طه عبدالله</p>
                    <p class="table-content-contents">كريم كمالي</p>
                    <p class="table-content-contents">طه عبدالله</p>
                    <p class="table-content-contents">كريم كمالي</p>
                    <p class="table-content-contents">طه عبدالله</p>
                    <p class="table-content-contents">كريم كمالي</p>
                </div>

            </div>

        </div>

    </div>











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