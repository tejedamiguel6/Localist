@extends('layouts.masterLayout')

@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="greeting display-3"></h1>
    <h1 class= "jumbotron-heading">Welcome to Asheville </h1>
      <p> THIS IS A SPECIAL LISTING</p>
      <p> <a class= "btn btn-success btn-lg" href="/businesses/create"> Create a business!</a>
        <a href</a>
      </p>
  </div> 
</section>    
<!-- jumbotron layout i am experimenting with  -->
<main role="main">
            <div class="row">
              @foreach($specials as $special)
              <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ $businesses->image_path }}">
                <div class="card-body">
                  <h1 class="card-text"><a href="/business/{{ $businesses->id }}"> {{ $businesses->business_name }} </a> </h1>
                  <p class="address"> {{ $businesses->address }}</p>
                  <p class="phone-num"> contact us {{ $businesses->phone_num }}</p>
                  <p class="url"> <a href=" {{ $businesses->url }} "> View our Specials</a> </p>
                  <p class="url">{{ $businesses->street }} {{ $businesses->city }} NC </a> </p>
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
      <div class="album py-5 bg-light">
        <div class="container">
        </div>
      </div>
</main>

@endsection