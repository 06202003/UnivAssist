<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }
    public function admin()
    {
        return view('dashboardadmin');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function book()
    {
        return view('pages.book');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function indekos()
    {
        return view('pages.indekos');
    }

    public function laptop()
    {
        return view('pages.laptop');
    }
    public function kosdetail()
    {
        return view('pages.kosdetail');
    }
    public function keranjang()
    {
        return view('pages.keranjang');
    }
}
