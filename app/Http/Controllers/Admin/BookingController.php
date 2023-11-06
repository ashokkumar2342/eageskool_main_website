<?php

namespace App\Http\Controllers\Admin;

use App\Helper\MyFuncs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use PDF;

class BookingController extends Controller
{
   public function demoRequestList()
   { 
     try {  
          return view('admin.booking.demoRequest.index');
        }catch (Exception $e){}
     
   }
   public function demoRequestListShow(Request $request)
   {  
        try {
            $rules=[ 
                'from_date' => 'required|date',
                'to_date' => 'required|date',
            ];

            $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                $response=array();
                $response["status"]=0;
                $response["msg"]=$errors[0];
                return response()->json($response);// response as json
            }
            $from_date = $request->from_date;
            $to_date = $request->to_date;
            $rs_result =DB::select(DB::raw("select * from `book_demo`;"));
            $response['data'] = view('admin.booking.demoRequest.result',compact('rs_result'))->render();
            $response['status'] = 1;
            return response()->json($response);
        }catch (Exception $e){}
    }

}
