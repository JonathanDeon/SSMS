<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\customer;

use DB;

class deficitControl extends Controller
{
    
	public function getCustomerN(){
    	
        
		$customers = DB::select("select name,cus_id from customer");
         $def = DB::select("select deficitID,cusid,amount from deficit");
	
		//return $customers;
    	return view('CustomerDeficit',compact('customers','def'));


   	//echo "test";
    }

    


     public function addDeficit(Request $request){
             
        
        $id = $request->input('cusname');
        $deficit = $request->input('defi'); 

               
        DB::statement(
            "INSERT INTO deficit(cusid,amount) VALUES ('$id','$deficit')"); 


        return redirect('CustomerDeficit');
}

public function setDeficit(Request $request)
        {
            $id = $request['id'];
            $deficita = $request['deficita'];
            $deficitm = $request['deficitm'];
            
            $amt = DB::select("select amount from deficit");

            $amount=$amt+$deficita-$deficitm;

            $affected = DB::update("UPDATE `deficit` SET `amount`='$amount' WHERE `cusid`='$id'");

        }
    

    public function filldeficit(Request $request){
            $id = $request['id'];
            $customers = DB::select("select * from deficit where cusid = '$id'");
            //$vehicle = DB::select("select * from vehicle where customer='$id'");

            return json_encode($customers);
            
        }




}