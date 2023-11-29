@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Support Request List</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <form action="{{ route('admin.support.show') }}" method="post" class="add_form" no-reset="true" data-table="dataTable_id" success-content-id="result_table_div">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="exampleInputEmail1">From Date</label>
                        <span class="fa fa-asterisk"></span>
                        <input type="date" name="from_date" class="form-control" value="{{date('Y-m-d')}}">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="exampleInputPassword1">To Date</label>
                        <span class="fa fa-asterisk"></span>
                        <input type="date" name="to_date" class="form-control" value="{{date('Y-m-d')}}">
                    </div>
                </div> 
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary form-control">Show</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card card-info">
        <div class="card-body">
            <div class="row" id="result_table_div">
                
            </div>                
        </div>
    </div> 
</section>
@endsection
