@include('user_layouts.topbar')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
    @include('user_layouts.navbar')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Super Discount Destination</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Destination</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Popular Discount Offers</h1>
            </div>
            @foreach($destinations as $destination)
            <div class="row g-5 my-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100" src="{{asset('uploads/destination/'.$destination->image)}}" alt="" style="object-fit: cover; height: 450px">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4"><span class="text-primary">{{$destination->name}}</span></h1>
                    <p class="mb-4">{{$destination->details}}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <h4 class="text-primary">Orginal Price:400.00$</h4>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="text-primary">{{$destination->day}}Day || {{$destination->person}}Person</h4>
                            </div>
                        </div> 
                    </div>
                    <div><h1 class="text-warning">30% OFF </h1> </div>
                    <a class="btn btn-primary py-1 px-2 mt-2 rounded" href="">Booking Now</a>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
    <!-- Destination Start -->
        

    @include('user_layouts.footer')