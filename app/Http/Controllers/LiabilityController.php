<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class LiabilityController extends Controller
{
     public function loadLiabilities()
	{
		$liabilities = DB::select("select * from liability");
		return view('liability', compact('liabilities'));
	}

    public function addLiabilities(Request $request)
    {
        $liabilities = DB::select("select * from liability");
    	$description = $request->input('description');
    	$amount = $request->input('amount');
    	$company = $request->input('company');

    	DB::statement("INSERT INTO liability(description,amount,company) VALUES ('$description','$amount','$company')");

    	return view('liability',compact('liabilities'));
        
    }

    public function deleteLiabilities(Request $request)
    {
        $liabilityID = $request['liabilityID'];
        DB::statement("DELETE FROM liability WHERE liabilityID = '$liabilityID'");
    }
}
