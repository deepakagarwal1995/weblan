@extends('layouts.visitorsApp')
@section('content')
<!-- Start Bottom Header -->
<div class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Contact us</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- Start contact Area -->
<div class="contact-area area-padding">
    <div class="container">
        <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="office-city">
                    <h4>Head Office</h4>
                    <div class="contact-icon">
                        <div class="single-icon">
                            <i class="fa fa-phone"></i>
                            <p>
                                Call : +0091-654-876<br>
                                <span>Monday-Friday (10am-18pm)</span>
                            </p>
                        </div>
                    </div>
                    <div class="contact-icon">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email : airl45@gmail.com<br>
                                <span>Web: www.salebiz4.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="contact-icon">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Location : Manhattan City<br>
                                <span>12 house/5 Road</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End contact icon -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <div class="row">
                        <form id="contactForm" method="POST"
                            action="https://rockstheme.com/rocks/sanafi-live/contact.php" class="contact-form">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" class="form-control" placeholder="Name" required
                                    data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="email form-control" id="email" placeholder="Email"
                                    required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="msg_subject" class="form-control" placeholder="Subject"
                                    required data-error="Please enter your message subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea id="message" rows="7" placeholder="Massage" class="form-control" required
                                    data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" id="submit" class="add-btn contact-btn">Send
                                    Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End contact Form -->
        </div>
        <div class="row contact-page">
            <!-- Start contact icon column -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Start Map -->
                <div class="map-area">
                    <div id="googleMap" style="width:100%;height:350px;"></div>
                </div>
                <!-- End Map -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!-- End Contact Area -->
@endsection
