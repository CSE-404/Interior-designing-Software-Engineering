<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectPageController extends Controller{

    public function showProjectpage()
    {
        return view('project');
    }
}
