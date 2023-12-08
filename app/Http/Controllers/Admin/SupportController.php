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
use Mail;

class SupportController extends Controller
{
   public function index()
   { 
     try {  
          return view('admin.support.index');
        }catch (Exception $e){}
     
   }
   public function show(Request $request)
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
            $rs_result =DB::select(DB::raw("select * from `support` where `date` >= '$from_date' and `date` <= '$to_date';"));
            $response['data'] = view('admin.support.result',compact('rs_result'))->render();
            $response['status'] = 1;
            return response()->json($response);
        }catch (Exception $e){}
    }

    public function screenshot($path)
    {
        $path = Crypt::decrypt($path);
        $documentUrl = Storage_path() . '/app/front/support/'.$path; 
        return response()->file($documentUrl); 
    }

    public function Resolved($id)
    {
        $id = Crypt::decrypt($id);
        $rs_save = DB::select(DB::raw("update `support` set `status` = 1 where `id` = $id limit 1;"));
        $rs_fetch = DB::select(DB::raw("select * from `support` where `id` = $id limit 1;"));
        if (count($rs_fetch)>0) {
            $ticket_no = $rs_fetch[0]->ticket_no;
            $email = $rs_fetch[0]->email_id;
            $screen_shot = $rs_fetch[0]->file;
        }else{
            $ticket_no = 0;
            $screen_shot = '';
        }
        $email_id = $email;
        $subject = 'Eageskool Support Resolved';
        $message = '';
        $message_2 = '';
        $file = Storage_path('app/front/support/'.$screen_shot);;
        $data["email"] = $email_id;
        $data["title"] = $subject;
        $data["m_detail"] = $message;
        $data["ticket_no"] = $ticket_no;
        if (!empty($screen_shot)) {
            Mail::send('emails.resolved', $data, function($message)use($data, $file) {
                $message->to($data["email"])
                ->from('info@eageskool.com', 'Eageskool')
                ->subject($data["title"])
                ->attach($file);    
                
                         
            });
        }else{
            Mail::send('emails.resolved', $data, function($message)use($data, $file) {
                $message->to($data["email"])
                ->from('info@eageskool.com', 'Eageskool')
                ->subject($data["title"]);
                // ->attach($file);    
                
                         
            });
        }
        return redirect()->back()->with(['message'=>'Resolved Successfully','class'=>'success']);  
    }

}
