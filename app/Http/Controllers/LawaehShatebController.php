<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LawaehShatebImport;
use App\Exports\LawaehShatebExport;


class LawaehShatebController extends Controller
{

    public function fileImportExport()
    {
        return view('file-import');
    }

    public function fileImport(Request $request)
    {
        Excel::import(new LawaehShatebImport, $request->file('file')->store('temp'));
        return back()->with('success', 'all data uploaded successfuly');
    }

    public function fileExport()
    {
        return Excel::download(new LawaehShatebExport, 'users-collection.xlsx');
    }
}
