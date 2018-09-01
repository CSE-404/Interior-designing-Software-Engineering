<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactuPageController extends Controller{

    public function showContactupage()
    {
        return view('contactu');
    }
}
