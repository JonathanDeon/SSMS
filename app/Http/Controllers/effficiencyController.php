<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class efficiencyController extends Controller
{
	public function loadview()
	{
		$efficiency=null;

		$branches = DB::select('select * from branches');

		

		return view('EfficiencyAnalysis',compact('branches','efficiency'));
	}

  public function loadtable(Request $request)
	{
		$Bname = $request->input('selectBranch2');

		var_dump($Bname);

		 $BID = DB::select("select id from branches where Branch_name='$Bname'");

     	$id=$BID[0]->id;

		

		$efficiency = DB::select("select * from efficiency");

		$branches = DB::select('select * from branches');



		return view('EfficiencyAnalysis',compact('branches','efficiency'));
	}

	

}
