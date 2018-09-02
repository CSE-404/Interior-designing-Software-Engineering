<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterPageController extends Controller{

    public function showMasterpage()
    {
        return view('master');
    }
}
