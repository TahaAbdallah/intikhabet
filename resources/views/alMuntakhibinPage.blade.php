@extends('layout.navbar')

@section('mainContent')

<div class="back-home-cont">
    <a class="back-home" href="{{ route('index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>

<div class="container row align-items-center justify-content-around m-auto main-cont">
    <input class="search-bar" type="search" name="" id="" placeholder="بحث">
    <a class="adding-btn" href="">اضافة مُنتَخِب <i class="fa fa-plus" aria-hidden="true"></i></a>
</div>

{{-- ## START TABLE 1 ## --}}
<div class="container">
    <h5 class="table-title">المُنتخِبين</h5>
    <table class="table table-responsive text-center content-table">
        <thead>
            <tr>
                <th>
                    <p>الاسم</p>
                </th>
                <th>
                    <p>اسم الأب</p>
                </th>
                <th>
                    <p>اسم الأم</p>
                </th>
                <th>
                    <p>الجنس</p>
                </th>
                <th>
                    <p>تاريخ الولادة</p>
                </th>
                <th>
                    <p>المذهب</p>
                </th>
                <th>
                    <p>رقم القيد</p>
                </th>
                <th>
                    <p>المحافظة</p>
                </th>
                <th>
                    <p>القضاء</p>
                </th>
                <th>
                    <p>رقم الهاتف</p>
                </th>
                <th>
                    <p>ملاحظة</p>
                </th>
                <th>
                    <p>انتخب / لم ينتخب</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
            <tr class="ntakhab">
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>ذكر</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>مسلم سنّي</p>
                </td>
                <td>
                    <p>71</p>
                </td>
                <td>
                    <p>الشمال</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    <p>لا يوجد ملاحظات</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- ## END TABLE 1 ## --}}

{{-- ## END MAIN ## --}}

@endsection