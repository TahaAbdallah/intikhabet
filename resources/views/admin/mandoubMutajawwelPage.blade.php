@extends('admin.layout.navbar')

@section('mainContent')

<div class="back-home-cont">
    <a class="back-home" href="{{ route('admin.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        الصفحة الرّئيسية</a>
    <hr>
</div>

<div class="container row align-items-center justify-content-around m-auto main-cont">
    <input class="search-bar" type="search" name="" id="" placeholder="بحث">
    <a class="adding-btn" href="{{ route('admin.addMandubMutajawwelPage') }}">اضافة مندوب متجوّل<i class="fa fa-plus"
            aria-hidden="true"></i></a>
</div>

<div class="container">

    {{-- ## START TABLE 1 ## --}}
    <div class="container">
        <h5 class="table-title">المندوبين المتجوّلين</h5>
        <table class="table table-responsive text-center content-table categories-table">
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
                        <p>عنوان المندوب</p>
                    </th>
                    <th>
                        <p>المنطقة المسؤول عنها</p>
                    </th>
                    <th>
                        <p>تاريخ الولادة</p>
                    </th>
                    <th>
                        <p>الصورة الشّخصية</p>
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
                        <p>taha.abdallah1999@gmail.com</p>
                    </td>
                    <td>
                        <p>71123456</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>طرابلس</p>
                    </td>
                    <td>
                        <p>30/4/1999</p>
                    </td>
                    <td>
                        <p>
                        <div class="table-img-cont">
                            <img src="{{ asset('images/IMG_20211212_164914_346.jpg') }}">
                        </div>
                        </p>
                    </td>
                    <td class="delete-without-border-td">
                        <p><a data-toggle="modal" data-target="#mandubMutajawwelModel"><i class="fa fa-times"
                                    aria-hidden="true"></i></a>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- ## END TABLE 1 ## --}}

</div>

<!-- mandub Mutajawwel modal -->
<div class="modal fade text-center" id="mandubMutajawwelModel" tabindex="-1" role="dialog"
    aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> هل فعلا تريد ازالة هذا المندوب المتجوّل ؟</h5>
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