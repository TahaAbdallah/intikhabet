@extends('admin.layout.navbar')

@section('mainContent')

<div class="back-home-cont">
    <a class="back-home" href="{{ route('admin.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>



<div class="container hasel-entikhabi-cont">
    <h5 class="hasel-title">الحاصل الانتخابي</h5>
    <p class="text-center mt-4">الرّجاء ادخال عدد المقترعين في الدّائرة الكبرى لمعرفة الحاصل الانتخابي و ما اذا كانت
        اللّوائح قد تخطّت الحاصل ام لا</p>
    <form action="">
        <div class="text-center">
            <div class="row justify-content-center align-items-center mb-5 mt-5">
                <p id="haselTotal">13727</p>
                <p>=</p>
                <div class="row equation-row">
                    <input id="muktari3inTotal" type="number">
                    <p>11</p>
                </div>
                <p>= الحاصل الانتخابي</p>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="calculate-hasel">ادخال الحاصل</button>
                <a class="calculate-hasel" onclick="calculateHasel()">احتساب الحاصل</a>
            </div>
        </div>
    </form>
</div>





<div class="container ml-auto mr-auto row add-murashah-cont">
    <h5 class="lawaeh-title">اللّوائح والمُرَشَّحين</h5>
    <div class="row">
        <a href="{{ route('admin.addMurashahPage') }}">اضافة مُرَشّح <i class="fa fa-plus" aria-hidden="true"></i></a>
        <a href="{{ route('admin.addMurashahPage') }}">اضافة لائحة <i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>
</div>


<div class="container lawaeh-container">

    <div class="text-center lawaeh-table-sidebar">
        <h5 class="table-title-2" id="almurashahin">لائحة رقم 1</h5>

        <div class="row justify-content-center">
            <p id="aswatTotal">66100</p>
            <p> : مجموع اصوات اللائحة</p>
        </div>

        <div class="row justify-content-center" id="aadadMaka3edCont">
            <p id="aadadMaka3ed">4</p>
            <p> : عدد المقاعد الفائزة بها</p>
        </div>
        <p id="takhattatAlHasel"><i class="fa fa-check" aria-hidden="true"></i> تخطّت الحاصل الانتخابي</p>
        <p id="lamTatakhattaAlHasel"><i class="fa fa-times" aria-hidden="true"></i> لم تتخطّى الحاصل الانتخابي
        </p>
    </div>

    <table class="table table-responsive text-center lawaeh-table mt-3">
        <thead>
            <tr>
                <th>
                    <p>الاسم</p>
                </th>
                <th>
                    <p>الدّائرة الكبرى</p>
                </th>
                <th>
                    <p>الدّائرة الصّغرى</p>
                </th>
                <th>
                    <p>عدد الأصوات التّفضيلية</p>
                </th>
                <th>
                    <p>نسبة الأصوات التّفضيلية</p>
                </th>
                <th>
                    <p>صورة المُرَشَّح</p>
                </th>
                <th>
                    <p>(ازالة)</p>
                </th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
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
                <td>
                    <p>%17.65</p>
                </td>
                <td>
                    <p>
                    <div class="lawaeh-table-img-cont">
                        <img src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                    </div>
                    </p>
                </td>
                <td class="delete-without-border-td">
                    <p><a data-toggle="modal" data-target="#murashahModal"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
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
                <td>
                    <p>%17.65</p>
                </td>
                <td>
                    <p>
                    <div class="lawaeh-table-img-cont">
                        <img src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                    </div>
                    </p>
                </td>
                <td class="delete-without-border-td">
                    <p><a data-toggle="modal" data-target="#murashahModal"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
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
                <td>
                    <p>%17.65</p>
                </td>
                <td>
                    <p>
                    <div class="lawaeh-table-img-cont">
                        <img src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                    </div>
                    </p>
                </td>
                <td class="delete-without-border-td">
                    <p><a data-toggle="modal" data-target="#murashahModal"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
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
                <td>
                    <p>%17.65</p>
                </td>
                <td>
                    <p>
                    <div class="lawaeh-table-img-cont">
                        <img src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                    </div>
                    </p>
                </td>
                <td class="delete-without-border-td">
                    <p><a data-toggle="modal" data-target="#murashahModal"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr>

            <tr>
                <td scope="row">
                    <p>طه عبدالله</p>
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
                <td>
                    <p>%17.65</p>
                </td>
                <td>
                    <p>
                    <div class="lawaeh-table-img-cont">
                        <img src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                    </div>
                    </p>
                </td>
                <td class="delete-without-border-td">
                    <p><a data-toggle="modal" data-target="#murashahModal"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr>


        </tbody>
    </table>

</div>
{{-- ## END TABLE 2 ## --}}


<!-- murashah modal -->
<div class="modal fade text-center" id="murashahModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">هل فعلا تريد ازالة هذا المُرَشّح ؟</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>قم بالضّغط على نعم للتّأكيد</p>
            </div>
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</a>
                <a type="button" class="btn btn-danger">نعم</a>
            </div>
        </div>
    </div>
</div>



@endsection