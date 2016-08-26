<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\customer;

class feedbackController extends Controller
{
    public function viewfeedback(){
    	$feedback= \DB::select("SELECT * FROM feedback;");

    	return view('feedback',compact('feedback'));

    }
}
