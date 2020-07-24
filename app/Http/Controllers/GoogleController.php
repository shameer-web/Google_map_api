<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Google;

class GoogleController extends Controller
{
    //



    // ---------------- [ Load View ] ----------------
    public function index(Request $request) {
 
        return view("auto-complete");
 
    }
    public function store(Request $request){
    	//dd($request->all());

    	$google =new Google();

       $google->address =$request->address;
       $google->latitude =$request->latitude;
       $google->longitude =$request->longitude;


       $google->save();
       return "hiiii";

    }

}
