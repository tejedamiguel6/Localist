@extends('layouts.masterLayout')

@section('content')
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Your Special has been updated!{{ $specials->specials_id }}</h1>
          <p class="lead text-muted"></p>
          <p>
            <a href= "/specials/create/{{ $specials->id }}" class="btn btn-primary my-2">Add Special</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

        <div class="container">
        <div class="row">

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
        <td>{{ $specials->monday }}</td>
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

    <div class="row">

      </div>
    </div>
  </div>

  


  <aside class="col-md-2 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">  
        </div>
          <div class="p-3">
            <h4 class="font-italic">Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/specials/{{ $specials->id }}/edit">Edit</a></li>
              <li><a href="/specials/create/{{ $specials->id }}">Add Specials</a></li>
              <li><a href="/business">Back to business </a></li>



              <li>
              <i class="fa fa-power-off" aria-hidden="true"></i>
              <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this special?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('specials.destroy',[$specials->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>




              </li>

        


              <!-- <li><a href="#">Delete</a></li>
              <li><a href="#">Add New user</a></li> -->
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