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
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Businesses</h2>
            <p>If you're a business owner and woud like to add your business on Localist, just make an account, add your business, and update your weekly specials. We will review your business, and send you an email after we have validated it as a legitimate Business. Meanwhile, check out our local businesses, and their specials!</p>
<!--             <p>  <a class= "btn btn-success btn-lg" href="/businesses/create"> Add your business!</a>
 -->            <p><a class="btn btn-secondary" href="{{ route('businesses.index') }}">Businesses</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
@endsection
