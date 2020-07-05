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
     <td><button href="#" class="btn btn-sm btn-danger"><span>Approved</span></button></td>
     </tr>
     @endforeach
   </tbody>
 </table>
 @else
   <p>Artists not found</p>
 @endif


</div>
</div>
</div>
</div>




@endsection

@section('scripts')
