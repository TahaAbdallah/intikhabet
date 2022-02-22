@extends('layout.navbar')

@section('mainContent')

<div class="container row align-items-center justify-content-around m-auto main-cont">
    <input class="search-bar" type="search" name="" id="" placeholder="بحث">
    <a class="adding-btn" href="{{ route('addMuntakhebPage') }}">اضافة مُنتَخِب <i class="fa fa-plus"
            aria-hidden="true"></i></a>
</div>

{{-- ## START TABLE 1 ## --}}
<div class="container">
    <h5 class="table-title">لوائح الشّطب</h5>
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
            <tr class="mantakhab">
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
                    <p>لم ينتخب</p>
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
            <tr class="mantakhab">
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
                    <p>لم ينتخب</p>
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
            <tr class="mantakhab">
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
                    <p>لم ينتخب</p>
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
            <tr class="mantakhab">
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
                    <p>لم ينتخب</p>
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
            <tr class="mantakhab">
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
                    <p>لم ينتخب</p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
{{-- ## END TABLE 1 ## --}}





{{-- ## START TABLE 2 ## --}}
<h5 class="table-title-2 mb-3" id="almurashahin">المرشّحين</h5>
<div class="text-center">
    <a class="adding-btn" href="{{ route('addMurashahPage') }}">اضافة مُرَشّح <i class="fa fa-plus"
            aria-hidden="true"></i></a>
</div>

<div class="container">
    <table class="table table-responsive text-center content-table-2 mt-3">
        <thead>
            <tr>
                <th>
                    <p>الاسم</p>
                </th>
                <th>
                    <p>اسم اللائحة</p>
                </th>
                <th>
                    <p>المحافظة</p>
                </th>
                <th>
                    <p>القضاء</p>
                </th>
                <th>
                    <p>عدد الأصوات</p>
                </th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>سوا للبنان</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>165</p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>سوا للبنان</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>165</p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>سوا للبنان</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>165</p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>سوا للبنان</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>165</p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>سوا للبنان</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>165</p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>سوا للبنان</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>165</p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
                </td>
                <td>
                    <p>سوا للبنان</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>طرابلس</p>
                </td>
                <td>
                    <p>165</p>
                </td>
            </tr>

        </tbody>
    </table>
</div>
{{-- ## END TABLE 2 ## --}}


{{-- ## END MAIN ## --}}

@endsection