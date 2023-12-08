@extends('layouts.visitorsApp',['title' => 'Event Details'])
@section('content')
<!-- Start Bottom Header -->
<div class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Events Details</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Events Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start project Area -->
<div class="events-single area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="events-inner">
                    <div class="events-image">
                        <img src="{{ config('app.url') }}/img/events/e5.jpg" alt="">
                        <div class="events-meta">
                            <span class="events-date-type">
                                20th
                            </span>
                            <span class="events-month-type">
                                Nov
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Column -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="events-details">
                    <span class="time-sidule">10AM - 02PM</span>
                    <h3>Web developer programe for online profession achivement</h3>
                    <p>The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the
                        16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less
                        corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy
                        text is also incomprehensible, but it imitates the rhythm of most European languages in
                        Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum
                        Ipsum is that the text does not attract attention to itself or distract the viewer's
                        attention from the layout.</p>
                    <div class="events-share">
                        <h5>Share :</h5>
                        <ul class="events-social">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Column -->
        </div>
    </div>
    <!-- End main content -->
</div>
<!-- End portfolio Area -->
<div class="events-area bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Related Events</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="events-all">
                <!-- Start single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-events">
                        <div class="events-image">
                            <a class="image-scale" href="#">
                                <img src="{{ config('app.url') }}/img/events/e1.jpg" alt="">
                            </a>
                            <div class="events-meta">
                                <span class="events-date-type">
                                    20th
                                </span>
                                <span class="events-month-type">
                                    Nov
                                </span>
                            </div>
                        </div>
                        <div class="events-content">
                            <span class="time-sidule">10AM - 02PM</span>
                            <div class="events-title">
                                <a href="#">
                                    <h4>Back-End developer saminer programe dinner</h4>
                                </a>
                            </div>
                            <div class="events-text">
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum,
                                    veniam. Esse est assumenda inventore.</p>
                                <a class="events-btn" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <!-- Start single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-events">
                        <div class="events-image">
                            <a class="image-scale" href="#">
                                <img src="{{ config('app.url') }}/img/events/e2.jpg" alt="">
                            </a>
                            <div class="events-meta">
                                <span class="events-date-type">
                                    16th
                                </span>
                                <span class="events-month-type">
                                    Nov
                                </span>
                            </div>
                        </div>
                        <div class="events-content">
                            <span class="time-sidule">10AM - 02PM</span>
                            <div class="events-title">
                                <a href="#">
                                    <h4>Web develoment spacial events new award</h4>
                                </a>
                            </div>
                            <div class="events-text">
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum,
                                    veniam. Esse est assumenda inventore.</p>
                                <a class="events-btn" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <!-- Start single blog -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-events">
                        <div class="events-image">
                            <a class="image-scale" href="#">
                                <img src="{{ config('app.url') }}/img/events/e3.jpg" alt="">
                            </a>
                            <div class="events-meta">
                                <span class="events-date-type">
                                    12th
                                </span>
                                <span class="events-month-type">
                                    Nov
                                </span>
                            </div>
                        </div>
                        <div class="events-content">
                            <span class="time-sidule">10AM - 02PM</span>
                            <div class="events-title">
                                <a href="#">
                                    <h4>Web design spacial events for all clients</h4>
                                </a>
                            </div>
                            <div class="events-text">
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum,
                                    veniam. Esse est assumenda inventore.</p>
                                <a class="events-btn" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <!-- Start single blog -->
                <div class="hidden-md hidden-lg col-sm-6 col-xs-12">
                    <div class="single-events">
                        <div class="events-image">
                            <a class="image-scale" href="#">
                                <img src="{{ config('app.url') }}/img/events/e4.jpg" alt="">
                            </a>
                            <div class="events-meta">
                                <span class="events-date-type">
                                    12th
                                </span>
                                <span class="events-month-type">
                                    Nov
                                </span>
                            </div>
                        </div>
                        <div class="events-content">
                            <span class="time-sidule">10AM - 02PM</span>
                            <div class="events-title">
                                <a href="#">
                                    <h4>Web design spacial events for all clients</h4>
                                </a>
                            </div>
                            <div class="events-text">
                                <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum,
                                    veniam. Esse est assumenda inventore.</p>
                                <a class="events-btn" href="#">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--End of Blog Area-->
@endsection

