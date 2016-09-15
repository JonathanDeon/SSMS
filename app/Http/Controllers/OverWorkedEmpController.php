<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Carbon\Carbon;

class OverWorkedEmpController extends Controller
{
    public function loadOverWorkedEmployees()
    {
        $carbon_today= Carbon::today()->format('Y-m-01');
        $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->toDateString();
        $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth()->toDateString();
        //var_dump($lastDayofPreviousMonth);
        $OverWorkedEmployees=DB::select("select  distinct e.eid,e.name,e.branch,s.day from employee e,empinplans emp,shiftplans s  where e.eid=emp.EmpID and s.SPID=emp.EmpID and e.eid not in (select el.employee from employee_leave el where el.approved=1);");
        //$OverWorkedEmployees1=DB::select("select distinct *,count(el.leave_id) as count from employee e,employee_leave el,branch b,shiftplans s,empinplans emp where e.eid = el.employee and b.id = e.branch and e.eid =emp.EmpID and emp.ShiftPlanID = s.SPID  group by e.eid having count(*)<3");
        $OverWorkedEmployees1=null;
        //$OverWorkedEmployees=null;
        return view('OverWorkedEmployees',compact('OverWorkedEmployees','OverWorkedEmployees1'));
    }
}
