<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CenterPageController extends Controller{

    public function showCenterpage()
    {
        return view('center');
    }
}
