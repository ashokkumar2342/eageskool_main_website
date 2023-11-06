@extends('admin.layout.base')
@section('body')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>List Users</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                </ol>
            </div>
        </div> 
        <div class="card card-info"> 
            <div class="card-body">
                <div class="col-lg-12">
                    <fieldset class="fieldset_border">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Sr.No.</th> 
                                        <th>Name</th>
                                        <th>Mobile</th> 
                                        <th>Email Id</th>
                                        <th>Role</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $arrayId=1;
                                    @endphp
                                    @foreach($accounts as $account) 
                                    <tr>
                                        <td>{{ $arrayId ++ }}</td> 
                                        <td>{{ $account->first_name }} {{ $account->last_name}}</td>
                                        <td>{{ $account->mobile }}</td> 
                                        <td>{{ $account->email }}</td>
                                        <td>{{ $account->name or '' }}</td> 
                                        <td> 
                                            <a href="#" onclick="callPopupLarge(this,'{{ route('admin.account.edit',Crypt::encrypt($account->id)) }}')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        </td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div> 
    </div>    
</section>
@endsection
@push('links')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
<script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#dataTable').DataTable();
    });
</script>
<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  

@endpush