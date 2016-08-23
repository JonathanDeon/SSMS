<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class EmployeeInfoController extends Controller
{
    public function showAllEmployees(){
        $employees = DB::select("select * from employee");
        return view('EmployeeInformation',compact('employees'));
    }
}
