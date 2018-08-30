<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsPageController extends Controller{

    public function showNewspage()
    {
        return view('news');
    }
}
