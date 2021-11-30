<!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
     
      <!-- Sidebar toggle button-->
      <a>
      <img src="{{URL::asset('/img/mh.png')}}"  class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </a>

<!-- Right Side Of Navbar Authentication Links esta es la copia de auytenticacion de app 
<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
                                </div>
                            </li>
                        @endguest
        </ul>
</div>


-->



      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less
        form que  se realizo en clase con el profe para cerrar sesion
        
        -->

        
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">

                <form action="{{ route('logout') }}" method="post">
@csrf
<a class="nav-link"> 
<button onclick="event.preventDefault(); this.closest('form').submit();" id="form" 
class="dropdown-item"> cerrar sesion</button>
              </form></span>
 </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
     
    </nav>

   