@include('user_layouts.topbar')

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-success px-4 px-lg-5 py-3 py-lg-0">
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
                        
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu m-0">
                                <form action="{{route('logout')}}" method="POST" id="logout">
                                    @csrf
                                </form>
                                <a type="submit" class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout').submit();
                                ">Logout</a>
                                <a href="/booking" class="dropdown-item">Booking</a>
                            </div>
                        </div>
                </div>
            </nav>

        <!-- <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Not Found</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">404</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- 404 Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We're sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- 404 End -->

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{Auth::user()->name}}</span><span class="text-black-50">{{Auth::user()->email}}</span><span>Rule : User</span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                   
                    <h4 class="text-right my-5">Welcome to User Dashboard</h4>
                    <a href="{{route('userprofile.create')}}" class="btn btn-info">Add Profile</a>
                    
                </div>
                @foreach($user_profiles as $key=>$user_profile)
                @if(2>$key)
                <h6 class="my-3">User Name :----------- {{$user_profile->name}}</h6>
                <h6 class="my-3">User Phone :---------- {{$user_profile->phone}}</h6> 
                <h6 class="my-3">User Address :-------- {{$user_profile->address}}</h6>
                <h6 class="my-3">User Area :-------- {{$user_profile->area}}</h6>
                <h6 class="my-3">User Education : ---------{{$user_profile->education}}</h6>
                <h6 class="my-3">User Country :--------- {{$user_profile->country}}</h6>
                <h6 class="my-3">User Region :-------- {{$user_profile->region}}</h6>
                <h6 class="my-3">User Backup Email :-------- {{$user_profile->backup_email}}</h6>
                <h6 class="my-3">User Birth Date :----------- {{$user_profile->Birth_date}}</h6>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
    @include('user_layouts.footer')