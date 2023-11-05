<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
    {   $id = Crypt::encrypt(1);
        return redirect()->route('front.support.token',$id);
    }

    public function supportToken($id)
    { 
        return view('front.support_token');
    }

}
