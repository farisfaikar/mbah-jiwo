<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="d-flex align-items-center">
            <div class="logo">
                <a href="{{ route('landing-page') }}"><img src="{{ asset('assets/img/logo-mbah-jiwo.png') }}" alt="" class="img-fluid"></a>
            </div>
            <div class="ms-4 mt-2">
                <h2><b>Mbah Jiwo</b></h2>
            </div>
        </div>
    
        {{-- Navbar --}}
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('landing-page') }}">Home</a></li>
                @auth
                    @if (Auth::user()->role == 'client')
                        <li><a class="nav-link scrollto" href="{{ route('inventory') }}">Inventory</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('finance') }}">Finance</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('client') }}">Client</a></li>
                    @elseif (Auth::user()->role == 'admin')
                        <li><a class="nav-link scrollto" href="{{ route('user') }}">User</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('admin') }}">Admin</a></li>
                    @endif
                @endauth
                <li><a class="nav-link scrollto" href="{{ route('contact-us') }}">Contact Us</a></li>
                @auth
                <li class="dropdown">
                    <a class="nav-link scrollto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{ auth()->user()->name }} <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
                @guest
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    
    </div>
    
</header>
