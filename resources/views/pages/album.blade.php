@extends('layouts.app')


@section('styles')
<style>
    #drop {
        height: 0px;
        animation-name: drop;
        animation-duration: 2s;
        animation-fill-mode: forwards;

    }

    @keyframes drop {
        from {
            height: 0px;
        }
        to {
            height: 200px;
        }
    }
</style>
@endsection



@section('contents')
@if(count($albums) > 0)
<div class="card-deck">
    @foreach ($albums as $album)
    <div class="card album">
    <img src="{{ asset($album->cover) }}" class="card-img-top" alt="pic">
        <div class="card-body">
        <h5 class="card-title">{{ $album->name }}</h5>
        <p class="card-text">{{ $album->genre}}</p> 
        </div>
        {{ $albums->links() }}
    </div>
    @endforeach
    @else
     <p>albums not found</p>
    @endif
   
    {{-- <div class="card album">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card album">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
    <div class="card album">
        <img src="assets/images/sample1.jpg" class="card-img-top" alt="pic">
        <div class="card-body">
            <h5 class="card-title">TREY GUZO</h5>
            <p class="card-text">This is new music.</p>
        </div>
    </div>
  </div> --}}
  {{-- <br> --}}
  

  <div id="drop" class="w-100" style="animation-play-state: paused; display:none;">
    <br>
    <table class="table w-100">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Album</th>
        </tr>
        <tr>
            <td>1</td>
            <td>NobleUI</td>
            <td>Released</td>
        </tr>
        <tr>
            <td>1</td>
            <td>NobleUI</td>
            <td>Released</td>
        </tr>
        <tr>
            <td>1</td>
            <td>NobleUI</td>
            <td>Released</td>
        </tr>
        <tr>
            <td>1</td>
            <td>NobleUI</td>
            <td>Released</td>
        </tr>
    </table>
  </div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.album').forEach((album) => {
            album.onclick = displayDiv;
        });
    });

    function displayDiv() {
        const div = document.querySelector('#drop');
        if (div.style.display === 'none') {
            div.style.display = 'block';
            if (div.style.animationPlayState === 'paused') {
            div.style.animationPlayState = 'running';
        }
        } else {
            div.style.display = 'none';
        }

    }
</script>
@endsection
