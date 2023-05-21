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
                <li><a class="nav-link scrollto" href="{{ route('index-inventory') }}">Inventory</a></li>
                <li><a class="nav-link scrollto" href="{{ route('index-payment') }}">Payment</a></li>
                <li><a class="nav-link scrollto" href="{{ route('contact-us') }}">Contact Us</a></li>
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    
    </div>
    
</header>
