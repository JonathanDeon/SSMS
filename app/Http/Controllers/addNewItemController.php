<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;
class addNewItemController extends Controller
{
       public function postaddNew(Request $request)
	{	
			

			
			//$itemid = $request['itemid'];
			$itemName = $request['itemName'];
			$Irate = $request['Irate'];
			$rol = $request['rol'];
			$unitvalue = $request['unitvalue'];
			//$tot = $request['tot'];
		


			DB::table('item')->insert(
					['itemName' => $itemName, 'Irate' => $Irate, 'rol' => $rol, 'unitvalue' => $unitvalue,]);
				
//'pid' => $pid, 
				return redirect()->back();

	}

		public function showItems(){

			$items = DB::select("select * from item");
			return view('Inventory', compact('items'));
		}
}
