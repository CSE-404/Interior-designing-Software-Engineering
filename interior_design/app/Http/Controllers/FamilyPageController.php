<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamilyPageController extends Controller{

    public function showFamilypage()
    {
        return view('family');
    }
}
