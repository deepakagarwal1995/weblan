@extends('layouts.visitorsApp')
@section('content')
    <!-- Start Bottom Header -->
    <div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>About us</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!-- Start About Area -->
    <div class="about-area bg-color fix area-padding-2">
        <div class="container">
            <div class="row">
                <div class="support-all text-center">
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><img src="{{ config('app.url') }}/img/icon/ab1.png" alt=""></a>
                            <div class="support-content">
                                <h4>Coworking</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                                <a class="ab-btn" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><img src="{{ config('app.url') }}/img/icon/ab2.png" alt=""></a>
                            <div class="support-content">
                                <h4>Metting room</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                                <a class="ab-btn" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><img src="{{ config('app.url') }}/img/icon/ab3.png" alt=""></a>
                            <div class="support-content">
                                <h4>Events Space</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies
                                    to define their new business objectives and then create</p>
                                <a class="ab-btn" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->
    <!-- Start Service area -->
    <div class="overview-area area-padding">
        <div class="container">
            <div class="row">
                <!-- Start Column -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="overview-wrapper">
                        <h3> Sanafi agency worldwide serving 50k+ clients web related services </h3>
                        <p>
                            Our independent consultants, free from the internal demands of traditional firms, can focus
                            on what really matters: delivering lasting impact. Our consultants opt in to the projects
                            they genuinely want to work on, committing wholeheartedly to delivering transformational
                            change for the client, while being part of a strong team of like-minded professionals.
                        </p>
                        <div class="total-count">
                            <div class="single-count left-one">
                                <span class="count-num">800+</span>
                                <h4>Global Clients</h4>
                            </div>
                            <div class="single-count right-one">
                                <span class="count-num">30+</span>
                                <h4>Global Location</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Column -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="overview-image">
                        <img src="{{ config('app.url') }}/img/about/vd.jpg" alt="overview">
                        <div class="video-content">
                            <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Column -->
            </div>
        </div>
    </div>
    <!-- End Service area -->
    <!-- Start project Area -->
    <div class="location-area bg-color area-padding-2 fix">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Choose your location</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-location">
                        <div class="location-image">
                            <img src="{{ config('app.url') }}/img/icon/b1.png" alt="">
                        </div>
                        <div class="location-address">
                            <h4>State Building</h4>
                            <span class="trac">24 avenue, Road no.12</span>
                            <span class="trac-con">New York , USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-location">
                        <div class="location-image">
                            <img src="{{ config('app.url') }}/img/icon/b2.png" alt="">
                        </div>
                        <div class="location-address">
                            <h4>marina City</h4>
                            <span class="trac">12 avenue, Road no.10</span>
                            <span class="trac-con">Dubai , UAE</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-location">
                        <div class="location-image">
                            <img src="{{ config('app.url') }}/img/icon/b3.png" alt="">
                        </div>
                        <div class="location-address">
                            <h4>Loyal Tower</h4>
                            <span class="trac">14 avenue, Road no.14</span>
                            <span class="trac-con">Sydney, Australlia</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-location">
                        <div class="location-image">
                            <img src="{{ config('app.url') }}/img/icon/b4.png" alt="">
                        </div>
                        <div class="location-address">
                            <h4>State Building</h4>
                            <span class="trac">24 avenue, Road no.12</span>
                            <span class="trac-con">New York , USA</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-location">
                        <div class="location-image">
                            <img src="{{ config('app.url') }}/img/icon/b5.png" alt="">
                        </div>
                        <div class="location-address">
                            <h4>Heron Tower</h4>
                            <span class="trac">12 avenue, Road no.10</span>
                            <span class="trac-con">London , UK</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-location">
                        <div class="location-image">
                            <img src="{{ config('app.url') }}/img/icon/b6.png" alt="">
                        </div>
                        <div class="location-address">
                            <h4>Almas Tower</h4>
                            <span class="trac">14 avenue, Road no.14</span>
                            <span class="trac-con">Dubai, UAE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End project Area -->
    <!-- Start Banner Area -->
    <div class="brand-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline white-headline text-center">
                        <h3>Our clients worldwide brands</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="brand-content text-center">
                        <div class="brand-items">
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ config('app.url') }}/img/brand/1.png" alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ config('app.url') }}/img/brand/2.png" alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ config('app.url') }}/img/brand/3.png" alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ config('app.url') }}/img/brand/4.png" alt=""></a>
                            </div>
                            <div class="single-brand-item">
                                <a href="#"><img src="{{ config('app.url') }}/img/brand/5.png" alt=""></a>
                            </div>
                        </div>
                        <div class="brand-contact">
                            <a class="brand-btn" href="#">Book a Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Start testimonials Area -->
    <div class="reviews-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Customer say some words</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="Reviews-content">
                        <!-- start testimonial carousel -->
                        <div class="testimonial-carousel item-indicator">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Edward</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Charlotte</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Daniel</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="testi-img ">
                                            <div class="guest-details">
                                                <h4>Graham</h4>
                                                <span class="guest-rev">Genarel customer</span>
                                            </div>
                                        </div>
                                        <div class="client-rating">
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                            <a href="#"><i class="ti-star"></i></a>
                                        </div>
                                        <p>When replacing a multi-lined selection of text, the generated dummy text
                                            maintains the amount of lines. When replacing a selection. help agencies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
