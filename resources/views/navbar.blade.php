
 
      <nav class="navbar navbar-expand-lg bg-body-tertiary rounded " aria-label="Thirteenth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="{{ route('Acceuil') }}">{{ config('app.name') }}</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
              <li class="nav-item">
                <a class="nav-link active"  href="{{ route('Acceuil') }}">{{ config('app.name') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if (Request::route()->getName() == 'app_home' ) 
                  active
                @endif" aria-current="page" href="{{ route('Acceuil') }}">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if (Request::route()->getName() == 'app_' ) 
                  active
                  @endif" aria-current="page" href="{{ route('About') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if (Request::route()->getName() == 'app_contact' ) 
                  active
                  @endif " aria-current="page" href="{{ route('Contact') }}">Contact</a>
              </li>
              
            </ul>
               
          </div>

          @guest()
          <div class="d-lg-flex col-lg-2 justify-content-lg-end">
            <div class="dropdown " >
              <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                <i class="fas fa-user"></i> Profil
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route("login") }}"> <i class="fa-solid fa-arrow-right-to-bracket fa-beat"></i>  Login </a></li>
                <li><a class="dropdown-item" href="{{ route('register') }}"> <i class="fa-solid fa-user-plus fa-beat"></i>  Register</a></li>
                
              </ul>
            </div>
          </div>
          @endguest
          
          @auth
            <div class="d-lg-flex col-lg-2 justify-content-lg-end">
              <div class="dropdown " >
                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                  {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('ok') }}"> <i class="fa-solid fa-arrow-right-to-bracket fa-beat"></i> My account </a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}"> <i class="fa-solid fa-user-plus fa-beat"></i> Logout</a></li>
                  
                </ul>
              </div>
            </div>
          @endauth

        </div>
      </nav>
