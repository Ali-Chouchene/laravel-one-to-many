<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm vh-10">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">

            <img height='80px' width='80px' class="img-fluid rounded-circle" src="{{asset('storage/ali.jfif')}}" alt="">

            {{-- config('app.name', 'Laravel') --}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/') }}">
                        <h4>{{ __('Home') }}</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.projects.index') }}">
                        <h4>{{ __('Projects') }}</h4>
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <h4>{{ __('Login') }}</h4>
                    </a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <h4>{{ __('Register') }}</h4>
                    </a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <h4><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.home') }}">{{__('Dashboard')}}</a>
                            <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </h4>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>