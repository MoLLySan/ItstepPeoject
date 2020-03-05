<nav class="navbar navbar-expand-lg navbar-light bg-warning text-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @if (Route::has('login'))
        
           
            
                @auth
                <li class="nav-item active">
                <div class="nav-item" >
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </div>
                </li>
                @else
                <li class="nav-item active">
                <div class="nav-item" >
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </div>
              </li>

                    @if (Route::has('register'))
                    <li class="nav-item active">
                    <div class="nav-item" >
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </div>
                  </li>
                    @endif
                @endauth
              
            
        @endif






        
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>



        @if(auth()->user()->is_admin)
        <li class="nav-item dropdown bg-warning">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            for maneger
          </a>
          <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdown" style=".dropdown-item a:hover { color: green }">
            <a class="dropdown-item" href="#" >users</a>
          <a class="dropdown-item" href="#">products</a>

        </li>

        @endif




   







        {{-- <li class="nav-item">
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          
           <a class="dropdown-item" href="{{ url('/home') }}">Users</a>
           <a class="dropdown-item" href="{{ url('/home') }}">News</a>
            
          
        </div>
        </li> --}}





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

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/home') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
              logout
          </a>

          <form id="logout-form" action="{{ url('/home') }}" method="POST" style="display: none;">
              @csrf
          </form>

        </li>
    </ul>
    </div>
  </nav>