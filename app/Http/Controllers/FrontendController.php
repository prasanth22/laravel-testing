<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
    * Ajax Demo 
    *
    * @return json response or view
    * @author 
    **/
    public function ajaxDemo (Request $request)
    {
        if($request->method() == "POST")
        {
            /**
                 * Do all the processing on the data and return success or failure 
                 */    		
                return response()->json(array("result" => "No data found"));
            }
            else
            {
                return response()->json(array("result" => "No data found"));
        }
    }
}
