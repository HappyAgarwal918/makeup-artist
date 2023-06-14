@extends('dashboard.layouts.master')

@section('content')

<div class="row">
	<div class="col-md-12 col-lg-12 col-xl-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="form-sample" method="post" action="@if(isset($data['location'])) {{route('updateAddress',$data['location']->id)}} @else {{ route('addAddress')}} @endif">
            @csrf
            <p class="card-description">
              Address
            </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="locality" class="col-sm-3 col-form-label">Locality</label>
                  <div class="col-sm-9">
                    <input type="text" name="locality" class="form-control" value="{{ $data['location']->locality?? '' }}" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="address" class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                    <input type="text" name="address" class="form-control" value="{{ $data['location']->address?? '' }}"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-none">
              <input type="text" name="latitude" class="form-control" value="{{ $data['location']->latitude?? '' }}" />
              <input type="text" name="longitude" class="form-control" value="{{ $data['location']->longitude?? '' }}" />
              <input type="text" id="state" value="{{ $data['location']->state_id?? '' }}" />
              <input type="text" id="city" value="{{ $data['location']->city_id?? '' }}" />
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="postcode" class="col-sm-3 col-form-label">Postcode</label>
                  <div class="col-sm-9">
                    <input type="text" name="postcode" class="form-control" value="{{ $data['location']->postcode?? '' }}"/>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Country</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="country_id" id="country-dropdown" onchange="stateajax();">
                      <option value="">Select Country</option>
                      @foreach($data['country'] as $country)
                      <option @isset($data['location']) @if($data['location']->country_id == $country->id) selected @endif @endisset value="{{ $country->id}}">{{ $country->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">States</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="state_id" id="state-dropdown" onchange="cityajax();">
                      <option>Select Country First</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">City</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="city_id" id="city-dropdown">
                      <option>Select State First</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Update</button>
            @if(isset($data['location']))
            <a class="btn btn-danger mb-2" href="{{ route('admin.destroyAddress', encrypt($data['location']->id))}}">Delete</a>
            @endif 
          </form>
        </div>
    </div>
</div>
</div>


@endsection
@section('js')
<script>
  function stateajax(){
    var country_id = document.getElementById('country-dropdown').value;
    var state = document.getElementById('state').value;
    $("#state-dropdown").html('');

    $.ajax({
      url:"{{route('getState')}}",
      type: "POST",
      data: {
        country_id: country_id,
        _token: '{{csrf_token()}}' 
      },
      dataType : 'json',
      success: function(result){
        $('#state-dropdown').html('<option value="">Select State</option>'); 
        $.each(result.states,function(key,value){
          if(value.id == state){select_states = "selected";}else{select_states = " ";}
          $("#state-dropdown").append('<option value="'+value.id+'" '+select_states+'>'+value.name+'</option>');
        });
        cityajax();
      }
    });
  }

  function cityajax(){
    var state_id = document.getElementById('state-dropdown').value;
    var city = document.getElementById('city').value;
    $("#city-dropdown").html('');
    $.ajax({
      url:"{{ route('getCity')}}",
      type: "POST",
      data: {
        state_id: state_id,
        _token: '{{csrf_token()}}' 
      },
      dataType : 'json',
      success: function(result){
        $('#city-dropdown').html('<option value="">Select City</option>'); 
        $.each(result.cities,function(key,value){
          if(value.id == city){select_city = "selected";}else{select_city = " ";}
          $("#city-dropdown").append('<option value="'+value.id+'" '+select_city+'>'+value.name+'</option>');
        });
      }
    });
  }
  
  stateajax();
</script>
@endsection