<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class PackagesController extends Controller
{
    public function loadView()
    {
    	$categories = DB::select("select * from jan_categories");
    	return view('Packages', compact('categories'));
    	
    }

    public function getPack(Request $request)

    {
      $cat_ID = $request->input('catid');	
      $type = $request->input('type');
      $price = $request->input('price');
      
     
     DB::statement("INSERT INTO jan_categories values('$cat_ID','$type','$price')");
	 $categories = DB::select("select * from jan_categories");
     return view('Packages', compact('categories'));	
  	}
}
