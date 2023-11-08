@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>District Assign</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <form action="{{ route('admin.Master.DistrictsAssignStore') }}" no-reset="true" method="post" class="add_form" select-triger="user_select_box">
                    {{ csrf_field() }} 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <label>Users</label>
                            <select name="user" id="user_select_box" class="form-control" data-table="assign_district_table" onchange="callAjax(this,'{{route('admin.account.StateDistrictsSelect')}}'+'?id='+this.value,'state_select_box')">
                                <option value="" disabled selected>Select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->first_name }} - {{ $user->email }}</option>

                                @endforeach   
                            </select> 
                        </div>  
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-lg-12" id="state_select_box"> 
                        </div>
                        
                    </div> 
                </form>           
            </div>
        </div>
    </div>
</section>
@endsection 

