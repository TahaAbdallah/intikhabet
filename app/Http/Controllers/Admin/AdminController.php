<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\LawaehShateb;

class AdminController extends Controller
{

    // ###### LOGIN VIEW
    public function loginPage()
    {
        return view('admin.auth.loginPage');
    }

    // ####### LOGIN CHECK
    function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in admins table',
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('admin.loginPage')->with('fail', 'Incorrect credentials');
        }
    }

    // ############# LOGOUT
    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.loginPage');
    }

    // #######################################

    // public function index()
    // {
    //     $lawaeh = LawaehShateb::Paginate(15);
    //     return view('admin.index')
    //         ->with('lawaeh', $lawaeh);
    // }

    public function index(Request $request)
    {
        $search =  $request->input('q');
        if ($search != "") {
            $lawaeh = LawaehShateb::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
                ->paginate(10);
            $lawaeh->appends(['q' => $search]);
        } else {
            $lawaeh = LawaehShateb::paginate(20);
        }
        return View('admin.index')->with('lawaeh', $lawaeh);
    }

    public function lawaeh()
    {
        return view('admin.lawaeh');
    }

    public function profilePage()
    {
        return view('admin.profilePage');
    }

    // ##################### CATEGORIES PAGES
    public function dataEntryPage()
    {
        return view('admin.dataEntryPage');
    }

    public function murakebPage()
    {
        return view('admin.murakebPage');
    }

    public function mandoubMutajawwelPage()
    {
        return view('admin.mandoubMutajawwelPage');
    }

    public function mandoubSebetPage()
    {
        return view('admin.mandoubSebetPage');
    }

    public function munassekPage()
    {
        return view('admin.munassekPage');
    }

    public function alMuntakhibinPage()
    {
        return view('admin.alMuntakhibinPage');
    }

    public function lamYantakhibouPage()
    {
        return view('admin.lamYantakhibouPage');
    }

    // ##################### ADDING PAGES
    public function addDataEntryPage()
    {
        return view('admin.addDataEntryPage');
    }

    public function addMurakebPage()
    {
        return view('admin.addMurakebPage');
    }

    public function addMandubMutajawwelPage()
    {
        return view('admin.addMandubMutajawwelPage');
    }

    public function addMandubSebetPage()
    {
        return view('admin.addMandubSebetPage');
    }

    public function addMunassekPage()
    {
        return view('admin.addMunassekPage');
    }

    public function addMuntakhebPage()
    {
        return view('admin.addMuntakhebPage');
    }

    public function addMurashahPage()
    {
        return view('admin.addMurashahPage');
    }
}
