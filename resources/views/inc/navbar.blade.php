 <!-- logic for authernitcation -->
  <nav class="navbar navbar-expand-md  navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
      <a class="navbar-brand" href={{ '/' }}> {{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a class="nav-link" href={{ '/' }}>Home <span class="sr-only"></span></a></li>
          <li class="nav-item active"><a href="{{ route('businesses.index') }}" class="nav-link">Asheville <span class="sr-only">(current)</span></a></li>
          <li class="nav-item active"><a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a></li>
        </ul>
<!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
        @if(Auth::check() && Auth::user()->role_id == 1)
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i>Admin</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('businesses.index') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> All Businesses</a></li>
            <li><a href="{{ route('users.index') }}"><i class="fa fa-user" aria-hidden="true"></i> All Users</a></li>
            <li><a href="{{ route('roles.index') }}"><i class="fa fa-envelope" aria-hidden="true"></i> All Roles</a></li>
          </ul>
          </li>
        @endif
<!-- Authentication Links --> <!-- custom nav -->
        @guest
          <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->first_name }} 
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
            </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
             </form>
              </div>
          </li>
          @endguest
          </ul>
    </div>
  </div>
</nav>