<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Carbon\Carbon;

class efficiencyController extends Controller
{
	public function loadview()
	{
		$efficiency=null;
        $employees=null;
        $Month = Carbon::now()->startOfMonth()->subMonth()->toDateString();
        $x =DB::select("select (month) from efficiency_log where month >= '$Month'");

        /*if ($y != null) {
            $x=1;
        }

        else{
           $x=null;
        }*/
        $n=null;
		$branches = DB::select("select * from branch where address != '$n'");

		return view('EfficiencyAnalysis',compact('branches','efficiency','x'));
	}

    public function calculateEfficiency(Request $request)
    {
        $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth();
        $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth();

        $Month = Carbon::now()->startOfMonth()->subMonth()->toDateString();

        $firstDayofPreviousPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->subMonth();
        $lastDayofPrevousPreviousMonth = Carbon::now()->subMonth()->subMonth()->endOfMonth();

        $firstDayofthisMonth= Carbon::today()->format('Y-m-01');
        $u = DB::select("select * from employee_leave e,empinplans emp,shiftplans s  where e.employee=emp.EmpID and emp.ShiftPlanID=s.SPID and e.approved=1 and ((start_date >='$firstDayofPreviousMonth' and start_date <='$firstDayofthisMonth') or ((start_date >= '$firstDayofPreviousPreviousMonth' and start_date <= '$firstDayofPreviousMonth') and end_date >= '$firstDayofPreviousMonth')) and employee IN (select employee from employee_leave  where start_date >'2016/09/01' and start_date <'2016/10/01' group by employee having count(*) = 1);");

        $multiplerecords = DB::select("select * from employee_leave e,empinplans em,shiftplans s where e.employee=em.EmpID and e.approved=1 and em.ShiftPlanID=s.SPID and ((start_date >='$firstDayofPreviousMonth' and start_date <='$firstDayofthisMonth') or ((start_date >= '$firstDayofPreviousPreviousMonth' and start_date <= '$firstDayofPreviousMonth') and end_date >= '$firstDayofPreviousMonth')) and start_date <'$firstDayofthisMonth' and employee IN (select employee from employee_leave  where ((start_date >='$firstDayofPreviousMonth' and start_date <='$firstDayofthisMonth') or ((start_date >= '$firstDayofPreviousPreviousMonth' and start_date <= '$firstDayofPreviousMonth') and end_date >= '$firstDayofPreviousMonth')) group by employee having count(*) > 1);");

        $employees = DB::select("select * from employee where eid not in (select employee from employee_leave);");

        foreach ($employees as $employee)
        {
            $eid=$employee->eid;

            DB::statement("INSERT INTO efficiency_log(employee,month,efficiency) values('$eid','$Month', '100')");

            $exist=DB::select("select * from efficiency where employee='$eid'");

            if ($exist==null)
            {
                DB::statement("INSERT INTO efficiency(employee,month,efficiency) values('$eid','$Month', '100')");
            }

            else
            {
                $affected = DB::update("UPDATE `efficiency` SET `month`='$Month',`Efficiency`='100' WHERE `employee`='$eid'");
            }
        }


        if ($multiplerecords != null)
        {
            $n=array();
            $count=0;
            foreach ($multiplerecords as $record)
            {

                $c=$record->employee;
                $z=$record->start_date;
                $f=$record->end_date;
                $carbon = new Carbon($z);
                $carbon1 = new Carbon($f);
                if ($carbon < $firstDayofPreviousMonth){
                    $h =  $lastDayofPrevousPreviousMonth->diffInDays($carbon1)+1;
                }
                elseif ($carbon1 <= $firstDayofthisMonth) {
                    $h = $carbon->diffInDays($carbon1);
                }

                else{
                    $h = $carbon->diffInDays($lastDayofPreviousMonth);
                }


                var_dump($h);
                $n[$count]=$h;
                $count++;
            }

            $p=array_sum($n);
            var_dump($p);
                $day=$record->day;
                if ($day =="week-day")
                {
                    $denominator=25;
                }

            elseif ($day =="week-end")
            {
                $denominator=8;
            }

            $e = $p/$denominator*100;
            $v = 100 - $e;
            $vy=round($v,2,PHP_ROUND_HALF_UP);

            DB::statement("INSERT INTO efficiency_log(employee,month,efficiency) values('$c','$Month', '$vy')");

            $exist=DB::select("select * from efficiency where employee='$c'");

            if ($exist==null)
            {
                DB::statement("INSERT INTO efficiency(employee,month,efficiency) values('$c','$Month', '$vy')");
            }

            else
            {
                $affected = DB::update("UPDATE `efficiency` SET `month`='$Month',`Efficiency`='$vy' WHERE `employee`='$c'");
            }
        }


            foreach ($u as $y) {
                $z = $y->start_date;
                $f = $y->end_date;
                $carbon = new Carbon($z);
                $carbon1 = new Carbon($f);
                if ($carbon < $firstDayofPreviousMonth){
                    $h =  $lastDayofPrevousPreviousMonth->diffInDays($carbon1)+1;
                }
                elseif ($carbon1 <= $firstDayofthisMonth) {
                    $h = $carbon->diffInDays($carbon1);
                }

                else{
                    $h = $carbon->diffInDays($lastDayofPreviousMonth);
                }
                var_dump($h);
                $day=$y->day;
                if ($day =="week-day")
                {
                    $denominator=25;
                }

                elseif ($day =="week-end")
                {
                    $denominator=8;
                }
                $n = $h / $denominator * 100;
                $v = 100 - $n;
               // var_dump($n);
                $c = $y->employee;

                $vy=round($v,2,PHP_ROUND_HALF_UP);

                DB::statement("INSERT INTO efficiency_log(employee,month,efficiency) values('$c','$Month', '$vy')");

                $exist=DB::select("select * from efficiency where employee='$c'");

                if ($exist==null)
                {
                    DB::statement("INSERT INTO efficiency(employee,month,efficiency) values('$c','$Month', '$vy')");
                }

                else
                {
                    $affected = DB::update("UPDATE `efficiency` SET `month`='$Month',`Efficiency`='$vy' WHERE `employee`='$c'");
                }



            }

        $n=null;

            $branches = DB::select("select * from branch where address != '$n'");
            $efficiency=null;
            $x=1;


            return view('EfficiencyAnalysis',compact('branches','efficiency','x'));


    }

    public function getEfficiency(Request $request)
    {
        $branch = $request->input('selectBranch2');

        $BID = DB::select("select id from branch where bname='$branch'");
        $id=$BID[0]->id;

        $efficiency = DB::select("select * from efficiency ef,employee E,empinplans emp,shiftplans s where e.eid=ef.employee and emp.EmpID = e.eid and emp.ShiftPlanID = s.SPID and ef.employee=E.eid and E.eid IN (select eid from employee where branch='$id');");

        $n=null;

        $branches = DB::select("select * from branch where address != '$n'");

        $x=1;

        return view('EfficiencyAnalysis',compact('branches','efficiency','x'));


    }



}
