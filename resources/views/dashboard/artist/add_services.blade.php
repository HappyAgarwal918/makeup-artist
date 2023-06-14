@extends('dashboard.layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contact</h4>
                <p class="card-description"><a href="{{ route('artist.newservices') }}" type="button" class="btn btn-primary">Add New Services</a></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Artist</th>
                                <th>Location</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                        	<tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->name}}</td>
                                <td>{{ $value->type}}</td>
                                <td>{{ $value['servicecat']->cat_name}}</td>
                                <td>{{ $value->price}}</td>
                                <td>{{ $value['serviceartist']->name}}</td>
                                <td>{{ $value['serviceloc']->locality}} </td>
                                <td><a href="{{ route('artist.newservices', encrypt($value->id)) }}"><label class="badge badge-danger">Edit</label></a>&nbsp; 
                                    <a href="javascript:void(0)"
                                    id="show-user" 
                                    data-url="{{ route('artist.servcicedetails', encrypt($value->id))}}"
                                    type="button" 
                                    class=""><label class="badge badge-danger">View Detail</label></a>&nbsp;
                                    <a href="{{ route('artist.destroyservice', encrypt($value->id)) }}"><label class="badge badge-danger">Delete</label></a>&nbsp;</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="serviceShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Service Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <p><strong>ID:</strong> <span id="service-id"></span></p>
            <p><strong>Name:</strong> <span id="service-name"></span></p>
            <p><strong>Artist:</strong> <span id="service-artist"></span></p>
            <p><strong>Type:</strong> <span id="service-type"></span></p>
            <p><strong>Category:</strong> <span id="service-category"></span></p>
            <p><strong>Location:</strong> <span id="service-location"></span></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function () {
       
       /* When click show user */
        $('body').on('click', '#show-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#serviceShowModal').modal('show');
              $('#service-id').text(data.id);
              $('#service-artist').text(data['serviceartist'].name);
              $('#service-name').text(data.name);
              $('#service-type').text(data.type);
              $('#service-category').text(data['servicecat'].cat_name);
              $('#service-location').text(data['serviceloc'].locality);
             
          })
       });
       
    });
</script>
@endsection