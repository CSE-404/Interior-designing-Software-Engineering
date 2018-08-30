<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WashPageController extends Controller{

    public function showWashpage()
    {
        return view('wash');
    }
}
