<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Http\Requests;
	use DB;

	
	class AssignController extends Controller
	{
		public function availableEmp()
		{
				$assigns = DB::select("SELECT * FROM employee WHERE eid NOT IN (SELECT EmpID FROM empinplans )");
				$emps = DB::select("SELECT COUNT(*) as 'empcount' FROM employee WHERE eid NOT IN (SELECT EmpID FROM empinplans )");
				return view('assignments', compact('assigns','emps'));
		}


		public function addassignment(Request $request)
		{
				$empid = $request['empid'];
				$servId = $request['servid'];


				DB::table('empinplans')->insert(
					['ShiftPlanID' => $servId, 'EmpID'=> $empid]);
				
				
				return redirect()->back();
		}
		
	}





?>