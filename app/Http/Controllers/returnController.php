<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class returnController extends Controller
{
    
			public function postaddPr(Request $request)
		{
				
			//$prid = $request['prid'];
			$PRpid = $request['PRpid'];
			$PRdate = $request['PRdate'];
			$PRqty = $request['PRqty'];
			$PRprice = $request['PRprice'];
			$PRtotal = $request['PRtotal'];
		

			DB::table('preturn')->insert(
					['PRpid'=> $PRpid, 'PRdate' => $PRdate, 'PRqty' => $PRqty, 'PRprice' => $PRprice, 'PRtotal' => $PRtotal]);
				

				return redirect()->back();
		}

			public function showPR(){

			$rets = DB::select("select * from preturn");
			return view('PurchaseReturns', compact('rets'));
		}



}
