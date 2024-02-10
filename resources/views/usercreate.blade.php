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
    </div>


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
                    <h4 class="text-right my-5">Profile Settings</h4>
                    <a href="{{route('dashboard')}}" class="btn btn-danger">back</a>
                </div>
                <form action="{{route('userprofile.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-2">
                    <div class="col-md-12">
                        <label class="labels">Full Name</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="phone" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name="address"  value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" name="area"  value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" name="education"  value=""></div>
                    <div class="col-md-12"><label class="labels">Backup_email</label><input type="email" class="form-control" name="Backup_email"  value=""></div>
                    <div class="col-md-12"><label class="labels">Birth_date</label><input type="text" class="form-control" name="Birth_date"  value=""></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="labels">Country</label>
                        <input type="text" class="form-control" name="country" value="">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">State/Region</label>
                        <input type="text" class="form-control" name="region" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="sliderImage">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input form-control" id="sliderImage">
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit" name="submit">Save Profile</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
    @include('user_layouts.footer')