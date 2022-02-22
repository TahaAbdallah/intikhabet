@extends('layout.navbar')

@section('mainContent')

<div class="back-home-cont">
    <a class="back-home" href="{{ route('index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>

<div class="container row align-items-center justify-content-around m-auto main-cont">
    <input class="search-bar" type="search" name="" id="" placeholder="بحث">
    <a class="adding-btn" href="{{ route('addMurakebPage') }}">اضافة مراقب<i class="fa fa-plus"
            aria-hidden="true"></i></a>
</div>

<div class="container">

    {{-- ## START TABLE 1 ## --}}
    <div class="container">
        <h5 class="table-title">المراقبين</h5>
        <table class="table text-center content-table categories-table">
            <thead>
                <tr>
                    <th>
                        <p>الاسم</p>
                    </th>
                    <th>
                        <p>الايميل</p>
                    </th>
                    <th>
                        <p>رقم الهاتف</p>
                    </th>
                    <th>
                        <p>الصورة الشّخصية</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        <p>طه عبدالله</p>
                    </td>
                    <td>
                        <p>taha.abdallah1999@gmail.com</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>
                    <td>
                        <p>
                        <div class="table-img-cont">
                            <img src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                        </div>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- ## END TABLE 1 ## --}}

</div>


@endsection