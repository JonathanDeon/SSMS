<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class PayrollController extends Controller
{
    public function showPayrollInformation(Request $request){
        $designations = DB::select("select * from designation");
        return view('payroll',compact('designations'));
    }

    public function addSalary(Request $request){
        $id = $request['designation'];
        $basic = $request['basic'];
        $allowance = $request['allowance'];
        $affected = DB::statement("update designation set basic = $basic,allowance = $allowance 
                    where id = '$id'");

    }

//    payroll calculations
//    public function
}
