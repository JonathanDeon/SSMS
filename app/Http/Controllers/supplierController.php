<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;
use DB;

class supplierController extends Controller
{
   			public function postaddSupplier(Request $request)
		{

           // $ssid = $request['ssid'];
			$Sname = $request['Sname'];
			$Semail = $request['Semail'];
			$Stel = $request['Stel'];
			$Saddress = $request['Saddress'];
            $true = 0;
			
	//	DB::statement("INSERT INTO supplier VALUES('$Sname','$Semail','$Stel','$Saddress') ");

            $exist = DB::select("select Sname from supplier");
                foreach($exist as $e)
                    if($e->Sname == $Sname)
                    {
                        $true= 1;
                        break;
                    }



            if($true == 1)
                {
                    DB::table('supplier')->where('Sname', $Sname)->update(['Semail' => $Semail, 'Stel' => $Stel, 'Saddress' => $Saddress]);
                }
                else
                {
                        DB::table('supplier')->insert(
                    ['Sname'=> $Sname, 'Semail' => $Semail, 'Stel' => $Stel, 'Saddress' => $Saddress]);
                }










	


				return redirect()->back();
		}

		public function showSupplier(){
            
			$suppliers = DB::select("select * from supplier");
			return view('Supplier', compact('suppliers'));
		}



    public function deleteSupplier(Request $request){
        $ssid = $request['ssid'];
        $deletedRecord = DB::statement("DELETE FROM supplier WHERE ssid = '$ssid'");
    }






    public function getSupplier(Request $request){
        $ssid = $request['ssid'];
        $suppliers = DB::select("select * from supplier where ssid = '$ssid'");
        return json_encode($suppliers);
    }



   // updateSupplier

        public function updateSupplier(Request $request){

        $ssid = $request['ssid'];
        $Sname = $request['Sname'];
        $Semail = $request['Semail'];
        $Stel = $request['Stel'];
        $Saddress = $request['Saddress'];
       

        $affected = DB::update("update supplier set Saddress = '$Saddress' where ssid = '$ssid'");
        //return $affected;
    }





}
