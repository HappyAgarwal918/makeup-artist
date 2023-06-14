@extends('dashboard.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Services</h4>
          <form action="@if(isset($data['artist'])){{ route('artist.editservice', encrypt($data['artist']->id))}}@else{{ route('artist.addservices')}}@endif" method="POST">
          	@csrf
            <div class="form-group">
              <label for="name">Service</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Service" value="@isset($data['artist']){{ $data['artist']->name }}@endisset">
            </div> 
            <div class="form-group">
               <label for="type">Type</label>
              <select id="type" class="form-control" name="type">
              	<option value="">Select any one</option>
              	<option value="men" @if(isset($data['artist']) && $data['artist']->type == 'men') selected @endif>Men</option>
              	<option value="women" @if(isset($data['artist']) && $data['artist']->type == 'women') selected @endif>Women</option>
              </select>
            </div>
            <div class="form-group">
              <label for="category_id">Category</label>
              <select id="category_id" class="form-control" name="category_id">
              	<option value="">Select any one</option>
              	@foreach($data['categories'] as $category)
              	<option value="{{ $category->id}}" @if(isset($data['artist']) && $data['artist']->category_id == $category->id) selected @endif>{{ $category->cat_name}}</option>
              	@endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="@isset($data['artist']){{ $data['artist']->price }}@endisset">
            </div> 
            <div class="form-group">
              <label for="location_id">Locataion</label>
              <select id="location_id" class="form-control" name="location_id">
                <option value="">Select any one</option>
                @foreach($data['location'] as $locations)
                <option value="{{ $locations->id}}" @if(isset($data['artist']) && $data['artist']->location_id == $locations->id) selected @endif>{{ $locations->locality}}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection

