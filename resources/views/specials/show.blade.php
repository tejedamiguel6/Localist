@extends('layouts.masterLayout')

@section('content')
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Your Special has been updated!{{ $special->id }}</h1>
          <p class="lead text-muted"></p>
          <p>
            <a href="/specials/{{ $special->id }}/edit" class="btn btn-primary my-2">Edit Special</a>
            
          </p>
        </div>
      </section>
      

        <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
              <p class="lead">Special Location: {{ $special->business->business_name }}</p>
              <p>About: {{ $special->description }}</p>
          </div>
          <div class="col-md-6 text-center">
            <p>Start Date: {{ Carbon\Carbon::parse($special->start_date)->format('m/d/Y') }}</p>
          </div>
          <div class="col-md-6 text-center">
            <p>End Date: {{ Carbon\Carbon::parse($special->end_date)->format('m/d/Y') }}</p>
          </div>

  <div class="table-responsive">  
  <table class="table">
    <caption></caption>
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
        <td>{{ $special->monday }}</td>
        <td>{{ $special->tuesday }}</td>
        <td>{{ $special->wednesday }}</td>
        <td>{{ $special->thursday }}</td>
        <td>{{ $special->friday }}</td>
        <td>{{ $special->saturday }}</td>
        <td>{{ $special->sunday }}</td>
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

  
 <section class="jumbotron-second text-center">
              <a  href="/businesses" class="btn btn-info my-2">Back to Businesses</a>

 </section>    

  <aside class="col-md-2 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">  
        </div>
          <div class="p-3">
            <ol class="list-unstyled">
              <li><a href="/specials/create">Add Specials</a></li>



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

              <form id="delete-form" action="{{ route('specials.destroy',[$special->id]) }}" 
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