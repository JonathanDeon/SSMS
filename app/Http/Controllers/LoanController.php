<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class LoanController extends Controller
{
    public function showLoans(){
        $loans = DB::select("select * from loan_scheme");
        $all = DB::select("select * from employee_loan el,loan_scheme l , employee e
              where el.scheme = l.scheme_id and e.eid = el.employee");
        $ongoing = $this->showOngoingLoans();
        $pending = $this->showPendingLoans();
        return view('EmployeeLoans',compact('loans','ongoing','pending','all'));
    }

    public function saveLoanScheme(Request $request){
        $title = $request['title'];
        $description = $request['description'];
        $amount = $request['amount'];
        $interest = $request['interest'];
        $installments = $request['installments'];

        DB::statement(
            "INSERT INTO loan_scheme(l_name, description, amount, interest,installments)
            VALUES ('$title','$description','$amount','$interest','$installments')");
        return $title;
    }

    public function addLoan(Request $request){
        $lid = $request['lid'];
        $eid = $request['eid'];
        $name = $request['name'];
        $designation = $request['designation'];
        $contact = $request['contact'];
        $address = $request['address'];

        DB::statement(
            "INSERT INTO employee_loan(employee, scheme, guarantor_name, g_contact, g_designation, g_address)
            VALUES ('$eid','$lid','$name','$contact','$designation','$address')");

        return redirect('/AddEmployee');
    }

    private function showOngoingLoans(){
        $loans = DB::select("select * from employee_loan el, employee e,loan_scheme l
                      where e.eid = el.employee and
                      el.loan_id = l.scheme_id AND 
                      el.status=1 and
                      ongoing=1
                  ");
        return $loans;
    }

    private function showPendingLoans(){
        $loans = DB::select("select * from employee_loan el, employee e,loan_scheme l
                      where e.eid = el.employee and
                      el.loan_id = l.scheme_id AND 
                      el.status=0
                  ");
        return $loans;
    }

    public function approveLoan(Request $request){
        $loanId = $request['id'];
        $affected = DB::update("update employee_loan set status = 1, ongoing = 1 where loan_id = '$loanId'");
        return $affected;
    }

    public function rejectLoan(Request $request){
        $loanId = $request['id'];
        $affected = DB::update("update employee_loan set status = 2 where loan_id = '$loanId'");
        echo $affected;
        return $affected;
    }
}
