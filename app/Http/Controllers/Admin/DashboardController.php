<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\createToken;
use Storage;
use DB;
class DashboardController extends Controller
{
   
    public function index()
    {  
        $District=DB::select(DB::raw("select * from `districts`"));   
        $block=DB::select(DB::raw("select * from `blocks_mcs`"));   
        $village=DB::select(DB::raw("select * from `villages`"));   
        $gram_panchayat=DB::select(DB::raw("select * from `gram_panchayat`")); 
        return view('admin.dashboard.dashboard',compact('District', 'block', 'village', 'gram_panchayat')); 
    }  

    
    
    
   
}
