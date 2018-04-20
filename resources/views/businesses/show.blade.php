@extends('layouts.masterLayout')

@section('content')
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{ $businesses->business_name }}</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>

          @if(Auth::id() == $businesses->user_id)

          <p>
            <a href= "/specials/create/{{ $businesses->id }}" class="btn btn-success my-2">Add Your Special</a>
            <a  href="/businesses/{{ $businesses->id }}/edit" class="btn btn-primary my-2">Edit Your Special</a>
          </p>

          @endif
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
     @foreach($businesses->specials as $special)
    <h1 style="text-align: center; font-size:15px;">Update on: {{ $specials->created_at->toDayDateTimeString() }}</h1>
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
    @endforeach
  </table>
  </div>
  </div>


@if(Auth::check() && Auth::user()->role_id == 1)
<section class="jumbotron-second text-center">
  <p>
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
<!--     <a  href="/businesses" class="btn btn-info my-2">Back to Businesses</a>
 -->  </p>
</section>
@endif

            
              <i class="fa fa-power-off" aria-hidden="true"></i>
              
              <form id="delete-form" action="{{ route('businesses.destroy',[$businesses->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>


@if(Auth::check() && Auth::user()->role_id ==! 1)


<section class="jumbotron-second text-center">
              <a  href="/businesses" class="btn btn-info my-2">Back to Businesses</a>

 </section>    

 @endif  

<!-- non member users can go "back to business" -->
 <section class="jumbotron-second text-center">
              <a  href="/businesses" class="btn btn-info my-2">Back to Businesses</a>

 </section>          

            </ol>
      
    </div>
    </div>   
    </main>
@endsection