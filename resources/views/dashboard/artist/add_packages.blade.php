@extends('dashboard.layouts.master')

@section('content')

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Packages</h4>
          <form action="@if(!empty($data)){{ route('artist.editpackages', encrypt($data->id))}}@else{{ route('artist.addpackages')}}@endif" method="POST">
          	@csrf 
            <div class="form-group">
                <label for="services">Services</label>
                  <select class="selectpicker" id="services" name="services[]" multiple aria-label="Default select example" data-live-search="true">
                        @foreach($services as $artservices)
                        <option value="{{ $artservices->id}}" @if(!empty($data)) @foreach($data['services'] as $servicedata) @if($servicedata->id == $artservices->id) selected @endif @endforeach @endif>{{ $artservices->name}}</option>
                        @endforeach
                  </select>
            </div>
             <div class="form-group">
              <label for="offer">Offer</label>
              <input type="text" class="form-control" id="offer" name="offer" placeholder="Enter Offer" value="@if(!empty($data)){{ $data->offer }}@endif">
              <div class="options">
              	<input type="radio" id="value" name="offer_type" value="value" @if(!empty($data) && $data->offer_type == 'value') checked @endif>
              	<label for="value">In Value</label>
              	<input type="radio" id="percent" name="offer_type" value="percent" @if(!empty($data) && $data->offer_type == 'percent') checked @endif>
              	<label for="percent">In Percentage</label>
              </div>
            </div> 
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection

