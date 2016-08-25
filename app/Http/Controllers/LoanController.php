<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class LoanController extends Controller
{
    public function showLoans(){
        $loans = DB::select("select * from loan_scheme");
        return view('EmployeeLoans',compact('loans'));
    }
}
