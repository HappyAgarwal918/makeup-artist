@extends('dashboard.layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Packages</h4>
                <p class="card-description"><a href="{{ route('artist.servicepackages') }}" type="button" class="btn btn-primary">Add Packages</a></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Service Packages</th>
                                <th>Offer</th>
                                <th>Offer Type</th>
                                <th>Total Cost</th>
                                <th>Acion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)         
                        	<tr>
                                <td>{{ $key+1}}</td>
                                <td>@foreach($value['services'] as $services){{ $services->name }}<br> @endforeach</td>
                                <td>{{ $value->offer}}</td>
                                <td>{{ $value->offer_type }}</td>
                                <td><?php $total = 0; foreach($value['services'] as $services){ $total += $services->price;} 
                                    if($value->offer_type == 'value'){ $total_price = $total - $value->offer; }elseif($value->offer_type == 'percent'){ $total_price = $total - ($value->offer/100 * $total); }echo $total_price;?></td>
                                <td><a href="{{ route('artist.servicepackages', encrypt($value->id))}}"><label class="badge badge-danger">Edit</label></a>&nbsp;
                                    <a href="javascript:void(0)"
                                    id="show-user" 
                                    data-url="{{ route('artist.packagedetail', encrypt($value->id))}}"
                                    type="button" 
                                    class=""><label class="badge badge-danger">View Detail</label></a>&nbsp;
                                    <a href="{{ route ('artist.destroypackages',  encrypt($value->id))}}"><label class="badge badge-danger">Delete</label></a>&nbsp;</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="packageShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Package Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <p><strong>ID:</strong> <span id="package-id"></span></p>
            <p><strong>Package:</strong> <span id="package-name"></span></p>
            <p><strong>Price:</strong> <span id="package-price"></span></p>
            <p><strong>Offer:</strong> <span id="package-offer"></span></p>
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
              $('#packageShowModal').modal('show');
              $('#package-id').text(data.id);
              $('#package-name').text(data.allservice);
              $('#package-price').text(data.total_price);
              $('#package-offer').text(data.offer);  
          });
       });
       
    });
</script>
@endsection
