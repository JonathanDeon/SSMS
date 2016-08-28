<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;

	class ReservController extends Controller
	{
		
		public function addreserv(Request $request)
		{
				$servid = $request['servid'];
				$cusname = $request['cusname'];
				$type = $request['type'];
				$slotid = $request['slotid'];
				$true = 0;


				$exist = DB::select("select slotid from service");
				foreach($exist as $e)
					if($e->slotid == $slotid)
					{
						$true= 1;
						break;
					}


				if($true == 1)
				{
					DB::table('service')->where('slotid', $slotid)->update(['service_id' => $servid, 'customer'=> $cusname, 'type' => $type]);
				}
				else
				{
					DB::table('service')->insert(
					['service_id' => $servid, 'customer'=> $cusname, 'type'=> $type, 'slotid'=> $slotid]);
				}

				
				
				return redirect()->back();
		}

		public function slotwid()
		{
				$slot1 = DB::select("SELECT * FROM service WHERE slotid = 1");
				$slot2 = DB::select("SELECT * FROM service WHERE slotid = 2");
				$slot3 = DB::select("SELECT * FROM service WHERE slotid = 3");
				$slot4 = DB::select("SELECT * FROM service WHERE slotid = 4");
				
				return view('welcome', compact('slot1','slot2','slot3','slot4'));
		}




	}
?>