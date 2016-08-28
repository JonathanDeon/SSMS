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
      $type = $request->input('type');
      $price = $request->input('price');
      
     
     DB::statement("INSERT INTO jan_categories values('$type','$price')");
	 $categories = DB::select("select * from jan_categories");
     return view('Packages', compact('categories'));	
  	}

  	public function add_sub_cat_type(Request $request)
  	{
  			
        $type = $request->input('type');
        $price = $request->input('price');
        $cat_ID = $request->input('main_cat');

	     DB::statement("INSERT INTO jan_categories(type,price,main_id) values('$type','$price','$cat_ID')");

     $categories = DB::select("select * from jan_categories");
     return view('Packages', compact('categories'));	        

  	}

    public function deleteCat(Request $request)
    {
        $cat_ID = $request['cat_ID'];
        DB::statement("DELETE FROM  jan_categories WHERE cat_ID = '$cat_ID'");
    }
}
