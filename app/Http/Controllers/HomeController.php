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

    // ##################### CATEGORIES PAGES
    public function dataEntryPage()
    {
        return view('dataEntryPage');
    }

    public function murakebPage()
    {
        return view('murakebPage');
    }

    public function mandoubMutajawwelPage()
    {
        return view('mandoubMutajawwelPage');
    }

    public function mandoubSebetPage()
    {
        return view('mandoubSebetPage');
    }

    public function munassekPage()
    {
        return view('munassekPage');
    }

    public function alMuntakhibinPage()
    {
        return view('alMuntakhibinPage');
    }

    public function lamYantakhibouPage()
    {
        return view('lamYantakhibouPage');
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

    public function addMuntakhebPage()
    {
        return view('addMuntakhebPage');
    }

    public function addMurashahPage()
    {
        return view('addMurashahPage');
    }
}
