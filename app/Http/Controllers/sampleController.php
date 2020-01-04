<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    //
    public function index(){
    	return view('pages.index');
    }
    public function about(){
    	return view('pages.about');
    }
    public function services()
    {
    	//dd("hello");
    	return view('pages.services');
    }
}
