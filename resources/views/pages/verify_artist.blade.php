@extends('layouts.design')
@section('contents')

@if(count($artists) > 0)
<div class="table-responsive">
 <table class="table table-hover mb-0">
   <thead>
     <tr>
       <th class="pt-0">#</th>
       <th class="pt-0">Username</th>
       <th class="pt-0">Firstname</th>
       <th class="pt-0">Lastname</th>
       <th class="pt-0">label</th>
       <th class="pt-0">genre</th>
       <th class="pt-0">status</th>


     </tr>
   </thead>
   <tbody>
     @foreach ($artists as $artist)
     <tr>
     <td>{{ $artist->id }}</td>
     <td><a class="nav-link text-primary ">{{ $artist->user_name }}</a></td>
     <td>{{ $artist->first_name }}</td>
     <td>{{ $artist->last_name }}</td>
     <td>{{ $artist->label }}</td>
     <td>{{ $artist->genre }}</td>
     <td><button class="open-RequestDialog btn btn-block btn-danger-muted" data-toggle="modal" data-id="{{ $artist->id }}" data-target="#requestModal">{{ $artist->status}}</button>
    </td>
     </tr>
     @endforeach
   </tbody>
 </table>
 @else
   <p>Artists not found</p>
 @endif
</div>

      <!-- Artist modal -->
      <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Artist Request</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="updateArtist" method="POST">
                @csrf 
                <input type="text" id="artistId" name="artistId" hidden>
                 <div class="form-group">
                  <select class=" dropdown-toggle btn btn-block btn-danger" id="requestId" name="request">
                    <option selected>requested</option>
                      <option value="approved">approve</option>
                      <option value="pending">pending</option>
                      <option value="rejected">reject</option>
                         </select>
                </div>
              
                    
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
      
          </div>
        </div>
      </div>
          





@endsection

@section('scripts')
<script>
  $(document).on("click", ".open-RequestDialog", function () {
     var myRequestId = $(this).data('id');
     console.log(myRequestId);
     $(".modal-body #artistId").val( myRequestId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>

@endsection