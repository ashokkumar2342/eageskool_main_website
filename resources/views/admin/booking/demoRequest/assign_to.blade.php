<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Assign To</h4>
            <button type="button" id="btn_close" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
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
                                            <a type="button" success-popup="true" button-click="btn_close"  onclick="callPopupLarge(this,'{{ route('admin.booking.demo.assign.save', [Crypt::encrypt($booking_id),Crypt::encrypt($account->id)]) }}')" class="btn btn-primary btn-sm"> Assign</a>
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
</div>

