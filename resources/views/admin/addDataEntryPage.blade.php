@extends('admin.layout.navbar')

@section('mainContent')

<div class="back-home-cont">
    <a class="back-home" href="{{ route('admin.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>

<div class="container">
    <h5 class="adding-title">Data Entry اضافة</h5>
    <form class="adding-page-form" action="">
        <div class="row adding-page-form-contents">
            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="text">
                <p> : الاسم</p>
            </div>
            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="email">
                <p> : الايميل</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="password">
                <p> : الباسوورد</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-row">
                <input id="password-confirm" type="password" name="password_confirmation">
                <p>: اعد كتابة الباسوورد</p>
            </div>

            <div class="row justify-content-between align-items-center profile-content-row">
                <input type="number">
                <p> : رقم الهاتف</p>
            </div>
            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="file">
                <p>اضافة صورة شّخصية (اختياري)</p>
            </div>

            <button class="adding-page-btn" href="">Data Entry اضافة</button>
        </div>
    </form>
</div>


@endsection