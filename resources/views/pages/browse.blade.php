@extends('layouts.app')
@section('contents')
@if(count($browses) > 1)

  
  <h4 class="mb-3 mb-md-0">New Release</h4>

  <br>
  <div class="row">
    @foreach ($browses as $browse)
       <div class="col-lg-4 mb-3">
        <div class="card">
        <img src="{{ asset($browse->cover)}}" class="card-img-top" height="300" width="100%" alt="pic">
            <div class="card-body">
            <h5 class="card-title">{{ $browse->name }}</h5>
                <p class="card-text">This is new music</p>
            </div>
        </div>
       </div>
       <br>
       @endforeach

</div>
<br>
@else
<p>No albums</p>
@endif


    {{-- <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div> --}}

  
  {{-- <div class="card-deck">
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>

  </div>
  <br>
  <div>
    <h4 class="mb-3 mb-md-0">Upcoming Albums</h4>
  </div>
  <br>
  <div class="card-deck">
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>

  </div>
  <br>
  <div>
    <h4 class="mb-3 mb-md-0">Recently Added</h4>
  </div>
  <br>
  <div class="card-deck">
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>

  </div> --}}


@endsection

@section('scripts')
