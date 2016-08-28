<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Shiftplan;

use App\Branch;

use DB;

class CreateShiftsController extends Controller
{
    public function loadView()
    {
    	$plans = DB::select('select * from shiftplans');


    	$branches = DB::select('select * from branch');

      $employees=null;

    	return view('create_shifts',compact('plans', 'branches', 'employees'));
    }



    public function addshift(Request $request)
    {
      $day = $request->input('optionsRadios');
      $time = $request->input('optionsRadios1');
      $Bname = $request->input('SelectBranch');

         $BID = DB::select("select id from branch where bname='$Bname'");
        $id=$BID[0]->id;
           DB::statement("INSERT INTO shiftplans(day,Tim,BID) values('$day','$time', '$id')");

              $plans = DB::select("select * from shiftplans");
              $branches = DB::select("select * from branch");
 
       $employees = DB::select("select * from employee where Branch='$id'");
       \Session::flash('flash_message','done');

      return view('create_shifts',compact('plans', 'branches','employees'));
    }

   
}



