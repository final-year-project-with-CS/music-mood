@extends('layouts.design')

@section('styles')
   <style>
       ul {
           list-style: none
       }
   </style>
@endsection
@section('contents')

@if(count($songs) > 0)
<div class="table-responsive">
 <table class="table table-hover mb-0">
   <thead>
     <tr>
       <th class="pt-0">#</th>
       <th class="pt-0">Song</th>
       {{-- <th class="pt-0">Abusive words</th> --}}
       <th class="pt-0">percentage</th>
       <th class="pt-0">genre</th>
       <th class="pt-0">status</th>
       
       
      </tr>
      
    </thead>
    @foreach ($songs as $song)
    <tbody>
      <tr>
     <td>{{ $song->id }}</td>
     <td>{{ $song->name }}</td>
     {{-- <td><button class="open-RequestDialog btn btn-block btn-primary" data-toggle="modal" data-id="" data-target="#abusiveModal">Abusives</button> --}}
      <td>50%</td>
      <td>{{ $song->genre }}</td>
      {{-- @foreach ($abusives as $abusive) --}} 
     <td><button class="open-RequestDialog btn btn-block btn-danger-muted" id="song_{{ $song->id }}" data-toggle="modal" data-id="{{ $song->id }}" 
      data-target="#requestModal" onclick="updateStatus('{{ $song->id }}')">{{ $song->status }}</button>
      </td>
      {{-- @endforeach --}}
    </tr>
  </tbody>
  @endforeach
 </table>
 @else
   <p>songs not found</p>
</div>
@endif


      <!-- Artist modal -->
      @foreach ($abusives as $abusive)
      <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="requestModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Song Request</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="updateSong" method="POST">
                @csrf 
            <input type="text" id="songId" name="songId" value="{{ $song->id }}" hidden>
                <p class="lead">
                  This song appear to have abusive words which is illegal according to our country culture
                </p>
                <br>
               
              <p id="_abusiveWords"></p>
             
              {{-- <input type="text" id="artistId" name="artistId" hidden> --}}
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
    
    @endforeach





@endsection

@section('scripts')
<script>
//   $(document).on("click", ".open-RequestDialog", function () {
//      var myRequestId = $(this).data('id');
//      $(".modal-body #abusiveId").val( myRequestId );
//      As pointed out in comments, 
//      it is unnecessary to have to manually call the modal.
//      $('#addBookDialog').modal('show');
// });

let abusiveWords = '';

var p = document.querySelector('#_abusiveWords');

function updateStatus(id) {
  
  p.innerHTML = '';

   const songId = id;

   const requestData = {
     song_id: songId
   }

  fetch(`http://localhost:8000/api/abusives/${songId}`, {
     method: 'POST',
     headers: {
      "Content-Type": "text/plain;charset=UTF-8"
     },
     body: JSON.stringify(requestData)
   }).
   then(response => {
    return response.json()
   })
   .then(json => {
     p.innerHTML = json[0].abusive_word
   })
   .catch(error => {
     console.log(error)
   })
}
</script>



@endsection