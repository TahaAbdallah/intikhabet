@extends('admin.layout.navbar')

@section('mainContent')


<div class="back-home-cont">
    <a class="back-home" href="{{ route('admin.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>

<div class="container">
    <h5 class="adding-title">اضافة مُنتَخِب </h5>
    <form class="adding-page-form" action="">
        <div class="row adding-page-form-contents">
            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="text">
                <p> : الاسم</p>
            </div>
            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="text">
                <p> : اسم الأب</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="text">
                <p> : اسم الام</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-row">
                <input type="date">
                <p>: تاريخ الولادة</p>
            </div>

            <div class="row justify-content-between align-items-center profile-content-row">
                <input type="number">
                <p> : رقم القيد</p>
            </div>

            <div class="row justify-content-between align-items-center profile-content-row">
                <input type="number">
                <p> : رقم الهاتف</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-col">
                <select name="" id="">
                    <option value="">ذكر</option>
                    <option value="">انثى</option>
                </select>
                <p> : الجنس</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-col">
                <select name="" id="">
                    <option value="">مسلم سنّي</option>
                    <option value="">مسلم شيعي</option>
                    <option value="">مسلم علوي</option>
                    <option value="">مسلم درزي</option>
                    <option value="">موارنة</option>
                    <option value="">روم اورثوذوكس</option>
                    <option value="">روم كاثوليك</option>
                    <option value="">ارمن اورثوذوكس</option>
                </select>
                <p> : المذهب</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-col">
                <select name="" id="muhafazat">
                    <option value="">اختار محافظة</option>
                    <option value="1">عكّار</option>
                    <option value="2">بعلبك الهرمل</option>
                    <option value="3">بيروت</option>
                    <option value="">البقاع</option>
                    <option value="">جبل لبنان</option>
                    <option value="">النّبطية</option>
                    <option value="">الشّمال</option>
                    <option value="">الجنوب</option>
                </select>
                <p> : المحافظة</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-col">
                <select name="" id="kadaa">
                    <option value="">اختار قضاء</option>
                </select>
                <p> : القضاء</p>
            </div>


            {{-- #### AKDIYA --}}
            {{-- AAKKAR --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none">
                <select name="" id="">
                    <option value="">عكّار</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- BAALBAK --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none" id="baalbak">
                <select name="" id="">
                    <option value="">بعلبك</option>
                    <option value="">الهرمل</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- BEIRUT --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none" id="beirut">
                <select name="" id="">
                    <option value="">لا يوجد قضاء</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- BIKAA --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none">
                <select name="" id="">
                    <option value="">زحلة</option>
                    <option value="">راشيا</option>
                    <option value="">البقاع الغربي</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- JABAL LUBNAN --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none">
                <select name="" id="">
                    <option value="">جبيل</option>
                    <option value="">كسروان</option>
                    <option value="">المتن</option>
                    <option value="">بعبدا</option>
                    <option value="">عاليه</option>
                    <option value="">الشوف</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- NABATIYE --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none">
                <select name="" id="">
                    <option value="">بنت جبيل</option>
                    <option value="">حاصبيا</option>
                    <option value="">مرجعيون</option>
                    <option value="">النّبطية</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- AL SHAMAL --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none">
                <select name="" id="">
                    <option value="">المنية</option>
                    <option value="">الضنية</option>
                    <option value="">زغرتا</option>
                    <option value="">طرابلس</option>
                    <option value="">الكورة</option>
                    <option value="">بشري</option>
                    <option value="">البترون</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- AL JANUB --}}
            <div class="row justify-content-between align-items-center adding-content-col d-none">
                <select name="" id="">
                    <option value="">جزين</option>
                    <option value="">صيدا</option>
                    <option value="">صور</option>
                </select>
                <p> : القضاء</p>
            </div>

            {{-- #### END AKDIYA --}}

            <div class="row justify-content-between align-items-center adding-content-col">
                <select name="" id="">
                    <option value="">لم ينتخب بعد</option>
                    <option value="">انتخب</option>
                </select>
                <p> : انتخب \ لم ينتخب</p>
            </div>

            <div class="row justify-content-between align-items-center adding-content-col">
                <input type="text">
                <p> : ملاحظات</p>
            </div>

            <button class="adding-page-btn" href="">اضافة مُنتَخِب</button>
        </div>
    </form>
</div>


@endsection