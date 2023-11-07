<table id="block_datatable" class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Sr.No.</th>
            <th>States</th>
            <th>District</th>
            <th>Block Code</th>
            <th>Block Name</th> 
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @php
        $srno = 1;
        @endphp
        @foreach ($BlocksMcs as $BlockMc)
        <tr>
            <td>{{ $srno++ }}</td>
            <td>{{ $BlockMc->s_name }}</td>
            <td>{{ $BlockMc->d_name }}</td>
            <td>{{ $BlockMc->code }}</td>
            <td>{{ $BlockMc->name }}</td>
            <td class="text-nowrap">
                <a type="button" onclick="callPopupLarge(this,'{{ route('admin.Master.BlockMCSEdit',$BlockMc->id) }}')" title="" class="btn btn-primary btn-sm" style="color:#fff"><i class="fa fa-edit"></i> Edit</a>
                <a type="button" href="{{ route('admin.Master.BlockMCSDelete',Crypt::encrypt($BlockMc->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');"  title="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>