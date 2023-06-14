@extends('dashboard.layouts.master')
  
@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
            <div class="card-body">
              	<h4 class="card-title">Contact</h4>
              	<p class="card-description">Add class <code>.table</code></p>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
		                    <tr>
								<th>S.No.</th>
								<th>Name</th>
								<th>Email</th>
								<th>Contact No.</th>
								<th>Message</th>
								<th>Date</th>
								<th>Action</th>
		                    </tr>
                  		</thead>
	                  	<tbody>
	                  		@foreach($data as $key => $value)
		                    <tr>
		                      	<td>{{ $key+1 }}</td>
		                      	<td>{{ $value->name }}</td>
		                      	<td>{{ $value->email }}</td>
		                      	<td>{{ $value->phone }}</td>
		                      	<td>{{ $value->message }}</td>
		                      	<td>{{ Carbon\Carbon::parse($value->created_at)->format('d M Y') }}</td>
		                      	<td><label class="badge badge-danger">Pending</label></td>
		                    </tr>
		                    @endforeach
                  		</tbody>
                	</table>
              	</div>
            </div>
        </div>
    </div>
</div>
@endsection