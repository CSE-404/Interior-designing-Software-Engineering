<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hire;

class HirePageController extends Controller{

    public function showHirepage()
    {
    	$hires = Hire::all();
        return view('hire', compact('hires'));
    }

    // public function getData()
    // {
    // 	$data['data'] = DB::table('designer')->get();
    // }
}
