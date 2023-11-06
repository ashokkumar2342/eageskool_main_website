<div class="col-lg-12">
	<fieldset class="fieldset_border">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="dataTable_id">
				<thead class="thead-dark">
					<tr>
						<th>Service</th>
						<th>Role</th>
						<th>Name</th>
						<th>Institute Name</th>
						<th>Mobile No.</th>
						<th>Email Id</th>
						<th>Message</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($rs_result as $rs_result_val)
						<tr>
							<td>{{$rs_result_val->service}}</td>
							<td>{{$rs_result_val->role}}</td>
							<td>{{$rs_result_val->name}}</td>
							<td>{{$rs_result_val->institute_name}}</td>
							<td>{{$rs_result_val->mobile_no}}</td>
							<td>{{$rs_result_val->email}}</td>
							<td>{{$rs_result_val->message}}</td>
							<td>
								<a type="button" href="#" class="btn btn-sm btn-primary">Action</a>
							</td>
						</tr>	
					@endforeach
				</tbody>
			</table>
		</div>
	</fieldset>
</div>