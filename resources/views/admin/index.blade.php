@extends('admin.layout.navbar')

@section('mainContent')

<form class="container row align-items-center justify-content-around m-auto main-cont">

    <input class="search-bar" type="search" name="q" placeholder="بحث">

    <a class="adding-btn" href="{{ route('admin.addMuntakhebPage') }}">اضافة مُنتَخِب <i class="fa fa-plus"
            aria-hidden="true"></i></a>
</form>

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
                    <p>الشّهرة</p>
                </th>
                <th>
                    <p>اسم الأب</p>
                </th>
                <th>
                    <p>اسم الأم</p>
                </th>
                <th>
                    <p>تاريخ الولادة</p>
                </th>
                <th>
                    <p>الجنس</p>
                </th>
                <th>
                    <p>المذهب</p>
                </th>
                <th>
                    <p>رقم السّجل</p>
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
                <th>
                    <p>(ازالة)</p>
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- <tr class="ntakhab">
                <td scope="row">
                    <p>طه</p>
                </td>
                <td>عبدالله</td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>ذكر</p>
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
                <td class="delete-td">
                    <p><a data-toggle="modal" data-target="#muntakhebModel"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr>
            <tr class="mantakhab">
                <td scope="row">
                    <p>طه</p>
                </td>
                <td>عبدالله</td>
                <td>
                    <p>نضال</p>
                </td>
                <td>
                    <p>ميرنا</p>
                </td>
                <td>
                    <p>30/4/1999</p>
                </td>
                <td>
                    <p>ذكر</p>
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
                <td class="delete-td">
                    <p><a data-toggle="modal" data-target="#muntakhebModel"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr> --}}

            @foreach ($lawaeh as $item)
            <tr class="ntakhab">
                <td scope="row">
                    <p>{{ $item->name }}</p>
                </td>
                <td>{{ $item->last_name }}</td>
                <td>
                    <p>{{ $item->father_name }}</p>
                </td>
                <td>
                    <p>{{ $item->mother_name }}</p>
                </td>
                <td>
                    <p>{{ $item->birthdate }}</p>
                </td>
                <td>
                    <p>{{ $item->gender }}</p>
                </td>
                <td>
                    <p>{{ $item->mazhab }}</p>
                </td>
                <td>
                    <p>{{ $item->kayd_number }}</p>
                </td>
                <td>
                    <p>{{ $item->muhafaza }}</p>
                </td>
                <td>
                    <p>{{ $item->kadae }}</p>
                </td>
                <td>
                    <p>71123456</p>
                </td>
                <td>
                    @if ($item->mulahazat == null)
                    <p>---</p>
                    @endif
                    <p>{{ $item->mulahazat }}</p>
                </td>
                <td>
                    <p>انتخب</p>
                </td>
                <td class="delete-td">
                    <p><a data-toggle="modal" data-target="#muntakhebModel"><i class="fa fa-times"
                                aria-hidden="true"></i></a>
                    </p>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>
    {{-- {{ $lawaeh->links() }} --}}
    {{ $lawaeh->onEachSide(0)->links() }}

</div>


{{-- ## END TABLE 1 ## --}}



<!-- muntakheb modal -->
<div class="modal fade text-center" id="muntakhebModel" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">هل فعلا تريد ازالة هذا المُنتَخِب ؟</h5>
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

{{-- ## END MAIN ## --}}

@endsection