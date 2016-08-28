<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class ReplaceController extends Controller
{
  
    public function Addemp(Request $request){

      $empid=$request['emp'];
      $x=2;

      DB::statement("INSERT INTO empinplans values('$empid','$x')");
      return $x;
    }
  

  	public function loadReplaceEmployee()
  	{
      $Uplans = DB::select("select * from unavailableshiftplans");
      $employees = null;
      $efficiencylist = DB::select("select * from efficiency");

      //var_dump($employees);

  		return view('replace_employee',compact('Uplans','employees','efficiencylist'));
  	}

  	public function loadRequestedEmployees()
  	{
      return view('request_employee',compact('branches'));
  	}

    public function replace(Request $request){
      $sp = $request->input('SelectShift');

      $Uplans = DB::select("select * from unavailableshiftplans");

      $id=$Uplans[0]->PlanID;

      $branchID = DB::statement("SELECT BID from shiftplans where spid='$id'");

      //$ID=$branchID[0]->BID;

      $employees = DB::select("select * from employee where Branch='$branchID'");

      $efficiencylist = DB::select("select * from efficiency");

      return view('replace_employee',compact('Uplans','employees','efficiencylist'));




    }

    
}