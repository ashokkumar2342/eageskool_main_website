<table id="district_datatable" class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Sr.No.</th>
            <th>States</th>
            <th>District Code</th>
            <th>District Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody> 
        @php
            $srno = 1;
        @endphp
        @foreach ($Districts as $District)
        <tr>
            <td>{{ $srno++}}</td>
            <td>{{ $District->s_name }}</td>
            <td>{{ $District->code }}</td>
            <td>{{ $District->name }}</td>
            <td class="text-nowrap">
                <a type="button" onclick="callPopupLarge(this,'{{ route('admin.Master.districtsEdit',$District->id) }}')" title="" class="btn btn-primary btn-sm" style="color:#fff"><i class="fa fa-edit"></i> Edit</a>

                <a type="button" href="{{ route('admin.Master.districtsDelete',Crypt::encrypt($District->id)) }}" onclick="return confirm('Are you sure you want to delete this item?');"  title="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
            </td>
        </tr> 
        @endforeach
    </tbody>
</table>