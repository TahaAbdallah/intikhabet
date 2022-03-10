@extends('admin.layout.navbar')

@section('mainContent')

<div class="back-home-cont">
    <a class="back-home" href="{{ route('admin.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>

<div class="container">
    <div class="profile-page-img-cont">
        <img class="profile-page-img" src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
    </div>
    <form class="edit-profile-page-form" action="">
        <div class="row edit-profile-form-contents">
            <div class="row justify-content-between align-items-center profile-content-row">
                <input type="file" class="file-input">
                <p>تعديل الصورة الشّخصية</p>
            </div>
            <div class="row justify-content-between align-items-center profile-content-row">
                <input type="text" value="طه عبدالله" autofocus>
                <p> : الاسم</p>
            </div>
            <div class="row justify-content-between align-items-center profile-content-row">
                <input type="email" value="taha.abdallah1999@gmail.com">
                <p> : الايميل</p>
            </div>
            <div class="row justify-content-between align-items-center profile-content-row">
                <input type="number" value="71123456">
                <p> : رقم الهاتف</p>
            </div>
            @if (Route::has('password.request'))
            <div class="change-pass-row">
                <a href="{{ route('password.request') }}">
                    هل تريد تغيير كلمة السّر ؟
                </a>
            </div>
            @endif
            <button class="adding-page-btn" href="">حفظ التعديلات</button>
        </div>
    </form>
</div>


@endsection