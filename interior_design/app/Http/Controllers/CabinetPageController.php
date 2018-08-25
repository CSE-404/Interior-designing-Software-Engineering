<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabinetPageController extends Controller{

    public function showCabinetpage()
    {
        return view('cabinet');
    }
}
