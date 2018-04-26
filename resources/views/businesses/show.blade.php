@extends('layouts.masterLayout')

@section('content')
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{ $business->business_name }}</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>

          @if(Auth::id() == $business->user_id)

          <p>
            <a href= "/specials/create?selected={{ $business->id }}" class="btn btn-success my-2">Add Your Special</a>
            <a  href="/businesses/{{ $business->id }}/edit" class="btn btn-primary my-2">Edit Your Special</a>
          </p>

          @endif
        </div>
      </section>

        <div class="container">
        <div class="row">
   
  <div class="table-responsive">  
  <table class="table">
    <caption></caption>
    <thead>
      <tr>
        <th scope="col">Start Date</th>
        <th scope="col">Monday</th>
        <th scope="col">Tuesday</th>
        <th scope="col">Wednesday</th>
        <th scope="col">Thurday</th>
        <th scope="col">Friday</th>
        <th scope="col">Saturday</th>
        <th scope="col">Sunday</th>
        <th scope="col">Added</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach($business->specials as $special)

      <tr>
        <td>{{ Carbon\Carbon::parse($special->start_date)->format('m/d/Y') }}
        <td>{{ $special->monday }}</td>
        <td>{{ $special->tuesday }}</td>
        <td>{{ $special->wednesday }}</td>
        <td>{{ $special->thursday }}</td>
        <td>{{ $special->friday }}</td>
        <td>{{ $special->saturday }}</td>
        <td>{{ $special->sunday }}</td>
        <td>{{ Carbon\Carbon::parse($special->created_at)->diffForHumans() }}
      </tr>

      @endforeach
    </tbody>
    
  </table>
  </div>
  </div>


@if(Auth::check() && Auth::user()->role_id == 1)

<section class="jumbotron-second text-center">
<h1> Admin Actions </h1>
 <a href= "/specials/create/{{ $business->id }}" class="btn btn-success my-2">Add Your Special</a>

    <a href="#" class="btn btn-danger my-2" onclick="
                  var result = confirm('Are you sure you wish to delete this business?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete Business
              </a>

<a  href="/businesses/{{ $business->id }}/edit" class="btn btn-primary my-2">Edit Your Special</a>

</section>
@endif

<!-- delete button not functioning correctly. Come back and check on this -->
<!--  <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('specials.destroy',[$business->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>


 -->

<!-- non member users can go "back to business" -->
 <section class="jumbotron-second text-center">
              <a  href="/businesses" class="btn btn-info my-2">Back to Businesses</a>

 </section>          

            </ol>
      
    </div>
    </div>   
    </main>
@endsection