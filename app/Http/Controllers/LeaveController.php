<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class LeaveController extends Controller
{
    public function showPendingLeave(){
        $leaves = DB::select("select * from employee_leave el,employee e,leave_type l,branch b
                      where e.eid = el.employee and
                      el.leave_type = l.id AND 
                      el.approved=0 and
                      b.id = e.branch 
                  ");
        return view('leave',compact('leaves'));
    }

    public function approveLeave(Request $request){
        $leaveId = $request['leaveId'];
        $affected = DB::update("update employee_leave set approved = 1 where leave_id = '$leaveId'");
        return $affected;
    }
}
