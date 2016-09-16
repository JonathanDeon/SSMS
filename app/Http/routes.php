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

Route::group(['middleware' => ['web']], function () {

    Route::get('login', function () {
        return view('Login');
    });
    Route::get('signUpCheck', 'LoginController@signUp');
    Route::get('/loginCheck', 'LoginController@authenticate');

    Route::get('logout', 'LogController@logout');

});

Route::get('/welcome', function () {
    return view ('welcome');

});



/*Employee routes*/

Route::get('deleteEmployee','EmployeeController@deleteEmployeeRecord');
Route::get('deleteLoanScheme','LoanController@deleteLoanScheme');
Route::get('EmployeeInformation','EmployeeController@showAllEmployees');
Route::get('getAllEmployeesForInfo','EmployeeController@getAllEmployeesForInfo');

//payroll
Route::get('payroll','PayrollController@showPayrollInformation');
Route::get('addSalary','PayrollController@addSalary');
Route::get('getEmployeeBasicSalaryDetails','PayrollController@getEmployeeBasicSalaryDetails');
Route::get('calculateEPF_8','PayrollController@calculateEPF_8');
Route::get('calculateNetSalary','PayrollController@calculateNetSalary');
Route::get('calculateMonthlyEpfEtfReport','PayrollController@calculateMonthlyEpfEtfReport');
Route::get('getEmployeeMonthlySalaryReport','PayrollController@getEmployeeMonthlySalaryReport');

//Employee Leave
Route::get('approveLeave','LeaveController@approveLeave');
Route::get('saveLeaveInfo','LeaveController@saveLeaveInfo');
Route::get('rejectLeave','LeaveController@rejectLeave');
Route::get('recordLeave','LeaveController@recordLeave');
Route::get('leave','LeaveController@showPendingLeave');

//Employee managing
Route::get('AddEmployee','EmployeeController@showAddEmployee');
Route::post('added','EmployeeController@addEmployee');
Route::get('fillEmployee','EmployeeController@getEmployeeDetails');
Route::get('updateEmployee','EmployeeController@updateEmployeeDetails');
Route::get('scheduleInterview','InterviewController@scheduleInterview');
Route::get('saveInterview','InterviewController@saveInterview');
Route::get('fillInterview','InterviewController@getEmployeeDetails');
Route::get('deleteInterview','InterviewController@deleteInterview');
//Employee Loans
Route::get('EmployeeLoans','LoanController@showLoans');
Route::get('addLoan','LoanController@addLoan');
Route::get('approveLoan','LoanController@approveLoan');
Route::get('declineLoan','LoanController@rejectLoan');
Route::get('updateDate','LoanController@updateDate');
Route::get('saveLoanScheme','LoanController@saveLoanScheme');
Route::get('checkEligibility','LoanController@checkEligibility');

//Employee Reports
Route::get('getEmployeePDF','EmployeeReports@getEmpPDF');






/*-----------------------------------Inventory---------------------------------*/
Route::get('fillItem','addNewItemController@getItem');
Route::get('updateItem','addNewItemController@updateItem');
Route::get('fillSupplier','supplierController@getSupplier');
Route::get('updateSupplier','supplierController@updateSupplier');
Route::get('Purchases', 'purchaseController@showPurchase');
Route::get('Supplier', 'supplierController@showSupplier');
Route::get('Sales', 'salesController@showSales');
Route::get('PurchaseReturns', 'returnController@showPR');
Route::get('Inventory', 'AddNewItemController@showItems');
Route::get('deleteSupplier','supplierController@deleteSupplier');
Route::get('deleteItem','addNewItemController@deleteItem');
Route::get('AddNewItem', 'retViews@AddNewItem');
Route::get('PurchaseOrder', 'InventoryMailController@showPO');
Route::post('/purchaseForm', [
    'uses' => 'purchaseController@postPurchaseForm',
    'as' => 'purchaseForm'
]);
Route::post('/salesForm', [
    'uses' => 'salesController@postaddSales',
    'as' => 'salesForm'
]);
Route::post('/supplierForm', [
    'uses' => 'supplierController@postaddSupplier',
    'as' => 'supplierForm'
]);
Route::post('/prForm', [
    'uses' => 'returnController@postaddPr',
    'as' => 'prForm'
]);
Route::post('/addForm', [
    'uses' => 'AddNewItemController@postaddNew',
    'as' => 'addForm'
]);
Route::post('/getPurchasePDF',[
    'uses' => 'InventoryPDFController@getPurchasePDF',
    'as' => 'getPurchasePDF'
]);
Route::post('/getSalesPDF',[
    'uses' => 'InventoryPDFController@getSalesPDF',
    'as' => 'getSalesPDF'
]);
Route::post('/send', [
    'uses' => 'InventoryMailController@send',
    'as' => 'send'
]);

/*-----------------------------------//Inventory---------------------------------*/




