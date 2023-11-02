<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApaituRPLController extends Controller
{
    public function index (){
        return view('ApaituRPL.Landing_Page',[
            'title' => 'Landing Page'
        ]);
    }
}
