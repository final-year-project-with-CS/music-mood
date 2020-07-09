
@section('scripts')
@extends('layouts.design')
@section('contents')
@if(count($dashboards) > 0)

  
  <h4 class="mb-3 mb-md-0">New Release</h4>

  <br>
  <div class="row">
    @foreach ($dashboards as $dashboard)
       <div class="col-lg-4 mb-3">
        <div class="card">
        <img src="{{ asset($dashboard->cover)}}" class="card-img-top" height="300" width="100%" alt="pic">
            <div class="card-body">
            <h5 class="card-title">{{ $dashboard->name }}</h5>
                <p class="card-text">This is new music</p>
            </div>
        </div>
       </div>
       <br>
       @endforeach

</div>
<br>
@else
<p>No Content Available</p>
@endif



@endsection

@section('scripts')
