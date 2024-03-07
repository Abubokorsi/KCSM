<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>KAZI C</h1>
                <!-- <img src="{{asset('frontend')}}/img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link @if(Request::segment(1)=='') active @endif">Home</a>
                    <a href="/about" class="nav-item nav-link @if(Request::segment(1)=='about') active @endif">About</a>
                    <a href="/service" class="nav-item nav-link @if(Request::segment(1)=='service') active @endif">Services</a>
                    <a href="/package" class="nav-item nav-link @if(Request::segment(1)=='package') active @endif">Packages</a>
                    <a href="/booking" class="nav-item nav-link @if(Request::segment(1)=='booking') active @endif">Booking</a>
                    <a href="/contact" class="nav-item nav-link @if(Request::segment(1)=='contact') active @endif">Contact</a>
                </div>
                <a href="{{route('register')}}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                <a href="{{route('login')}}" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
            </div>
        </nav>