

<nav class="custom-navbar navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" id="glb" href="{{url('/')}}">GottaLottaBooks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="navLinks">
          <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" id="searchBtn" type="submit">Search</button>
        </form>
        @guest
            
        
        <a class="nav-link" id="logRegLink" href="{{ route('login') }}">{{ __('Login') }}</a>

        @if (Route::has('register'))
            <a class="nav-link" id="logRegLink" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
        </div>


        @endguest

        @auth

        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{Auth::user()->name}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">View my books</button>
        <a class="dropdown-item" href="{{ url('/profile') }}"> Edit Profile</a>
        <a class="dropdown-item" href="{{ url('/userprofile') }}"> Your Profile </a>
        <a class="dropdown-item" href="{{ url('/logout') }}"> Logout </a>
        </div>
        </div>
        @endauth 

        

    </div>
</nav>