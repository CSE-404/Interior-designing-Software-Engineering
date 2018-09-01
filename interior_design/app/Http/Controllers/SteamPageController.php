<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SteamPageController extends Controller{

    public function showSteampage()
    {
        return view('steam');
    }
}
