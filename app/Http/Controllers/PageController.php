<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loanPage(){
    	return view('loan');
    }

    public function investorsPage(){
    	return view('investors');
    }
}
