<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Shiftplan;

use App\Branch;

class AssignEmpController extends Controller
{

	 public function loadAssignEmployee()
  	{
      $branches = DB::select('select * from branches');
      $employees = null;
  		return view('AssignEmp',compact('branches','employees'));
    }

    public function getemp(Request $request)

    {
      $Day = $request->input('selectDay');
      $Time = $request->input('selectTime');
      $Bname = $request->input('SelectBranch1');

     $BID = DB::select("select id from branches where Branch_name='$Bname'");

     $id=$BID[0]->id;

    $employees = DB::select("select * from employee where Branch='$id'");

    //var_dump($employees);

    $plan = DB::select("select * from shiftplans where BID='$id' AND day='$Day' AND Tim='Time'");


      $branches = DB::select('select * from branches');
      
  		return view('AssignEmp',compact('branches','employees'));
  	}
     public function addEmployeeShift(Request $request){
        $empid=$request['empId'];
        $x=4;
        DB::statement("INSERT INTO empinplans values('$x','$empid')");
    }


}
