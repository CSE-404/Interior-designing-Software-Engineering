<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiningPageController extends Controller{

    public function showDiningpage()
    {
        return view('dining');
    }
}
