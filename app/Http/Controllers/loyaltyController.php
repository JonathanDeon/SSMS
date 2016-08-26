<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\customer;

class loyaltyController extends Controller
{
   public function getCustomerName(){
    	
        
		$customers = \DB::select("select name,cus_id from customers");
		//return $customers;
    	return view('CustomerLoyalty',compact('customers'));


   	//echo "test";
    }


   
}
