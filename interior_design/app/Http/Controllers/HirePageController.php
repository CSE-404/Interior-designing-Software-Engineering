<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HirePageController extends Controller{

    public function showHirepage()
    {
        return view('hire');
    }
}
