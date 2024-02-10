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
                    <a href="/" class="nav-item nav-link ">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/service" class="nav-item nav-link">Services</a>
                    <a href="/package" class="nav-item nav-link">Packages</a>
                    <a href="/booking" class="nav-item nav-link">Booking</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/destination" class="dropdown-item">Destination</a>
                            <a href="/booking" class="dropdown-item">Booking</a>
                            <a href="/team" class="dropdown-item">Travel Guides</a>
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="{{route('register')}}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                <a href="{{route('login')}}" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
            </div>
        </nav>