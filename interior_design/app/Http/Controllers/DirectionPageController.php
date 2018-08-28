<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectionPageController extends Controller{

    public function showDirectionpage()
    {
        return view('direction');
    }
}
