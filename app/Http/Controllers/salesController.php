<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class salesController extends Controller
{
    

		public function postaddSales(Request $request)
		{
				
			//$iid = $request['iid'];
			$Iitemid = $request['Iitemid'];
			$Iqty = $request['Iqty'];
			$Idate = $request['Idate'];
			$Iprice = $request['Iprice'];
			$Idisc = $request['Idisc'];
			$Itotal = $request['Itotal'];
		

			DB::table('sales')->insert(
					['Iitemid'=> $Iitemid, 'Iqty' => $Iqty, 'Idate' => $Idate, 'Iprice' => $Iprice, 'Idisc' => $Idisc, 'Itotal' => $Itotal]);

			$it=DB::table('item')->where('itemid',$Iitemid)->value('qty');
			$redQty=$it - $Iqty;
			DB::statement("UPDATE item SET qty='$redQty' WHERE itemid = '$Iitemid'");




				return redirect()->back();
		}




	public function showSales(){


			$check=DB::select("select itemid,qty from item");
			$itm = DB::select("select itemid from item");
			$sales = DB::select("select * from sales");
			return view('Sales', compact('sales','itm','check'));
		}


		






}
