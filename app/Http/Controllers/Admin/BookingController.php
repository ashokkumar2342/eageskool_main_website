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

    public function demoAssign($booking_id)
    {
        $admin=Auth::guard('admin')->user();    
        $accounts = DB::select(DB::raw("select `a`.`id`, `a`.`first_name`, `a`.`last_name`, `a`.`email`, `a`.`mobile`, `a`.`status`, `r`.`name` from `admins` `a`Inner Join `roles` `r` on `a`.`role_id` = `r`.`id`where`a`.`status` = 1 and `a`.`id` > 1 Order By `a`.`first_name`;"));
        return view('admin.booking.demoRequest.assign_to', compact('accounts', 'booking_id'));
    }

    public function demoAssignSave($booking_id, $assign_user_id)
    {
        $assign_user_id = Crypt::decrypt($assign_user_id);
        $booking_id = Crypt::decrypt($booking_id);
        $rs_save = DB::select(DB::raw("insert into `book_demo_assign`(`assign_user_id`, `booking_id`) values($assign_user_id, $booking_id);"));
        $response=['status'=>1,'msg'=>'Assign To Successfully'];
        return response()->json($response);   
    }

}
