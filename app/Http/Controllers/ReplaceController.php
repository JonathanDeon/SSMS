<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Carbon\Carbon;

class ReplaceController extends Controller
{
  
    public function Addemp(Request $request){

      $empid=$request['emp'];
      $x=2;

      DB::statement("INSERT INTO empinplans values('$empid','$x')");
      return $x;
    }

    public function countUnavailableemp()
    {

    }
  

  	public function loadReplaceEmployee()
  	{
        $Uplans = DB::select("select * from unavailableshiftplans");

        $unavailableEmployees = null;
        //$efficiencylist = DB::select("select * from efficiency");
        $carbon_today= Carbon::today()->format('Y-m-d');
        $unavailableshiftplans = (DB::select("select SPID from shiftplans where SPID IN (select em.ShiftPlanID from empinplans em,employee_leave e where e.employee=em.EmpID and (e.start_date>='$carbon_today') and approved=1);"));
        $pid=null;

        $reassignableemployees =DB::select( "select * from replacedemployees r,employee_leave l,employee e,efficiency ef where e.eid=r.ReplacedEmployee and e.eid=l.employee and e.eid=ef.employee and l.end_date ='$carbon_today' and approved=1");
        //var_dump($reassignableemployees);



        $replaceableEmployees=null;


        return view('replace_employee',compact('unavailableshiftplans','unavailableEmployees','efficiencylist','replaceableEmployees','pid','reassignableemployees'));
  	}


    public function replace(Request $request){
      $sp = $request->input('SelectShift');

        preg_match_all('!\d+!', $sp, $plan);

        $pid = implode(' ', $plan[0]);

        //var_dump($pid);

        $carbon_today= Carbon::today()->format('Y-m-d');

      $unavailableEmployees = DB::select("select * from employee e,employee_leave l,efficiency ef where e.eid=l.employee and e.eid=ef.employee and l.start_date>='$carbon_today' and l.approved=1");

      //$branchID = DB::statement("SELECT BID from shiftplans where spid='$id'");

      //$ID=$branchID[0]->BID;

      //$employees = DB::select("select * from employee where Branch='$branchID'");


        $unavailableshiftplans = (DB::select("select SPID from shiftplans where SPID IN (select em.ShiftPlanID from empinplans em,employee_leave e where e.employee=em.EmpID and e.approved=1 and (e.start_date>='$carbon_today'));"));

      $efficiencylist = null;
        $replaceableEmployees=null;
        $reassignableemployees =DB::select( "select * from replacedemployees r,employee_leave l,employee e,efficiency ef where e.eid=r.ReplacedEmployee and e.eid=l.employee and e.eid=ef.employee and l.end_date<='$carbon_today' and approved=1");

      return view('replace_employee',compact('unavailableshiftplans','unavailableEmployees','efficiencylist','pid','replaceableEmployees','reassignableemployees'));
    }

    public function getReplaceableEmpDetails(Request $request)
    {
        $leaveid=$_POST['submit'];
        $planid=$_POST['planid'];

        $empid=DB::select("select employee from employee_leave where leave_id='$leaveid'");
        $emp=$empid[0]->employee;

        $Day =DB::select("select Day from shiftplans where SPID='$planid'");
        $Time =DB::select("select Tim from shiftplans where SPID='$planid'");
        $BranchID =DB::select("select BID from shiftplans where SPID='$planid'");

        $Day1=$Day[0]->Day;
        $Time1=$Time[0]->Tim;
        $BranchID1=$BranchID[0]->BID;


        //var_dump($planid);


        $carbon_today= Carbon::today()->format('Y-m-d');

        $unavailableEmployees = DB::select("select  * from employee e,employee_leave l,efficiency ef where e.eid=l.employee and e.eid=ef.employee and l.start_date>='$carbon_today' and e.eid not in (select 	ReplacedEmployee from 	ReplacedEmployees where leaveid='$leaveid' and shift='$planid');");
        $e=null;
        $unavailableshiftplans = (DB::select("select SPID from shiftplans where SPID IN (select em.ShiftPlanID from empinplans em,employee_leave e where e.employee=em.EmpID and (e.start_date>='$carbon_today'));"));
        $replaceableEmployees = DB::select("select  * from employee e,empinplans em,efficiency ef,shiftplans s where e.eid=em.EmpID and e.eid=ef.employee and em.ShiftPlanID=s.SPID  and s.Day='$Day1' and s.Tim != '$Time1' and s.BID='$BranchID1' and e.eid not in(select DISTINCT emp.EmpID from empinplans emp,shiftplans s,employee e where e.eid=emp.EmpID and emp.ShiftPlanID=s.SPID and s.Day='$Day1' and s.Tim = '$Time1' and s.BID='$BranchID1');");
        //var_dump($replaceableEmployees);
        $efficiencylist=null;
        $pid=$planid;
        $reassignableemployees =DB::select( "select * from replacedemployees r,employee_leave l,employee e,efficiency ef where e.eid=r.ReplacedEmployee and e.eid=l.employee and e.eid=ef.employee and l.end_date<='$carbon_today' and approved=1");

        return view('replace_employee',compact('unavailableshiftplans','unavailableEmployees','efficiencylist','pid','replaceableEmployees','emp','leaveid','reassignableemployees'));
    }

    public function UpdateShift(Request $request)
    {
        $empid=$request['eid'];
        $planid=$request['pid'];
        $replacedid=$request['Reid'];
        $leaveid=$request['lid'];

        $end = DB::select("select end_date from employee_leave where leave_id='$leaveid'");
        $enddate=$end[0]->end_date;

        $deletedRecord1 = DB::statement("DELETE FROM empinplans WHERE EmpID = '$replacedid' and ShiftPlanID='$planid'");
        DB::statement("INSERT INTO empinplans values('$planid','$empid')");

        $affected = DB::statement("INSERT INTO ReplacedEmployees VALUES('$replacedid','$empid','$leaveid','$planid')");

    }

    public function ReEnterShift(Request $request)
    {
        $rid=$request['rid'];

        $reassigndetails=DB::select("select * from ReplacedEmployees where ID='$rid'");

        $reassignableID = $reassigndetails[0]->ReplacedEmployee;
        $removableID = $reassigndetails[0]->AssignedEmployee;
        $shiftplan = $reassigndetails[0]->shift;

        $deletedRecord2 = DB::statement("DELETE FROM empinplans WHERE EmpID = '$removableID' and ShiftPlanID='$shiftplan'");
        DB::statement("INSERT INTO empinplans values('$reassignableID','$shiftplan')");
        $deletedRecord2 = DB::statement("DELETE FROM ReplacedEmployees WHERE ID = '$rid'");


    }


    
}