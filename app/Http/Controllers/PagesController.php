<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function services()
    {
        return view('services');
    }

    public function conciergeServices()
    {
        return view('concierge-service');
    }

    public function groundService()
    {
        return view('ground-service');
    }

    public function weatherReport()
    {
        return view('weather-report');
    }

    public function car()
    {
        return view('car');
    }
}
