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
    public function getEmployeeBasicSalaryDetails(){
        $salary = DB::select("select e.eid,e.name,d.title,d.basic,d.allowance from employee e, designation d where d.id = e.designation group by e.eid");

        return $salary;
    }

    //employee contribution
    public function calculateEPF_8($empId){
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            if ($item->eid == $empId){
                $epf8 = ($item->basic)*0.08;
                break;
            }
        }
        return $epf8;
    }
    //employer contribution
    public function calculateEPF_12($empId){
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            if ($item->eid == $empId){
                $epf12 = ($item->basic)*0.12;
                break;
            }
        }
        return $epf12;
    }
    //employer contribution
    public function calculateETF_3($empId){
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            if ($item->eid == $empId){
                $etf3 = ($item->basic)*0.03;
                break;
            }
        }
        return $etf3;
    }

    //total salary without loan deductions and attendence deductions
    public function calculateNetSalary($empId='JE001'){
        $epf8 = $this->calculateEPF_8($empId);
        $epf12 = $this->calculateEPF_12($empId);
        $etf3 = $this->calculateETF_3($empId);
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            if ($item->eid == $empId){
                $basic = $item->basic;
                $allowance = $item->allowance;
                break;
            }
        }
        //epf12 should go in to another table each month
        return $basic+$allowance-$epf8-$etf3;
    }

    public function calculateMonthlyEpfEtfReport(){
        $totalEpf8 = 0;
        $totalEpf12 = 0;
        $totalEtf3 = 0;
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            $totalEpf8 = $totalEpf8 + $this->calculateEPF_8($item->eid);
            $totalEpf12 = $totalEpf12 + $this->calculateEPF_12($item->eid);
            $totalEtf3 = $totalEtf3 + $this->calculateETF_3($item->eid);
        }
        $epfEtfArr = array("totalEtf3"=>$totalEtf3,"totalEpf8"=>$totalEpf8,"totalEpf12"=>$totalEpf12);

        return json_encode($epfEtfArr);
    }

    public function getEmployeeMonthlySalaryReport(){
        $salaryArray = array();
        foreach ($this->getEmployeeBasicSalaryDetails() as $item) {
            $tempArray = array("empId"=>$item->eid,"name"=>$item->name,"etf3"=>$this->calculateETF_3($item->eid),"epf8"=>$this->calculateEPF_8($item->eid),"epf12"=>$this->calculateEPF_12($item->eid),"netSalary"=>$this->calculateNetSalary($item->eid));
            array_push($salaryArray,$tempArray);
        }
        return response()->json(['data'=>$salaryArray]);
//        return json_encode($salaryArray);
    }
}
