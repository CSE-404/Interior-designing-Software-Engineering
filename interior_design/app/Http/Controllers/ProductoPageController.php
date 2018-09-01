<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoPageController extends Controller{

    public function showProductopage()
    {
        return view('producto');
    }
}
