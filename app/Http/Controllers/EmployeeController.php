<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class EmployeeController extends Controller
{
    public function showAllEmployees(){
        $employees = DB::select("select * from employee");

        return view('EmployeeInformation',compact('employees'));
    }

    public function showAddEmployee(){
        $branches = DB::select("select * from branch");
        $designations = DB::select("select * from designation");
        $managers = $this->getManagers();
        return view('AddEmployee',compact('branches','designations','managers'));

    }

    public function addEmployee(Request $request){
        $name = $request->input('name');
        $address = $request->input('address');
        $dob = $request->input('dob');
        $contact = $request->input('phone');
        $gender = $request->input('optionsRadios');
        $date = $request->input('date');
        $service = $request->input('optionsRadios2');
        $designation = $request->input('designation');
        $branch = $request->input('branch');
        $manager = $request->input('manager');
        DB::statement(
            "INSERT INTO employee(eid, address, name, contact, dob, joined_date, type, gender, manager, branch, designation)
            VALUES ('SE010','$address','$name','$contact','$dob','$date','$service','$gender','$manager','$branch','$designation')");
        return $name;
    }

    public function getManagers(){
        $managers = DB::select("select * from employee where designation = 1");
        return $managers;
    }
}
