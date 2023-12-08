@extends('layouts.visitorsApp',['title' => 'Gallery'])
@section('content')
    <!-- Start Bottom Header -->
    <div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>Gallery</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!-- Start Gallery Area -->
    <div class="gallery-area  area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Events Gallery</h3>
                        <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project-content">
                    <!-- single-awesome-project start -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/gallery/p1.jpg">
                                        <img src="{{ config('app.url') }}/img/gallery/p1.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/gallery/p2.jpg">
                                        <img src="{{ config('app.url') }}/img/gallery/p2.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/gallery/p3.jpg">
                                        <img src="{{ config('app.url') }}/img/gallery/p3.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/gallery/p4.jpg">
                                        <img src="{{ config('app.url') }}/img/gallery/p4.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/gallery/p5.jpg">
                                        <img src="{{ config('app.url') }}/img/gallery/p5.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-single">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/gallery/p6.jpg">
                                        <img src="{{ config('app.url') }}/img/gallery/p6.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-awesome-project end -->
                </div>
            </div>
        </div>
        <!-- End main content -->
    </div>
    <!-- End portfolio Area -->
    @endsection
