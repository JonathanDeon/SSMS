<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class purchaseController extends Controller
{
         public function postPurchaseForm(Request $request)
	{


			//$pid = $request['pid'];
			$Pitemid = $request['Pitemid'];
			$Psupplier = $request['Psupplier'];
			$Pqty = $request['Pqty'];
			$Pdate = $request['Pdate'];
			$Pprice = $request['Pprice'];
			$Pdisc = $request['Pdisc'];
			$Ptotal = $request['Ptotal'];


			DB::table('addPurchase')->insert(
					['Pitemid'=> $Pitemid, 'Psupplier' => $Psupplier, 'Pqty' => $Pqty, 'Pdate' => $Pdate, 'Pprice' => $Pprice, 'Pdisc' => $Pdisc, 'Ptotal' => $Ptotal]);

//'pid' => $pid,
				
			$it=DB::table('item')->where('itemid',$Pitemid)->value('qty');
			$addQty=$it+$Pqty;
			DB::statement("UPDATE item SET qty='$addQty' WHERE itemid = '$Pitemid'");

//			$it=DB::select("select qty from item where itemid= '$Pitemid'");
/*			foreach ($it as $value) {
				$addQty = $value;
			}
			endforeach
			 $a = $addQty+ $Pqty;
			
			DB::statement("UPDATE item SET qty='$addQty' WHERE itemid = '$Pitemid'");

*/

			return redirect()->back();

	}

		public function showPurchase(){


            $Soption = DB::select("select ssid from supplier");
            $it = DB::select("select itemid from item");
			$purchases = DB::select("select * from addPurchase");
			return view('Purchases', compact('purchases','Soption','it'));
		}






}
