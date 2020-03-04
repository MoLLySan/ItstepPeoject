<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            @if (Route::has('login'))
            <div class="nav-item" >
                @auth
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
      
      
    <ul class="navbar-nav" >
        <li class="nav-item">
            @if (Route::has('login'))
            <div class="nav-item" >
                @auth
                    <a class="nav-link" href="{{ url('/home') }}">My Account</a>
                @else
                    
                @endauth
            </div> 
                @endif
        </li>

        <li class="nav-item">           
            <div class="nav-item" >               
                <a class="nav-link" href="{{ url('/home') }}">Cart</a>
            </div>        
        </li>
    </ul>
    </div>
  </nav>