<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('welcome',function(){
	return view('welcome');
});

Route::get('login',function(){
	return view('login');
});


/*Customer Routes*/

Route::get('ReportsCustomer',function(){
	return view('ReportsCustomer');
});

Route::get('RegisterCustomer',function(){
	return view('RegisterCustomer');
});


Route::get('CustomerLoyalty',function(){
	return view('CustomerLoyalty');
});

Route::get('Feedback',function(){
	return view('Feedback');
});

Route::get('Reports',function(){
	return view('ReportsCustomer');
});

Route::get('CustomerDeficit',function(){
	return view('CustomerDeficit');
});
/*Service routes*/

Route::get('AssignService',function(){
	return view('AssignService');
});

Route::get('ReservationsService',function(){
	return view('ReservationsService');
});

Route::get('ServicePlans',function(){
	return view('ServicePlans');
});

Route::get('ServiceLogs',function(){
	return view('ServiceLogs');
});

Route::get('ReportsServices',function(){
	return view('ReportsServices');
});

/*Employee routes*/
Route::get('EmployeeInformation','EmployeeInfoController@showAllEmployees');

Route::get('EmpMyProfile',function(){
	return view('EmpMyProfile');
});

Route::get('EmployeeLoans',function(){
	return view('EmployeeLoans');
});

Route::get('welcomeEmp',function(){
	return view('welcomeEmp');
});

Route::get('payroll',function (){
    return view('payroll');
});

Route::get('leave',function (){
   return view('leave');
});

Route::get('AddEmployee',function (){
    return view('AddEmployee');
});

//Route::get('')

/*inventory routes*/
Route::get('AddNewItem',function(){
	return view('AddNewItem');
});

Route::get('inventory',function(){
	return view('inventory');
});

Route::get('Purchases',function(){
	return view('Purchases');
});

Route::get('PurchaseReturns',function(){
	return view('PurchaseReturns');
});

Route::get('Sales',function(){
	return view('Sales');
});

Route::get('PurchaseOrder',function(){
	return view('PurchaseOrder');
});

Route::get('Supplier',function(){
	return view('Supplier');
});



/*work shift routes*/

Route::get('AssignEmployees',function(){
	return view('AssignEmployees');
});

Route::get('OverWorkedEmployees',function(){
	return view('OverWorkedEmployees');
});

Route::get('CreateShifts',function(){
	return view('CreateShifts');
});

Route::get('ReplaceEmployee',function(){
	return view('ReplaceEmployee');
});

Route::get('RequestEmployee',function(){
	return view('RequestEmployee');
});

Route::get('EfficiencyAnalysis',function(){
	return view('EfficiencyAnalysis');
});



/*Finance routes*/
Route::get('Assets',function(){
	return view('Assets');
});

Route::get('Income&Expenditure',function(){
	return view('Income&Expenditure');
});

Route::get('Liability',function(){
	return view('Liability');
});

Route::get('TransactionManagement',function(){
	return view('TransactionManagement');
});




/*janitorial routes*/

Route::get('Janitorial',function(){
	return view('Janitorial');
});







