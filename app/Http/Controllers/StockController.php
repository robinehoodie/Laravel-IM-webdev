<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{

    public function index()
    {
        return view('Official-Content/Stock');
    }

    public function wood()
    {
        return view('Official-Content/wood');
    }

    public function plastic()
    {
        return view('Official-Content/plastic');
    }

    public function concrete()
    {
        return view('Official-Content/concrete');
    }

    public function metal()
    {
        return view('Official-Content/metal');
    }

    public function others()
    {
        return view('Official-Content/others');
    }
}