<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaPageController extends Controller{

    public function showIdeapage()
    {
        return view('idea');
    }
}
