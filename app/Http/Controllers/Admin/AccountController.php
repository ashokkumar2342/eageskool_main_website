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
//---------------------------------------//
    Public function DistrictsAssign()
    {
        $admin=Auth::guard('admin')->user(); 
        // $users=DB::select(DB::raw("select `id`, `first_name`, `last_name`, `email`, `mobile` from `admins`where `status` = 1 and `role_id` = 2 and `role_id` >= (Select `role_id` from `admins` where `id` =$admin->id)Order By `first_name`")); 
        $users=DB::select(DB::raw("select `id`, `first_name`, `last_name`, `email`, `mobile` from `admins` where `status` = 1 and `role_id` <> 1 Order By `first_name`")); 
        return view('admin.account.assign.district.index',compact('users'));
       
    }

    Public function StateDistrictsSelect(Request $request)
    {  
        $user_id = intval($request->id);
        $States = DB::select(DB::raw("select * from `states` order by `name`;"));   
        $DistrictBlockAssigns = DB::select(DB::raw("select `uda`.`id`, `dis`.`name` from `user_district_assigns` `uda` inner join `districts` `dis` on `dis`.`id` = `uda`.`district_id` where `uda`.`user_id` = $user_id order by `name`;"));
        return view('admin.account.assign.district.select_box',compact('DistrictBlockAssigns','States'));
    }

     

     Public function DistrictsAssignStore(Request $request)
     {    
        $rules=[
         'user' => 'required',  
         'district' => 'required', 
        ]; 
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
            return response()->json($response);// response as json
        }
        $user_id = intval($request->user);
        $district_id = intval($request->district);
        $rs_fetch = DB::select(DB::raw("select * from `user_district_assigns` where `user_id` = $user_id and `district_id` = $district_id limit 1;"));
        if (count($rs_fetch)>0) {
            $rs_update = DB::select(DB::raw("update `user_district_assigns` set `district_id` = $district_id where `user_id` = $user_id and `district_id` = $district_id limit 1;"));
        }else{
            $rs_save = DB::select(DB::raw("insert into `user_district_assigns`(`user_id`, `district_id`) values($user_id, $district_id);"));
        }
        $response=['status'=>1,'msg'=>'Save Successfully'];
        return response()->json($response);
    }

    public function DistrictsAssignDelete($id)
    {
        $id = Crypt::decrypt($id);
        $rs_fetch = DB::select(DB::raw("delete from `user_district_assigns` where `id` = $id limit 1;"));
        $response=['status'=>1,'msg'=>'Delete Successfully'];
        return response()->json($response);   
    }

//block assign

    Public function BlockAssign()
    {
        $admin = Auth::guard('admin')->user(); 
        $users = DB::select(DB::raw("select `id`, `first_name`, `last_name`, `email`, `mobile` from `admins`where `status` = 1 and `role_id` <> 1 Order By `first_name`")); 
        return view('admin.account.assign.block.index',compact('users'));
       
    }
    
    Public function DistrictBlockAssign(Request $request)
    { 
        $user_id = intval($request->id);
        $States = DB::select(DB::raw("select * from `states` order by `name`;"));   
        $DistrictBlockAssigns = DB::select(DB::raw("select `uba`.`id`, `dis`.`name` as `d_name`, `blm`.`name` as `b_name` from `user_block_assigns` `uba` inner join `districts` `dis` on `dis`.`id` = `uba`.`district_id` inner join `blocks_mcs` `blm` on `blm`.`id` = `uba`.`block_id` where `uba`.`user_id` = $user_id;")); 
     
        return view('admin.account.assign.block.select_box',compact('DistrictBlockAssigns','States'));
    }

    Public function DistrictBlockAssignStore(Request $request)
    {     
        $rules=[
         'user' => 'required',  
         'district' => 'required', 
         'block' => 'required', 
        ]; 
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
            return response()->json($response);// response as json
        }

        $user_id = intval($request->user);
        $district_id = intval($request->district);
        $block_id = intval($request->block);
        $rs_fetch = DB::select(DB::raw("select * from `user_block_assigns` where `user_id` = $user_id and `district_id` = $district_id and `block_id` = $block_id limit 1;"));
        if (count($rs_fetch)>0) {
            $rs_update = DB::select(DB::raw("update `user_block_assigns` set `district_id` = $district_id, `block_id` = $block_id where `user_id` = $user_id and `district_id` = $district_id and `block_id` = $block_id limit 1;"));
        }else{
            $rs_save = DB::select(DB::raw("insert into `user_block_assigns`(`user_id`, `district_id`, `block_id`) values($user_id, $district_id, $block_id);"));
        }
        $response=['status'=>1,'msg'=>'Save Successfully'];
        return response()->json($response);  
    }

    public function DistrictBlockAssignDelete($id)
    {
        $id = Crypt::decrypt($id);
        $rs_fetch = DB::select(DB::raw("delete from `user_block_assigns` where `id` = $id limit 1;"));
        $response=['status'=>1,'msg'=>'Delete Successfully'];
        return response()->json($response); 
    }
  

}
