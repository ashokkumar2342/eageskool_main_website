<div class="row"> 
    <div class="col-lg-3 form-group">
        <label for="exampleInputEmail1">States</label>
        <span class="fa fa-asterisk"></span>
        <select name="states" id="state_id" class="form-control select2" onchange="callAjax(this,'{{ route('admin.Master.stateWiseDistrict') }}','district_select_box')">
            <option selected disabled>Select States</option>
            @foreach ($States as $State)
            <option value="{{ $State->id }}">{{ $State->code }}--{{ $State->name }}</option>  
            @endforeach
        </select>
    </div>
    <div class="col-lg-3 form-group">
        <label for="exampleInputEmail1">District</label>
        <span class="fa fa-asterisk"></span>
        <select name="district" class="form-control select2" id="district_select_box" onchange="callAjax(this,'{{ route('admin.Master.DistrictWiseBlock') }}','block_select_box')">
            <option selected disabled>Select District</option>
        </select>
    </div>
    <div class="col-lg-3 form-group">
        <label for="exampleInputEmail1">Block MCS</label>
        <span class="fa fa-asterisk"></span>
        <select name="block" class="form-control select2" id="block_select_box">
            <option selected disabled>Select Block MCS</option> 
        </select>
    </div>
    <div class="col-lg-3 form-group">
        <input type="submit" class="form-control btn btn-primary" value="Save" style="margin-top: 30px">
    </div>
    <div class="col-lg-12" style="margin-top: 20px"> 
        <table class="table  table-bordered table-striped" id="assign_block_table">
            <thead class="thead-dark">
                <tr>

                    <th>Sr.No.</th>
                    <th>District</th>
                    <th>Block</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $srno = 1;
                @endphp
                @foreach ($DistrictBlockAssigns as $DistrictBlockAssign)
                <tr>
                    <td>{{ $srno++}}</td> 
                    <td>{{ $DistrictBlockAssign->d_name}}</td> 
                    <td>{{ $DistrictBlockAssign->b_name}}</td> 
                    <td>
                        <a type="button" class="btn btn-sm btn-danger" select-triger="user_select_box" success-popup="true" onclick="if (confirm('Are you Sure delete')){callAjax(this,'{{ route('admin.Master.DistrictBlockAssignDelete',Crypt::encrypt($DistrictBlockAssign->id)) }}') } else{console_Log('cancel') }"  ><i class="fa fa-trash"></i> Delete</a>
                    </td> 
                </tr> 
                @endforeach
            </tbody>
        </table> 
    </div>
</div>