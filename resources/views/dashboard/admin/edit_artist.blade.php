@extends('dashboard.layouts.master')
  
@section('content')

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Data</h4>
          <form action="{{ route('admin.basicdetail', encrypt($data->id))}}" method="POST">
          	@csrf
            <div class="form-group">
              <label for="InputName">Name</label>
              <input type="text" class="form-control" id="InputName" value="{{ $data->name }}">
            </div>
            <div class="form-group">
              <label for="InputEmail">Email</label>
              <input type="email" class="form-control" id="InputEmail" value="{{ $data->email }}">
            </div>
            <div class="form-group">
              <label for="InputMobile">Mobile No.</label>
              <input type="text" class="form-control" id="InputMobile" value="{{ $data->mobile }}">
            </div>
            <div class="form-group">
              <label for="InputAbout">About</label>
              <textarea class="form-control" id="InputAbout">{{ $data->about }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Update</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Display Picture</h4>
          <form class="forms-sample" action="{{ route('admin.dp', encrypt($data->id))}}" method="POST" enctype="multipart/form-data">
          	@csrf
            <div class="form-group">
              <label for="InputDp">Profile Pic</label>
              <input type="file" class="form-control" id="InputDp" placeholder="Profile Pic">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Update</button>
          </form>
        </div>
      </div>
      <div class="card mt-5">
        <div class="card-body">
          <h4 class="card-title">Password</h4>
          <form class="forms-sample" action="{{ route('admin.userpwd', encrypt($data->id))}}" method="POST">
          	@csrf
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<div class="row">
	<div class="col-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Verify Email</h4>
          <form class="form-inline d-flex justify-content-between" action="{{ route('admin.verifyuser', encrypt($data->id))}}" method="POST">
          	@csrf
            <div class="form-check mx-sm-2">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="<?php echo now() ?>">
                Verify Account
              </label>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection