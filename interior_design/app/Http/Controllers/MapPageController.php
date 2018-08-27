<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapPageController extends Controller{

    public function showMappage()
    {
        return view('map');
    }
}
