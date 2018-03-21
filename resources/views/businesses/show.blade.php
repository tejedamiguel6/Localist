@extends('layouts.masterLayout')

@section('content')
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{ $businesses->business_name }}</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

        <div class="container">
        <div class="row">
<!--          @foreach($businesses->specials as $specials)
 -->        <div class="col-lg-10">
          <!-- <h2>{{ $specials->monday }}</h2>
          <p class="text-danger"></p>
          <p><a class="btn btn-primary" href="#" role="button">View details »</a></p> -->
        </div>
<!--       @endforeach
 -->      
  <div class="table-responsive">  
  <table class="table">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">Monday</th>
        <th scope="col">Tuesday</th>
        <th scope="col">Wednesday</th>
        <th scope="col">Thurday</th>
        <th scope="col">Friday</th>
        <th scope="col">Saturday</th>
        <th scope="col">Sunday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $specials->description }}</td>
        <td>{{ $specials->tuesday }}</td>
        <td>{{ $specials->wednesday }}</td>
        <td>{{ $specials->thursday }}</td>
        <td>{{ $specials->friday }}</td>
        <td>{{ $specials->saturday }}</td>
        <td>{{ $specials->sunday }}</td>
      </tr>
      <tr>
        <th></th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  </div>

  <aside class="col-md-2 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">  
        </div>
          <div class="p-3">
            <h4 class="font-italic">Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/businesses/{{ $businesses->id }}/edit">Edit</a></li>
              <li><a href="#">Delete</a></li>
              <li><a href="#">Add New user</a></li>
            </ol>
          </div>
         <!--  <div class="p-3">
            <h4 class="font-italic">Members</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              
            </ol>
          </div> -->
  </aside>
    </div>
    </div>   
    </main>
@endsection
