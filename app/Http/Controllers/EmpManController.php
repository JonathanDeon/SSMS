<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class EmpManController extends Controller
{
    public function loadView()
    {
    	$employees = DB::select("select * from janitorialemployee");
    	return view('EmployeeManagement', compact('employees'));
    }

    public function getemp(Request $request)

    {
      $janEmpId = $request->input('empid');	
      $name = $request->input('name');
      $address = $request->input('address');
      $phone = $request->input('phone');
      $joinedDate = $request->input('jDate');
      $position = $request->input('pos');
      $salary = $request->input('sal');
     
     DB::statement("INSERT INTO janitorialemployee values('$janEmpId','$name','$address','$phone','$joinedDate','$position','$salary')");

     $employees = DB::select("select * from janitorialemployee");
     
     return view('EmployeeManagement', compact('employees'));	
  	}
}
