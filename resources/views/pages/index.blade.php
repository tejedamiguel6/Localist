@extends('layouts.masterLayout')



@section('content')
  <body>
    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="jumbotron text-center">
  <div class="container">
    <h1 class="greeting display-3"></h1>
    <h1 class= "jumbotron-heading">Welcome to Asheville</h1>
<!--     <img class="asheville" src="images/asheville-Pano.jpg">
 -->      <p>Were here to show you where the local special are tonight!</p>

<!-- authentication logic -->
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
            @auth
            <p>  <a class= "btn btn-success btn-lg" href="/businesses/create"> Add your business!</a>
            @else
            <p> <a class= "btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class= "btn btn-success btn-lg" href="/register" role="button">Register</a> </p>
            @endauth
          </div>
      @endif
  </div> 
</section>  
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>For Locals</h2>
            <p>Asheville Localist is here to show you the weekly local specials from your faviorite bars. Aimed for locals in the Asheville area; you will now have an idea on where to go on that random weeknight to avoid the weekend tourist. As a local, you know that weeknights are a bit more fun to go out on. Check out the specials</p>
          </div>
          <div class="col-md-4">
            <h2>For Businesses</h2>
            <p>If you're a business owner and woud like to add your business on Localist, just create an account, add your business, and update your weekly specials. We will review your business, and send you an email after we have validated it as a legitimate Business. Meanwhile, check out Asheville's local businesses, and their specials!</p>
<!--             <p>  <a class= "btn btn-success btn-lg" href="/businesses/create"> Add your business!</a>
 -->            <p><a class= "btn-lg btn-block btn btn-primary" href="{{ route('businesses.index') }}"> Explore Businesses</a></p>
          </div>
          <div class="col-md-4">
            <h2>Coming soon!</h2>
            <p>We are working on new features to make Localist a better experience for you. Heres a small list of what is coming soon.</p>
            <ul>
              <li>search bar.</li>
              <li>Twitter feed of businesses.</li>
              <li>Maps to show specials location</li>
              <li>Much More</li>
            </ul>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
@endsection
