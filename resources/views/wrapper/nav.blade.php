<nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand text-dark" href="{{route('welcome')}}">HOLZ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">







        
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('products')}}">CATALOG</a>
        </li>

        @auth


        

        @if(auth()->user()->is_admin)
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            FOR MANAGER
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style=".dropdown-item a:hover { color: green }">
          <a class="dropdown-item text-dark" href="#" >USERS</a>
          

        </li>
        @else

        @endif
        @endauth 




   







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
            @auth
            <div class="nav-item">                
              <a class="nav-link text-dark" href="{{ url('/home') }}">MY ACCOUNT</a>
            </div> 
            @else
            <li class="nav-item active">
            <div class="nav-item" >
                <a class="nav-link text-dark" href="{{ route('login') }}">LOGIN</a>
            </div>
            </li>

                @if (Route::has('register'))
                <li class="nav-item active">
                <div class="nav-item" >
                    <a class="nav-link text-dark" href="{{ route('register') }}">REGISTER</a>
                </div>
                </li>
                @endif


            @endauth
            @endif







        </li>

        <li class="nav-item">           
            <div class="nav-item" >               
                <a class="nav-link text-dark" href="{{ url('/home') }}">CART</a>
            </div>        
        </li>

        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ url('/home') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
              LOGOUT
          </a>

          <form id="logout-form" action="{{ url('/home') }}" method="POST" style="display: none;">
              @csrf
          </form>

        </li>
    </ul>
    </div>
  </nav>