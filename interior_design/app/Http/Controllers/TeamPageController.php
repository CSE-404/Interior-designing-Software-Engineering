<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamPageController extends Controller{

    public function showTeampage()
    {
        return view('team');
    }

    public function getData()
    {
    	$data['data'] = DB::table('designer')->get();
    }
}
