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

class MasterController extends Controller
{
   public function index()
   { 
     try {
          $States = DB::select(DB::raw("select * from `states` order by `name`;"));   
          return view('admin.master.states.index',compact('States'));
        } catch (Exception $e) {
            
        }
     
   }
   public function store(Request $request,$id=null)
   {  
        $rules=[
            'code' => 'required|unique:states,code,'.$id, 
            'name' => 'required',
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
            return response()->json($response);// response as json
        }
        $code = MyFuncs::removeSpacialChr($request->code);
        $name = MyFuncs::removeSpacialChr($request->name);
        if (empty($id)) {
            $States = DB::select(DB::raw("insert into `states`(`code`, `name`) values('$code', '$name');"));
        }else{
            $States = DB::select(DB::raw("update `states` set `code` = '$code', `name` = '$name' where `id` = $id limit 1;"));  
        }

        $response=['status'=>1,'msg'=>'Submit Successfully'];
        return response()->json($response);
      
    }
    public function edit($id)
     { 
       try {  
            $States = DB::select(DB::raw("select * from `states` where `id` = $id limit 1;"));
            return view('admin.master.states.edit',compact('States'));
          } catch (Exception $e) {
              
          }
       
     }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $States = DB::select(DB::raw("delete from `states` where `id` = $id limit 1;")); 
        return redirect()->back()->with(['message'=>'Delete Successfully','class'=>'success']);  
    }
//-------districts--------------districts--------------districts---------------districts----//



   public function districts(Request $request)
   {      
        $States= DB::select(DB::raw("select * from `states` order by `name`;"));   
        return view('admin.master.districts.index',compact('States'));
   }

   public function districtsStore(Request $request, $id=null)
   {  
        $rules=[
            'states' => 'required', 
            'code' => 'required|unique:districts,code,'.$id, 
            'name' => 'required|unique:districts,name,'.$id,
        ]; 
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
          $errors = $validator->errors()->all();
          $response=array();
          $response["status"]=0;
          $response["msg"]=$errors[0];
          return response()->json($response);// response as json
        }
        $states_id = intval($request->states);
        $code = MyFuncs::removeSpacialChr($request->code);
        $name = MyFuncs::removeSpacialChr($request->name);
        if (empty($id)) {
            $district = DB::select(DB::raw("insert into `districts`(`state_id`, `code`, `name`) values($states_id, '$code', '$name');"));
        }else{
            $district = DB::select(DB::raw("update `districts` set `code` = '$code', `name` = '$name' where `id` = $id limit 1;"));  
        }
        $response=['status'=>1,'msg'=>'Submit Successfully'];
        return response()->json($response);
    }

    public function DistrictsTable(Request $request)
    {
        $state_id = intval($request->id);
        $Districts= DB::select(DB::raw("select `dis`.`id`, `dis`.`code`, `dis`.`name`, `sta`.`name` as `s_name` from `districts` `dis` inner join `states` `sta` on `sta`.`id` = `dis`.`state_id` where `dis`.`state_id` = $state_id;"));
        return view('admin.master.districts.district_table',compact('Districts'));
    }

    public function districtsEdit($id)
    {
        $Districts= DB::select(DB::raw("select * from `districts` where `id` = $id;"));
        $States= DB::select(DB::raw("select * from `states` order by `name`;")); 
        return view('admin.master.districts.edit',compact('Districts', 'States'));
    }
    
    public function districtsDelete($id)
    {
        $id = Crypt::decrypt($id);  
        $Districts= DB::select(DB::raw("delete from `districts` where `id` = $id limit 1;"));
        return redirect()->back()->with(['message'=>'Delete Successfully','class'=>'success']);  
    }

    public function BlockMCS(Request $request)
    {  
        $States= DB::select(DB::raw("select * from `states` order by `name`;"));      
        return view('admin.master.block.index',compact('States'));
    }
   
   public function BlockMCSStore(Request $request,$id=null)
   {   
       $rules=[
            'states' => 'required', 
            'district' => 'required', 
            'code' => 'required|unique:blocks_mcs,code,'.$id, 
            'name' => 'required|unique:blocks_mcs,name,'.$id, 
        ];

        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $response=array();
            $response["status"]=0;
            $response["msg"]=$errors[0];
            return response()->json($response);// response as json
        }
        $states_id = intval($request->states);
        $districts_id = intval($request->district);
        $code = MyFuncs::removeSpacialChr($request->code);
        $name = MyFuncs::removeSpacialChr($request->name);
        if (empty($id)) {
            $blocks_mcs = DB::select(DB::raw("insert into `blocks_mcs`(`states_id`, `districts_id`, `code`, `name`) values($states_id, $districts_id, '$code', '$name');"));
        }else{
            $blocks_mcs = DB::select(DB::raw("update `blocks_mcs` set `code` = '$code', `name` = '$name' where `id` = $id limit 1;"));  
        } 
        $response=['status'=>1,'msg'=>'Submit Successfully'];
        return response()->json($response);
    }

    public function BlockMCSTable(Request $request)
    {  
        $district_id = intval($request->district_id);
        $BlocksMcs= DB::select(DB::raw("select `bl`.`id`, `bl`.`code`, `bl`.`name`, `sta`.`name` as `s_name`, `dis`.`name` as `d_name` from `blocks_mcs` `bl` inner join `states` `sta` on `sta`.`id` = `bl`.`states_id` inner join `districts` `dis` on `dis`.`id` = `bl`.`districts_id` where `bl`.`districts_id` = $district_id;")); 
       return view('admin.master.block.block_table',compact('BlocksMcs'));
    }

    public function BlockMCSEdit($id)
    {
        $BlocksMcs = DB::select(DB::raw("select * from `blocks_mcs` where `id` = $id limit 1;"));
        return view('admin.master.block.edit',compact('BlocksMcs'));
    }

    public function BlockMCSDelete($id)
    {
        $id = Crypt::decrypt($id);  
        $BlocksMcs = DB::select(DB::raw("delete from `blocks_mcs` where `id` = $id limit 1;"));
        return redirect()->back()->with(['message'=>'Delete Successfully','class'=>'success']);  
    }
    
    
//----------------------------------------------
    public function stateWiseDistrict(Request $request)
    { 
        $admin = Auth::guard('admin')->user();  
        $Districts=DB::select(DB::raw("call up_fetch_district_access ($admin->id, '$request->id')"));   
        return view('admin.master.districts.value_select_box',compact('Districts'));
    }
    
    public function DistrictWiseBlock(Request $request,$print_condition=null)
    {
        $admin = Auth::guard('admin')->user(); 
        $BlocksMcs = DB::select(DB::raw("call up_fetch_block_access ($admin->id, '$request->id')")); 
        return view('admin.master.block.value_select_box',compact('BlocksMcs'));
    }
    
}
