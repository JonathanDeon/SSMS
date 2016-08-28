<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class EmpManController extends Controller
{
    public function loadView()
    {
    	$employees = DB::select("select * from employee");
    	return view('EmployeeManagement', compact('employees'));
    }

    public function getemp(Request $request)

    {
      
      $name = $request->input('name');
      $address = $request->input('address');
      $NIC = $request->input('NIC');
      $phone = $request->input('phone');
      $dob = $request->input('dob');
      $joined_date = $request->input('jDate');
      $gender = $request->input('gender');
      $position = $request->input('pos');
      //$position = 1;
      //$basic = $request->input('sal');
      $service_type ="2";
      $emp_type = "Contract";
     
     DB::statement("INSERT INTO employee(name,address,NIC,contact,dob,joined_date,service_type,gender,designation,emp_type)
     		 VALUES ('$name','$address','$NIC','$phone','$dob','$joined_date','$service_type','$gender','$position','$emp_type')");

     //DB::statement("INSERT INTO designation(title,basic) values ('$position','$salary')");

     $employees = DB::select("select * from employee");
	 return view('EmployeeManagement', compact('employees'));	
  	}

  	public function deleteEmployee(Request $request)
  	{
        $eid = $request['eid'];
        DB::statement("DELETE FROM employee WHERE eid = '$eid'");
    }
}
