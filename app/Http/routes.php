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
Route::get('fillCustomer','register@fillCustomer');

Route::get('fillVehicle','register@fillVehicle');

Route::get('RegisterCustomer','register@viewRegisterCustomer');

Route::get('customerReport','cusreportcontroller@Customerreport');

Route::get('loyaltyReport','cusreportcontroller@LoyaltyReport');

Route::get('deficitReport','cusreportcontroller@DeficitReport');

Route::get('CustomerLoyalty','loyaltyController@getCustomerName');

Route::post('CustomerLoyalty','loyaltyController@addloyalty');

Route::get('report-gen', 'register@domExample');

Route::post('RegisterCustomer','register@addCustomer');

Route::get('Feedback','feedbackController@viewfeedback');

Route::post('Feedback','feedbackController@respond');

Route::get('fillfeed','feedbackController@fillfeed');

Route::get('fillname','feedbackController@fillname');

Route::get('filldeficit1','deficitControl@fillCustomer');

Route::get('updateCustomer','register@updateCustomerDetails');

Route::get('updateVehicle','register@updateVehicleDetails');

Route::get('deleteCustomer','register@deleteCustomer');

Route::get('CustomerDeficit','deficitControl@getCustomerN');

Route::post('CustomerDeficit','deficitControl@addDeficit');

Route::get('filldeficit','deficitControl@filldeficit');

Route::get('setDeficit','deficitControl@setDeficit');



Route::group(['middleware' => ['web']], function () {

    Route::get('login', function () {
        return view('Login');
    });
    Route::get('signUpCheck', 'LoginController@signUp');
    Route::get('/loginCheck', 'LoginController@authenticate');

    Route::get('logout', 'LogController@logout');

});
//
Route::get('getEmployeeBasicSalaryDetails','PayrollController@getEmployeeBasicSalaryDetails');
Route::get('calculateEPF_8','PayrollController@calculateEPF_8');
Route::get('calculateNetSalary','PayrollController@calculateNetSalary');
Route::get('calculateMonthlyEpfEtfReport','PayrollController@calculateMonthlyEpfEtfReport');
Route::get('getEmployeeMonthlySalaryReport','PayrollController@getEmployeeMonthlySalaryReport');
//
Route::get('welcome',function(){
	return view('welcome');
});



/*Customer Routes*/
// Route::get('/', function () {
//     return view('plans');
// });

Route::get('/assignments', function () {
    return view ('assignments');

});
Route::get('/welcome', function () {
    return view ('welcome');

});

Route::get('/plans', function () {
    return view ('plans');

});




Route::get('/logs', function () {
    return view ('logs');
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
//

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


Route::get('fillSupplier','supplierController@getSupplier');
Route::get('updateSupplier','supplierController@updateSupplier');
//Route::get('/', 'retViews@home');
//Route::get('Purchases', 'retViews@Purchases');
Route::get('Purchases', 'purchaseController@showPurchase');
Route::get('Supplier', 'supplierController@showSupplier');
Route::get('Sales', 'salesController@showSales');
Route::get('PurchaseReturns', 'returnController@showPR');
Route::get('Inventory', 'AddNewItemController@showItems');
Route::get('deleteSupplier','supplierController@deleteSupplier');
Route::get('deleteItem','addNewItemController@deleteItem');

//Route::get('Inventory', 'retViews@Inventory');
//Route::get('PurchaseReturns', 'retViews@PurchaseReturns');
//Route::get('Sales', 'retViews@Sales');
//Route::get('Supplier', 'retViews@Supplier');
Route::get('PurchaseOrder', 'retViews@PurchaseOrder');
Route::get('AddNewItem', 'retViews@AddNewItem');

//Route::post('addPurchase','UserController@addPurchase');

Route::post('/purchaseForm', [
    'uses' => 'purchaseController@postPurchaseForm',
    'as' => 'purchaseForm'
]);

/*Route::post('/addPurchase', [
		'uses' => 'UserController@addPurchase',
		'as' => 'addPurchase'
		]);
*/

//});
//
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

/*work shift routes*/

Route::get('CreateShifts','CreateShiftsController@loadView');
Route::post('shiftcreate','CreateShiftsController@addshift');
Route::get('replaceEmp','ReplaceController@Addemp');
Route::post('selectBranch','efficiencyController@loadtable');
Route::get('addEmployee','assignEmpController@addEmployeeShift');
Route::post('selectsift','assignEmpController@getemp');
Route::get('AssignEmployees','assignEmpController@loadAssignEmployee');
Route::get('assignShift','ReplaceController@assignShift');
Route::get('ReplaceEmployee','ReplaceController@loadReplaceEmployee');
Route::get('request','ReplaceController@loadRequestedEmployees');
Route::post('selectShift','ReplaceController@replace');
Route::get('efficiency','effficiencyController@loadview');
Route::post('selectBranch','effficiencyController@loadtable');

Route::get('liabilities', function () {
    return view('Liability');
});

Route::get('assets', function () {
    return view('Assets');
});

Route::get('inexpense', function()
{
    return view('IncomeExpenditure');
});

Route::get('transactions', function()
{
    return view('Transactions');
});

Route::post('loadIDs','AssetController@findAssets');

Route::post('assets','AssetController@addAssets');

Route::post('calculateDepreciation','AssetController@calculateDepreciation');

Route::get('assets','AssetController@loadAssets');

Route::get('liabilities','LiabilityController@loadLiabilities');

Route::post('add','LiabilityController@addLiabilities');

Route::get('deleteAssets','AssetController@deleteAssets');

Route::get('deleteLiabilities','LiabilityController@deleteLiabilities');


Route::get('Reports', function()
{
    return view('ReportsCustomer');
});






/*janitorial routes*/

Route::get('/', function () {
    return view('main');
});
route::get('emp','EmpManController@loadView');
route::get('cust','CustManController@loadView');
route::get('package','PackagesController@loadView');
route::get('order','OrderController@loadView');

route::post('addEmp','EmpManController@getemp');
route::post('addCust','CustManController@getCust');
route::post('addPack','PackagesController@getPack');

route::get('addSubCat','PackagesController@add_sub_cat_type');
Route::get('deleteEmployee','EmpManController@deleteEmployee');
Route::get('deleteCustomer','CustManController@deleteCustomer');

Route::get('deleteCat','PackagesController@deleteCat');


    Route::get('/assignments', function () {
        return view ('assignments');

    });
    Route::get('/welcome', function () {
        return view ('welcome');

    });

    Route::get('/plans', function () {
        return view ('plans');

    });

    Route::get('/logs', function () {
        return view ('logs');
    });

    Route::post('addplan','PlanController@addplan');
    Route::post('addreserv','ReservController@addreserv');
    Route::get('plans','PlanController@showplans');
    Route::get('assignments','AssignController@availableEmp');
    Route::post('addassignment','AssignController@addassignment');
    Route::get('deletePlans','PlanController@deletePlans');
    Route::get('logs','LogController@showlog');
    Route::get('welcome','ReservController@slotwid');
//Route::get('plans','PlanController@showcatwidget');






