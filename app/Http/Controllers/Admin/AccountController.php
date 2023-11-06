<?php

namespace App\Http\Controllers\Admin;

use App\Admin; 
use App\Http\Controllers\Controller;
use App\Model\DefaultRoleMenu;
use App\Model\Role;
use App\Model\SubMenu;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Mail;
use PDF;
use Symfony\Component\HttpKernel\DataCollector\collect;
class AccountController extends Controller
{
    Public function index(){
    $admin=Auth::guard('admin')->user();	
    $accounts = DB::select(DB::raw("select `a`.`id`, `a`.`first_name`, `a`.`last_name`, `a`.`email`, `a`.`mobile`, `a`.`status`, `r`.`name`
             from `admins` `a`Inner Join `roles` `r` on `a`.`role_id` = `r`.`id`where`a`.`status` = 1 and `a`.`role_id` >= (Select `role_id` from `admins` where `id` = $admin->id)Order By `a`.`first_name`;")); 
    	return view('admin.account.list',compact('accounts'));
    }

    Public function form(Request $request){
        $admin=Auth::guard('admin')->user();       
    	$roles =DB::select(DB::raw("select `id`, `name` from `roles` where `id`  >= (Select `role_id` from `admins` where `id` =$admin->id) Order By `name`;"));
    	return view('admin.account.form',compact('roles'));
    }
   

    Public function store(Request $request){ 
        $rules=[
        'first_name' => 'required|string|min:3|max:50',             
        'email' => 'required|email|unique:admins',
        "mobile" => 'required|unique:admins|numeric|digits:10',
        "role_id" => 'required',
        "password" => 'required|min:6|max:15', 
        
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
            return response()->json($response);// response as json
        }
         
    	$accounts = new Admin();
    	$accounts->first_name = $request->first_name;
    	$accounts->last_name = $request->last_name;
    	$accounts->role_id = $request->role_id;
    	$accounts->email = $request->email;
    	$accounts->password = bcrypt($request['password']);
    	$accounts->mobile = $request->mobile; 
    	$accounts->password_plain=$request->password;          
        $accounts->status=1;          
        $accounts->save(); 
        $response=['status'=>1,'msg'=>'Account Created Successfully'];
            return response()->json($response);   
    }

    

    Public function edit(Request $request,$account_id){
        $account_id=Crypt::decrypt($account_id);
        $admin=Auth::guard('admin')->user();       
        $roles =DB::select(DB::raw("select `id`, `name` from `roles` where `id`  >= (Select `role_id` from `admins` where `id` =$admin->id) Order By `name`;"));
        $accounts = DB::select(DB::raw("select * from `admins` where `id` =$account_id")); 
        return view('admin.account.edit',compact('accounts','roles')); 
    }

    Public function update(Request $request,$account_id){

       $this->validate($request,[
           'first_name' => 'required|string|min:3|max:50', 
           "mobile" => 'required|numeric|digits:10',
           "role_id" => 'required',
           "password" => 'nullable|min:6|max:15',             
                     
           ]);          
        
        $account = Admin::find($account_id);
        $account->first_name = $request->first_name;
        $account->last_name = $request->last_name;
        $account->role_id = $request->role_id; 
        if ($request['password']!=null) {
            $account->password = bcrypt($request['password']);
        } 
        $account->mobile = $request->mobile;
        
        if ($account->save())
         {
          return redirect()->route('admin.account.list')->with(['message'=>'Account Updated Successfully.','class'=>'success']);        
        }
        else{
            return redirect()->back()->with(['class'=>'error','message'=>'Whoops ! Look like somthing went wrong ..']);
            }
    }
  

}
