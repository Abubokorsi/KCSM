@include('user_layouts.topbar')
<!-- Spinner Start -->
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
    @include('user_layouts.navbar')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Testimonial</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach($clients as $client)
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{asset('uploads/client/'.$client->image)}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">{{$client->name}}</h5>
                    <p>{{$client->address}}</p>
                    <p class="mb-0">{{$client->details}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    @include('user_layouts.footer')