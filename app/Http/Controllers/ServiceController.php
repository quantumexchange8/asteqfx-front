<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceMobileApp()
    {
        return view("service/mobileApp");
    }

    public function serviceMT5()
    {
        return view("service/mt5");
    }

    public function serviceMT4()
    {
        return view("service/mt4");
    }

    public function serviceForex()
    {
        return view("service/forex");
    }

    public function serviceIndices()
    {
        return view("service/indices");
    }

    public function serviceMetal()
    {
        return view("service/metal");
    }

    public function serviceStock()
    {
        return view("service/stock");
    }

    public function serviceCrypto()
    {
        return view("service/crypto");
    }

    public function servicePAMM()
    {
        return view("service/pamm");
    }
}
