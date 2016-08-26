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
				

				return redirect()->back();
		}




	public function showSales(){

			$sales = DB::select("select * from sales");
			return view('Sales', compact('sales'));
		}


		






}
