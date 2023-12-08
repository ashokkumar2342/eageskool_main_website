<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Mail;
use DB;
use App\Helper\MyFuncs;
class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function service()
    {
        return view('front.service');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function faqs()
    {
        return view('front.faq');
    }

    public function bookAdemo()
    {
        return view('front.book_demo');
    }

    public function bookAdemoStore(Request $request)
    {
        $this->validate($request, [
            'service' => 'required', 
            'role' => 'required',
            'name' => 'required',
            'institute_name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'captcha' => 'required|captcha' 
        ]);
        $service = MyFuncs::removeSpacialChr($request->service);
        $role = MyFuncs::removeSpacialChr($request->role);
        $name = MyFuncs::removeSpacialChr($request->name);
        $institute_name = MyFuncs::removeSpacialChr($request->institute_name);
        $mobile_no = MyFuncs::removeSpacialChr($request->mobile_no);
        $email = MyFuncs::removeSpacialChr($request->email);
        $message = MyFuncs::removeSpacialChr($request->message);
        $rs_save = DB::select(DB::raw("insert into `book_demo`(`service`, `role`, `name`, `institute_name`, `mobile_no`, `email`, `message`) values('$service', '$role', '$name', '$institute_name', '$mobile_no', '$email', '$message');"));
        $email_id = $email;
        $subject = 'Eageskool Demo';
        $message = $name;
        $message_2 = $institute_name;
        $file = '';
        $data["email"] = $email_id;
        $data["title"] = $subject;
        $data["m_detail"] = $message;
        $data["m_detail_2"] = $message_2;

        Mail::send('emails.message', $data, function($message)use($data, $file) {
            $message->to($data["email"])
            ->from('info@eageskool.com', 'Eageskool')
            ->subject($data["title"]);
            // ->attach($file);            
        });

        return Redirect()->back()->with(['message'=>'Demo Request Submitted Successfully','class'=>'success']);
    }

    public function support()
    {
        return view('front.support');
    }

    public function supportPost(Request $request)
    {   
        $this->validate($request, [
            'institute_name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'captcha' => 'required|captcha' 
        ]);
        $institute_name = MyFuncs::removeSpacialChr($request->institute_name);
        $mobile_no = MyFuncs::removeSpacialChr($request->mobile_no);
        $email = MyFuncs::removeSpacialChr($request->email);
        $message = MyFuncs::removeSpacialChr($request->message);
        $filename = '';
        if ($request->hasFile('screen_shot')){ 
            $screen_shot=$request->screen_shot;
            $folder_path = 'front/support';
            $filename = time().'.jpg'; 
            $screen_shot->storeAs($folder_path,$filename);
        }

        $six_digit_random_number = random_int(100000, 999999);
        $rs_save = DB::select(DB::raw("insert into `support`(`ticket_no`, `institute_name`, `mobile_no`, `email_id`, `message`, `file`) values('$six_digit_random_number', '$institute_name', '$mobile_no', '$email', '$message', '$filename');"));
        $email_id = $email;
        $subject = 'Eageskool Support';
        $message = $message;
        $message_2 = $institute_name;
        $file = '';
        $data["email"] = $email_id;
        $data["title"] = $subject;
        $data["m_detail"] = $message;
        $data["ticket_no"] = $six_digit_random_number;

        Mail::send('emails.support', $data, function($message)use($data, $file) {
            $message->to($data["email"])
            ->from('info@eageskool.com', 'Eageskool')
            ->subject($data["title"]);
            // ->attach($file);            
        });

        return Redirect()->back()->with(['message'=>'Submitted Successfully','class'=>'success']);
        // $id = Crypt::encrypt(1);
        // return redirect()->route('front.support.token',$id);
    }

    public function supportToken($id)
    { 
        return view('front.support_token');
    }

}
