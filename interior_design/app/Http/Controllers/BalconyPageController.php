<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalconyPageController extends Controller{

    public function showBalconypage()
    {
        return view('balcony');
    }
}
