<header>
    <nav class="p-3 bg-black">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div>
                        <ul class="navbar-nav mx-auto d-flex flex-row justify-content-between align-items-center">
                            <li class="nav-li">
                                {{-- {{Route::currentRouteName()}} --}}
                                <a class="nav-li mx-2 {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{route('admin.dashboard')}}">Home</a>
                            </li>
                            <li class="nav-li">
                                <a class="nav-li mx-2" href="{{route('movies.index')}}">Movies</a> 
                            </li>
                            <li class="nav-i display-4">
                                <div class="d-flex flex-column align-items-center">
                                    <h6 class="m-0">MOVIE</h6>
                                    <i class="fa-solid fa-film"></i>
                                    <h4>STUDIOS</h4>
                                </div>
                            </li>
                            <li class="nav-li">
                                <a class="nav-li mx-2" href="#">Actors</a>
                            </li>
                            <li class="nav-li">
                                <a class="nav-li mx-2" href="#">About Us</a>
                            </li>
                            <li class="nav-li">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
                                    <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </nav>
</header>