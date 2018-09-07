<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Myproduct;

class MyproductPageController extends Controller{

    public function showMyproductpage()
    {
    	$myproducts = Myproduct::all();
        return view('myproduct', compact('myproducts'));
    }


}
