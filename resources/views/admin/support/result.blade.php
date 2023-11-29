<div class="col-lg-12">
	<fieldset class="fieldset_border">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="dataTable_id">
				<thead class="thead-dark">
					<tr>
						<th>Sr.No.</th>
						<th>Institute Name</th>
						<th>Mobile No.</th>
						<th>Email Id</th>
						<th>Message</th>
						<th>Action</th>
					</tr>
				</thead>
				@php
					$srno = 1;
				@endphp
				<tbody>
					@foreach ($rs_result as $rs_result_val)
						<tr>
							<td>{{$srno++}}</td>
							<td>{{$rs_result_val->institute_name}}</td>
							<td>{{$rs_result_val->mobile_no}}</td>
							<td>{{$rs_result_val->email_id}}</td>
							<td>{{$rs_result_val->message}}</td>
							<td>
								{{-- <a type="button" onclick="callPopupLarge(this, '{{ route('admin.booking.demo.assign', $rs_result_val->id) }}')" class="btn btn-sm btn-primary">Assign To</a> --}}
							</td>
						</tr>	
					@endforeach
				</tbody>
			</table>
		</div>
	</fieldset>
</div>