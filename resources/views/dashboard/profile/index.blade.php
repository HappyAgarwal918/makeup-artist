@extends('dashboard.layouts.master')

@section('content')

@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
@if(Session::has('error_message'))
<div class="alert alert-danger">
{{ Session::get('error_message') }}
</div>
@endif

<div id="txtTest" class=""></div>

<div class="row">
  <div class="col-md-4 col-lg-4">
    <h3 class="pt-5">Basic Profile :</h3>
  </div>
	<div class="col-md-8 col-lg-8 col-xl-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          	<div class="form-group row">
              <label for="exampleInputdp" class="col-sm-3 col-form-label">Profile Picture</label>
              <div class="col-sm-9">
                @isset($data->image)
              	<img src="{{ asset('dp'.'/'.$data->image)}}" id="exampleInputdp" style="width:50px">
                @else
                <img src="{{ asset('dp/avatar.png')}}" id="exampleInputdp" style="width:50px">
                @endisset
                <br>
                <a type="button" class="" data-toggle="modal" data-target="#modal5">Update Profile Picture</a>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputName" class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputName" placeholder="Name" value="{{ $data->name }}" readonly>
                <a type="button" class="" data-toggle="modal" data-target="#modal1">Update Name</a>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputabout" class="col-sm-3 col-form-label">About</label>
              <div class="col-sm-9">
              	<textarea class="form-control" id="exampleInputabout" placeholder="Name" rows="4" readonly>{{ $data->about }}</textarea>
                <a type="button" class="" data-toggle="modal" data-target="#modal2">Update About</a>
              </div>
            </div>
            <div class="form-group row">
              <label for="examplepassword" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="examplepassword" placeholder="Password" value="********" readonly>
                <a type="button" class="" data-toggle="modal" data-target="#modal4">Update Password</a>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-4 col-lg-4">
    <h3 class="pt-5">Saved Address :</h3>
  </div>
  <div class="col-md-8 col-lg-8 col-xl-6 grid-margin stretch-card">
      <div class="card"> 
        <div class="card-body">
          <div class="row">
            @isset($data['address'])
              @foreach($data['address'] as $key => $address)
              <div class="col-md-6 d-flex">
                <h5>{{ $key+1 }}</h5>&emsp;
                <blockquote class="blockquote blockquote-primary position-relative">
                  <address>
                    <p class="font-weight-bold pb-3">{{ $address->locality }}</p>
                    <p>{{ $address->address }}</p>
                  </address>
                  <a href="{{ route('address', encrypt($address->id))}}" class="address-edit"><i class="fas fa-edit" aria-hidden="true"></i></a>
                </blockquote>
              </div>
              @endforeach
            @else
            <h5 class="p-3">No Address Added Yet</h5>
            @endisset
          </div>
          <div><a href="{{ route('address')}}" class="">Add New Address</a></div>
        </div>
      </div>
  </div>
</div>
<!-- Modal Name -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('username')}}" method="post">
        @csrf
      	<div class="modal-body">
      		<div class="mb-3">
	            <label for="password" class="form-label">Recent Password</label>
	            <input type="password" class="form-control" name="password" value="">
	        </div>
	        <div class="mb-3">
	            <label for="name" class="form-label">Name</label>
	            <input type="text" class="form-control" name="name" value="">
	        </div>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save changes</button>
      	</div>
  	  </form>
    </div>
  </div>
</div>
<!-- Modal 2 About -->
<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update About</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('about')}}" method="post">
            @csrf
      	<div class="modal-body">
	        <div class="mb-3">
	            <label for="about" class="form-label">About</label>
	            <textarea name="about" class="form-control" rows="6">{{ $data->about }}</textarea>
	        </div>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save changes</button>
      	</div>
  	  </form>
  	</div>
  </div>
</div>

<!-- Modal 4 Password -->
<div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('password')}}" method="POST">
            @csrf
      	<div class="modal-body">
	        <div class="mb-3">
	            <label for="old_password" class="form-label">Recent Password</label>
	            <input type="password" class="form-control" name="old_password" value="">
	        </div>
	        <div class="mb-3">
	            <label for="password" class="form-label">New Password</label>
	            <input type="password" class="form-control" name="password" value="">
	        </div>
	        <div class="mb-3">
	            <label for="password_confirmation" class="form-label">Confirm Password</label>
	            <input type="password" class="form-control" name="password_confirmation" value="">
	        </div>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save changes</button>
      	</div>
  	  </form>
    </div>
  </div>
</div>

<!-- Modal 5 Profile Picture -->
<div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('profilepic')}}" method="POST" enctype="multipart/form-data">
            @csrf
      	<div class="modal-body" id="profiledp">
      		<div class="mb-3" id="preview"></div>
	        <div class="mb-3">
	        	<label class="file">
			      <input type="file" id="file" accept="image/*" name="image" aria-label="File browser">
			      <span class="file-custom"></span>
			  	</label>
	        </div>
      	</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-primary">Save changes</button>
      	</div>
  	  </form>
    </div>
  </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
$('#file').on('change', function() {
  var file = this.files[0],
      filename = file.name,
      $label = $(this).next('.file-custom'),
      $preview = $('#preview'),
      img = document.createElement("img"),
      reader = new FileReader();
  
  img.file = file;
  img.classList.add("img-responsive");
  $preview.html(img);
  
  reader.onload = (function(aImg) {
    return function(e) {
      aImg.src = e.target.result;
    };
  })(img);

  reader.readAsDataURL(file);
  
  $label
    .attr('data-label', filename)
  	.addClass('active');
});
</script>
@endsection