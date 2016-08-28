<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class AssetController extends Controller
{
	public function loadAssets()
	{
		$assets = DB::select("select * from assets");
		return view('assets', compact('assets'));
	}

    public function addAssets(Request $request)
    {
        
    	$description = $request->input('description');
    	$type = $request->input('type');
    	$value = $request->input('value');
    	$duration = $request->input('duration');
    	$depRate = $request->input('depRate');

    	DB::statement("INSERT INTO assets(description,type,value,duration,depreciation_rate) VALUES ('$description','$type','$value','$duration','$depRate')");

    	return redirect('assets');
    }

    public function deleteAssets(Request $request)
    {
        $assetID = $request['assetID'];
        DB::statement("DELETE FROM assets WHERE assetID = '$assetID'");
    }
}
