<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\customer;

//use Requests\RegisterCustomerRequest;
use App\Http\Requests\RegisterCustomerRequest;
use Illuminate\Http\Request;

use DB;

class register extends Controller
{
    public function viewRegisterCustomer(){
    	
        $cusid= \DB::select("SELECT cus_id FROM customers ORDER BY cus_id DESC LIMIT 1;");
		$customer= \DB::select("select * from customers");

    	return view('RegisterCustomer',compact('customer','cusid'));
    }


       public function addCustomer(RegisterCustomerRequest $request){
             
        $name = $request->input('CusName');
        $address1 = $request->input('CusAdd1');
        $address2 = $request->input('CusAdd2');
        $address3 = $request->input('CusAdd3');
        $tele = $request->input('cusTele');
        $email = $request->input('CusEmail');
        $nic = $request->input('CusNIC');
        $pw = $request->input('CusPW');
        $vType = $request->input('vType');
        $vMake = $request->input('vMake');
        $vModel = $request->input('vModel');
        $vnumbp = $request->input('vnumbP');
        // \DB::connection()->pdo->beginTransaction();
        DB::beginTransaction();
        $data=DB::statement(
            "INSERT INTO customers(name,address1,address2,address3,contactNo,cusEmail,cusNIC,cusPW)
            VALUES ('$name','$address1','$address2','$address3','$tele','$email','$nic','$pw')");

        $id=DB::getPdo()->lastInsertId();
        echo $id;
        var_dump($id);
       DB::statement(
            "INSERT INTO vehicle(model,type,number_plate,make,customer)
            VALUES ('$vModel','$vType','$vnumbp','$vMake','$id')"); 
       DB::commit();

       \Session::flash('flash_message','done');
          
      
        return redirect('RegisterCustomer');
        
        }

        public function fillCustomer(Request $request){
            $id = $request['id'];
            $customers = DB::select("select * from customers where cus_id = '$id'");

            return json_encode($customers);
        }

  
}
 

        