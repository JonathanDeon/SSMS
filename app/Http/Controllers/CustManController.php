<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class CustManController extends Controller
{
    public function loadView()
    {
    	$customer = DB::select("select * from janitorial_customers");
     	return view('CustMan', compact('customer'));
    	
    }

    public function getCust(Request $request)

    {
      $custid = $request->input('custid');	
      $name = $request->input('name');
      $address = $request->input('address');
      $phone = $request->input('phone');
      $mail = $request->input('mail');
      $nic = $request->input('nic');
     
     DB::statement("INSERT INTO janitorial_customers values('$custid','$name','$address','$phone','$mail','$nic')");

     $customer = DB::select("select * from janitorial_customers");
     return view('CustMan', compact('customer'));	
  	}
}
