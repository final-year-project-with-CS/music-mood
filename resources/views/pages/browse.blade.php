@extends('layouts.design')
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
<div class="paginate float-right mt-2">
  {{ $browses->links() }}

</div>
<br>
@else
<p>No content </p>
@endif



@endsection

@section('scripts')
