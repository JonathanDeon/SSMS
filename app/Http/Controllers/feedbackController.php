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

    public function fillfeed(Request $request){
            $id = $request['id'];
            $feed = DB::select("select * from feedback where cusID = '$id'");
          	$name= DB::select("SELECT name FROM customer where cus_id ='$id'");

            return json_encode($feed);
            
        }

         public function fillname(Request $request){
            $id = $request['id'];
           
          	$name= DB::select("SELECT name FROM customer where cus_id ='$id'");

            return json_encode($name);
            
        }


}
