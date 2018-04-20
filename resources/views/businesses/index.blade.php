@extends('layouts.masterLayout')

@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="greeting display-3"></h1>
    <h1 class= "jumbotron-heading">Welcome to Asheville </h1>
      <p> We are Localist, and we are here to show you what the local specials downtown are. Thank you for checking out Localist!</p>
      <p> <a class= "btn btn-success btn-lg" href="/businesses/create"> Add your business!</a>
      </p>
  </div> 
</section>    
<main role="main">
  @foreach($businesses->chunk(3) as $businesses)
  <div class="album py-5 bg-light">
            <div class="row">
              @foreach($businesses as $businesses)
              <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ $businesses->image_path }}">
                <div class="card-body">
                  <h1 class="card-text"><a href="/business/{{ $businesses->id }}"> {{ $businesses->business_name }} </a> </h1>
                  <p class="address"> {{ $businesses->address }}</p>
                  <p class="phone-num"> contact us {{ $businesses->phone_num }}</p>
                  <p  style="float:right;" class="url"> <a href=" {{ $businesses->url }} ">View Website</a> </p>
                  <p class="url">{{ $businesses->street }} {{ $businesses->city }} NC </a> </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="/business/{{ $businesses->id }}"> View</button></a>

                      <!-- If business owner is logged in they will see these options -->
                      @if(Auth::check() && Auth::user()->role_id == 1)
                      <button type="button"  class="btn btn-sm btn-outline-secondary"> <a href="/businesses/{{ $businesses->id }}/edit"> Edit</button> </a>
                      @endif
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
              @endforeach
             </div>  
          </div>
  @endforeach
</main>
@endsection