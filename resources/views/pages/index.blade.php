@extends('layouts.masterLayout')

@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="greeting display-3"></h1>
    <h1 class= "jumbotron-heading">Welcome to Asheville</h1>
      <p> I am here to show you where all the specials downtown are, and where the local spots are.</p>
      <p> <a class= "btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class= "btn btn-success btn-lg" href="/register" role="button">Register</a> 
      </p>
  </div> 
</section>    
<!-- jumbotron layout i am experimenting with  -->
<main role="main">
  @foreach($places->chunk(3) as $placesChunk)
            <div class="row">
              @foreach($placesChunk as $places)
              <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ $places->image_path }}">
                <div class="card-body">
                  <h1 class="card-text">{{ $places->business_name }}</h1>
                  <p class="address"> {{ $places->address }}</p>
                  <p class="phone-num"> contact us {{ $places->phone_num }}</p>
                  <p class="url"> <a href=" {{ $places->url }} "> View our Specials</a> </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
              @endforeach
          </div>
  @endforeach
      <div class="album py-5 bg-light">
        <div class="container">
        </div>
      </div>
</main>
<!-- ebd jumbotron  -->
        
<!-- Set this map id on the page where you want the map to show
        <div id="map">
        	map
        </div> -->


<!-- authentication
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

 -->
@endsection