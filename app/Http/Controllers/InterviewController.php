<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InterviewController extends Controller
{
    public function scheduleInterview(Request $request){
        $name = $request['name'];
        $contact = $request['contact'];
        $position = $request['position'];
        $date = $request['date'];
        $time = $request['time'];
        DB::statement(
            "INSERT INTO interview(cand_name, contact, position, date, time)
            VALUES ('$name','$contact','$position','$date','$time')");

        return redirect('/test');
    }
}
