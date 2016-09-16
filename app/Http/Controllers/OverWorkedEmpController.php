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


        $OverWorkedEmployees=DB::select("select  distinct e.eid,e.name,e.branch,s.day,e.contact from employee e,empinplans emp,shiftplans s  where e.eid=emp.EmpID and s.SPID=emp.EmpID and e.eid not in (select el.employee from employee_leave el where el.approved=1);");
        return view('OverWorkedEmployees',compact('OverWorkedEmployees','OverWorkedEmployees1'));
    }
}
