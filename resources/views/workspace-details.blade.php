@extends('layouts.visitorsApp',['title' => 'Workspace Details'])
@section('content')
<!-- Start Bottom Header -->
<div class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Workspace Details</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Workspace Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- End services Area -->
<div class="single-services-page area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="page-head-left">
                    <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="left-menu">
                            <ul>
                                <li class="active"><a href="#">Private Offices</a></li>
                                <li><a href="#">Coworking Offices</a></li>
                                <li><a href="#">Metting Room</a></li>
                                <li><a href="#">Evants space</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="download-btn">
                            <div class="about-btn">
                                <a href="#" class="down-btn">Download Brochure <i
                                        class="fa fa-file-pdf-o"></i></a>
                                <a href="#" class="down-btn apli">Download Aplication <i
                                        class="fa fa-file-word-o"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end single area -->
                    <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="service-history">
                            <div class="service-new">
                                <h4>Are you ready for your new office ?</h4>
                                <a class="side-btn" href="#">Contact us</a>
                            </div>
                        </div>
                    </div>
                    <!-- end single area -->
                    <!-- strat single area -->
                    <div class="single-page-head">
                        <div class="service-banner-top">
                            <div class="service-banner">
                                <img src="{{ config('app.url') }}/img/service/bs1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- end single area -->
                </div>
            </div>
            <!-- End left sidebar -->
            <!-- Start service page -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-md-16 col-sm-6 col-xs-12">
                        <div class="single-page">
                            <div class="page-img">
                                <img src="{{ config('app.url') }}/img/service/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-page">
                            <div class="page-img">
                                <img src="{{ config('app.url') }}/img/service/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- strat single page -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-page top-heading">
                            <a href="#">
                                <h3>Private Offices</h3>
                            </a>
                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains
                                the amount of lines. When replacing a selection of text within a single line, the
                                amount of words is roughly being maintained.When the replaced text selection
                                consists fully of lower-cased or capital letters or begins with a capital letter,
                                that previous casing is maintained. Furthermore, the presence or absence of a
                                trailing punctuation mark of a replaced text selection is being maintained.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-page">
                            <div class="page-img elec-page">
                                <img src="{{ config('app.url') }}/img/service/3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-page">
                            <a href="#">
                                <h4>Office interior design</h4>
                            </a>
                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains
                                the amount of lines.</p>
                            <ul class="marker-list">
                                <li>Words is roughly being maintained</li>
                                <li>Letters or begins with a capital letter</li>
                                <li>Previous casing is maintained</li>
                                <li>Maintains the amount of lines</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End single page -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-page">
                            <a href="#">
                                <h4>Office furniture decoration</h4>
                            </a>
                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains
                                the amount of lines.</p>
                            <ul class="marker-list">
                                <li>Words is roughly being maintained</li>
                                <li>Letters or begins with a capital letter</li>
                                <li>Previous casing is maintained</li>
                                <li>Maintains the amount of lines</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-page">
                            <div class="page-img">
                                <img src="{{ config('app.url') }}/img/service/4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Row -->
            </div>
        </div>
    </div>
</div>
@endsection
