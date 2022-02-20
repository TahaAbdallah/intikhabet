<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    // ##################### LOGIN
    public function loginPage()
    {
        return view('loginPage');
    }

    public function profilePage()
    {
        return view('profilePage');
    }

    // ##################### ADDING PAGES
    public function addDataEntryPage()
    {
        return view('addDataEntryPage');
    }

    public function addMurakebPage()
    {
        return view('addMurakebPage');
    }

    public function addMandubMutajawwelPage()
    {
        return view('addMandubMutajawwelPage');
    }

    public function addMandubSebetPage()
    {
        return view('addMandubSebetPage');
    }

    public function addMunassekPage()
    {
        return view('addMunassekPage');
    }
}
