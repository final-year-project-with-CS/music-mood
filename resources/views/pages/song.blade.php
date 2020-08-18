@extends('layouts.design')

    
@section('contents')
         
<div class="col-lg-12 col-xl-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">SONGS</h6>
          <div class="dropdown mb-2">
            <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
              <a class="dropdown-item d-flex align-items-center" href="/song_view/ "><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
              <a class="dropdown-item d-flex align-items-center" href=""><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
            </div>
          </div>
        </div>
        {{-- the design up containing heading and button hover  --}} 
         @if(count($songs) > 0)
         <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th class="pt-0">#</th>
                <th class="pt-0">Names</th>
                <th class="pt-0">Time</th>
                <th class="pt-0">Genre</th>
                <th class="pt-0">Plays</th>
                <th class="pt-0">Status</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($songs as $song)
              <tr>
              <td>{{ $song->id }}</td>
              <td><a class="nav-link text-primary " href="/songView/{{ $song->id }}">{{ $song->name }}</a></td>
              <td>{{ $song->time }}</td>
              <td>{{ $song->genre }}</td>
              <td>{{ $song->play_count }}</td>
              <td><button href="" class="btn btn-sm btn-danger"><span>pending</span></button></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
            <p>Songs not found</p>
          @endif


        </div>
      </div>
    </div>
  </div>


@endsection

@section('scripts')
