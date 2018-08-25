<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorPageController extends Controller{

    public function showColorpage()
    {
        return view('color');
    }
}
