@extends('dashboard.layouts.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contact</h4>
                <p class="card-description"><a href="{{ route('admin.editartist') }}" type="button" class="btn btn-primary">Add New Artist</a></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Profile Pic</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No.</th>
                                <th>Joining Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset('dp/'.$value->image) }}"></td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->mobile }}</td>
                                <td>{{ Carbon\Carbon::parse($value->created_at)->format('d M Y') }}</td>
                                <td><a href="{{ route('admin.editartist', encrypt($value->id)) }}"><label class="badge badge-danger">Edit</label></a>&nbsp; <a 
                                    href="javascript:void(0)"
                                    id="show-user" 
                                    data-url="{{ route('admin.artistdata', encrypt($value->id)) }}"
                                    type="button" 
                                    class=""><label class="badge badge-danger">View Detail</label></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <p><strong>ID:</strong> <span id="user-id"></span></p>
            <p><strong>Name:</strong> <span id="user-name"></span></p>
            <p><strong>Email:</strong> <span id="user-email"></span></p>
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
              $('#userShowModal').modal('show');
              $('#user-id').text(data.id);
              $('#user-name').text(data.name);
              $('#user-email').text(data.email);
          })
       });
       
    });
</script>
@endsection