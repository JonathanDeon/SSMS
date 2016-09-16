<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Response;

class OrderController extends Controller
{
    public function loadView()
    {
        $orders = DB::select("select * from janitorialorders j, janorder_payments p where j.janOrderId=p.orderID");
        return view('orderManagement', compact('orders'));
    }
    
    public function getSubCat()
    {
        $subCat = DB::select("SELECT * FROM jan_categories");
        return Response::json($subCat);
        // view('orderManagement',compact('subCat'));

    }

    public function deleteOrder(Request $request)
    {
        $janOrderId = $request['janOrderId'];

        $packOrderID= DB::select("select pack_Id from janitorialorders where janOrderId='$janOrderId'");
        $poID = $packOrderID[0]->pack_Id;

        DB::statement("DELETE FROM janitorialorders where janOrderId='$janOrderId'");

        DB::statement("DELETE FROM janitorial_package where packageId='$poID'");

        DB::statement("DELETE FROM janorder_payments where orderID='$janOrderId'");
    }
    
    public function addOrder(Request $request){
        
      $customer = $request->input('cust_name');
      $appoinmentDate = $request->input('date');
      $status = 0;
      $amount = $request->input('total');
      $sub1 =  $request->input('cat_id_1');
      $sub2 =  $request->input('cat_id_2');
      $sub3 =  $request->input('cat_id_3');
      $sub4 =  $request->input('cat_id_4');
      $sub5 =  $request->input('cat_id_5');
      $sub6 =  $request->input('cat_id_6');
      $sub7 =  $request->input('cat_id_7');
      $sub8 =  $request->input('cat_id_8');
      $sub9 =  $request->input('cat_id_9');
      
       $packId = DB::select("SELECT packageId FROM janitorial_package ORDER BY packageId DESC limit 1 ");
      $lastPackId = $packId[0]->packageId + 1;
//      var_dump($lastPackId);
      
          if ($sub1!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub1','$lastPackId')");
          }
          if ($sub2!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub2','$lastPackId')");
          }
          if ($sub3!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub3','$lastPackId')");
          }
          if ($sub4!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub4','$lastPackId')");
          }
          if ($sub5!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub5','$lastPackId')");
          }
          if ($sub6!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub6','$lastPackId')");
          }
          if ($sub7!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub7','$lastPackId')");
          }
          if ($sub8!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub8','$lastPackId')");
          }
          if ($sub9!=0){
              $pack = DB::statement("INSERT INTO janitorial_package(categoryId,packageId) values('$sub9','$lastPackId')");
          }
       
      DB::statement("INSERT INTO janitorialorders(customer,reservationDate,pack_Id) values('$customer','$appoinmentDate','$lastPackId')");

      $orderId = DB::select("SELECT janOrderId FROM janitorialorders ORDER BY janOrderId DESC limit 1 ");
      $lastOrderID = $orderId[0]->janOrderId;
    
      DB::statement("INSERT INTO janorder_payments(status,amount,orderID) values('$status','$amount','$lastOrderID')");
         
      $orders = DB::select("select * from janitorialorders j, janorder_payments p where j.janOrderId=p.orderID");
      return view('orderManagement', compact('orders'));
     

  	}
        
          public function getCustomers(){
              $customerNames = DB::select("SELECT name FROM customer");
              return Response::json($customerNames);
          }
          
           public function getOrders(){
              $orderList = DB::select("SELECT janOrderId FROM janitorialorders");
              return Response::json($orderList);
          }
          
          public function getSupervisors(){
              $List = DB::select("SELECT name FROM employee where designation=1");
              return Response::json($List);
          }
          
          public function getJanitors(){
              $List = DB::select("SELECT name FROM employee where designation=2");
              return Response::json($List);
          }
}
