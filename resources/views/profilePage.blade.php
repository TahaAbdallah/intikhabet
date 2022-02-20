@extends('layout.navbar')

@section('mainContent')

<div class="back-home-cont">
    <a class="back-home" href="{{ route('index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>

<div class="container">
    <div class="profile-page-img-cont">
        <img class="profile-page-img" src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
    </div>
    <form class="profile-page-form" action="">

        <div class="row profile-form-contents">
            <p>الاسم : طه عبدالله</p>
            <p>taha.abdallah1999@gmail.com : الايميل</p>
            <p>71123456 : رقم الهاتف</p>
            <p>دورك : مسؤول</p>
            <a class="profile-page-edit-btn" href="{{ route('editProfilePage') }}">تعديل الملف الشّخصي</a>
        </div>
    </form>
</div>


@endsection