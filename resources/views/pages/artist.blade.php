@extends('layouts.design')
@section('contents')
<div class="row">
    {{-- artist name and pics --}}
    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Artist</h6>
            <div class="dropdown mb-2">
              <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          @if(count($artists) > 0)
          <div class="d-flex flex-column">
            @foreach ($artists as $artist)
                
            <a href="#" class="d-flex align-items-center border-bottom py-3">
                <div class="mr-3">
                  <img src="assets\images\faces\face1.jpg" class="rounded-circle wd-35" alt="user">
                </div>
                <div class="w-100 artist" data-artist="Yaretzi Mayo">
                  <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2">{{ $artist->user_name }}</h6>
                    <p class="text-muted tx-12">01.19 AM</p>
                  </div>
                <p class="text-muted tx-13">{{ $artist->label }}</p>
                </div>
              </a>
              @endforeach


          </div>
        </div>
      </div>
    </div>
    @endif
    {{-- artist names and pic --}}

    <div class="col" id="hide" style="display:none">
        <div class="card">
            <div class="card-header">
                <h1 id="artist"></h1>
            </div>
            <div class="card-body">
                Songs
                <table class="table w-100">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Album</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Diamond platnumz</td>
                        <td>Released</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>joeboy</td>
                        <td>Released</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Roddy Rich</td>
                        <td>Released</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Aslay</td>
                        <td>Released</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


  </div>
@endsection

@section('scripts')
  <script>
      document.addEventListener('DOMContentLoaded', () => {
          document.querySelectorAll('.artist').forEach((div) => {
              div.onclick = () => {
                  document.querySelector('#hide').style.display = 'block';
                  document.querySelector('#artist').innerHTML = div.dataset.artist;
              }
          });
      });
  </script>
@endsection
