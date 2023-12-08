@extends('layouts.visitorsApp',['title' => 'Home'])
<!-- Start Slider Area -->
@section('content')
<div class="intro-area">
    <div class="main-overly"></div>
    <div class="intro-carousel">
        <div class="intro-content">
            <div class="slider-images">
                <img src="{{ config('app.url') }}/img/slider/h1.jpg" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- layer 1 -->
                                    <div class="layer-1">
                                        <h1 class="title2">Find your <span class="color"> dream office</span> in
                                            prime location</h1>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2 ">
                                        <p>A consulting or consultancy firm is a business of one or more experts
                                            that provides professional advice.</p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-3">
                                        <a href="#" class="ready-btn left-btn">Book a Tour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-content">
            <div class="slider-images">
                <img src="{{ config('app.url') }}/img/slider/h2.jpg" alt="">
            </div>
            <div class="slider-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- layer 1 -->
                                    <div class="layer-1">
                                        <h1 class="title2">The sanafi <span class="color">meeting room</span> is
                                            a perfect space</h1>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2">
                                        <p>A consulting or consultancy firm is a business of one or more experts
                                            that provides professional advice.</p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-3">
                                        <a href="#" class="ready-btn left-btn">Book a Tour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->
<!-- Start About Area -->
<div class="about-area bg-color fix area-padding-2">
    <div class="container">
        <div class="row">
            <div class="support-all text-center">
                <!-- Start services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="support-services">
                        <a class="support-images" href="#"><img src="{{ config('app.url') }}/img/icon/ab1.png"
                                alt=""></a>
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
                        <a class="support-images" href="#"><img src="{{ config('app.url') }}/img/icon/ab2.png"
                                alt=""></a>
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
                        <a class="support-images" href="#"><img src="{{ config('app.url') }}/img/icon/ab3.png"
                                alt=""></a>
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
<!-- Projects area start -->
<div class="work-space-area area-padding">
    <div class="container">
        <div class="row">
            <!-- single-well Start-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-system left-system">
                    <div class="top-content hidden-lg hidden-md">
                        <div class="system-images">
                            <img src="{{ config('app.url') }}/img/service/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="main-system">
                        <div class="system-content">
                            <a class="main-icon-images" href="#"><img
                                    src="{{ config('app.url') }}/img/icon/ab4.png" alt=""></a>
                            <h3>Private office</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace
                                that many DTP programmes can generate dummy text using the starting sequence "Lorem
                                ipsum". Fortunately</p>
                            <a class="system-btn" href="#">Book a Tour</a>
                        </div>
                    </div>
                    <div class="top-content hidden-sm hidden-xs">
                        <div class="system-images">
                            <img src="{{ config('app.url') }}/img/service/1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-system right-system">
                    <div class="top-content">
                        <div class="system-images">
                            <img src="{{ config('app.url') }}/img/service/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="main-system">
                        <div class="system-content">
                            <a class="main-icon-images" href="#"><img
                                    src="{{ config('app.url') }}/img/icon/ab1.png" alt=""></a>
                            <h3>Coworking desks</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace
                                that many DTP programmes can generate dummy text using the starting sequence "Lorem
                                ipsum". Fortunately</p>
                            <a class="system-btn" href="#">Book a Tour</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-system left-system">
                    <div class="top-content hidden-lg hidden-md">
                        <div class="system-images">
                            <img src="{{ config('app.url') }}/img/service/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="main-system">
                        <div class="system-content">
                            <a class="main-icon-images" href="#"><img
                                    src="{{ config('app.url') }}/img/icon/ab2.png" alt=""></a>
                            <h3>Metting space</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace
                                that many DTP programmes can generate dummy text using the starting sequence "Lorem
                                ipsum". Fortunately</p>
                            <a class="system-btn" href="#">Book a Tour</a>
                        </div>
                    </div>
                    <div class="top-content hidden-sm hidden-xs">
                        <div class="system-images">
                            <img src="{{ config('app.url') }}/img/service/3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-system right-system last-item">
                    <div class="top-content">
                        <div class="system-images">
                            <img src="{{ config('app.url') }}/img/service/4.jpg" alt="">
                        </div>
                    </div>
                    <div class="main-system">
                        <div class="system-content">
                            <a class="main-icon-images" href="#"><img
                                    src="{{ config('app.url') }}/img/icon/ab3.png" alt=""></a>
                            <h3>Events space</h3>
                            <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace
                                that many DTP programmes can generate dummy text using the starting sequence "Lorem
                                ipsum". Fortunately</p>
                            <a class="system-btn" href="#">Book a Tour</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
        </div>
    </div>
</div>
<!-- Project area End -->
<!-- Start Subscribe area -->
<div class="facility-area bg-color area-padding">
    <div class="container">
        <!-- Start counter Area -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our Facility</h3>
                    <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="we-services">
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s1-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/1.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>Superfast Internet</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s2-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/2.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>Modern kitchen</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s4-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/3.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>Car Parking</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s3-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/4.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>Meeting Rooms</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s5-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/5.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>Breakout Spaces</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s5-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/6.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>Digital Community</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s5-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/7.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>Tea & Coffee</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <!-- single-well end-->
                    <div class="digital-services">
                        <div class="digital-wel s5-item">
                            <div class="digital-img">
                                <a class="digital-icon" href="#"><img
                                        src="{{ config('app.url') }}/img/icon/8.png" alt=""></a>
                            </div>
                            <div class="digital-content">
                                <h4>High Security</h4>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe area -->
<!-- Start Team Banner area -->
<div class="banner-area fix area-padding" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="banner-content">
                    <div class="banner-text text-center">
                        <h2> We are expert teams for all clients offices worldwide</h2>
                        <a class="hire-btn" href="#">Book a Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Banner area -->
<!-- start pricing table area -->
<div class="pricing-area bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Rent Prices</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pricing-content">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list">
                        <span class="base">10% Discount</span>
                        <div class="top-price-inner">
                            <h4>Guest</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>700</span><span class="users">Per
                                    Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check cross">full access</li>
                            <li class="check">live preview</li>
                            <li class="check cross">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list">
                        <span class="base">20% Discount</span>
                        <div class="top-price-inner">
                            <h4>Non-members</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>500</span><span class="users">Per
                                    Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check cross">full access</li>
                            <li class="check">live preview</li>
                            <li class="check">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list">
                        <span class="base">30% Discount</span>
                        <div class="top-price-inner">
                            <h4>Members</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>300</span><span class="users">Per
                                    Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check">full access</li>
                            <li class="check">live preview</li>
                            <li class="check">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End pricing table area -->
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
<!-- End testimonials end -->
@endsection
