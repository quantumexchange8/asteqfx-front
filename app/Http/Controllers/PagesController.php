<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function aboutus02()
    {
        return view('pages/aboutus02');
    }

    public function contact()
    {
        return view('pages/contact');
    }

    public function aml()
    {
        return view('pages/aml');
    }

    public function stpStandard()
    {
        return view('account/stpStandard');
    }

    public function ecnStandard()
    {
        return view('account/ecnStandard');
    }

}
