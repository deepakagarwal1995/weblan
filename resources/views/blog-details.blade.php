@extends('layouts.visitorsApp')
@section('content')
    <!-- Start Bottom Header -->
    <div class="page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="section-headline white-headline text-center">
                            <h3>Blog Details</h3>
                        </div>
                        <ul>
                            <li class="home-bread">Home</li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <!--Blog Area Start-->
    <div class="blog-area fix area-padding">
        <div class="container">
            <div class="row">
                <div class="blog-details">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <!-- single-blog start -->
                        <article class="blog-post-wrapper">
                            <div class="blog-banner">
                                <a href="#" class="blog-images">
                                    <img src="{{ config('app.url') }}/img/blog/b1.jpg" alt="">
                                </a>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Admin
                                        </span>
                                        <span class="date-type">
                                            <i class="fa fa-calendar"></i>
                                            24 april, 2019
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            07
                                        </span>
                                    </div>
                                    <h4>The universal acceptance has given a tremendous</h4>
                                    <p>The universal acceptance of Consultation has given a tremendous opportunity for
                                        merchants to do crossborder transactions instantly and at reduced
                                        cost.Consultations are slowly gaining immense recognition and are growing
                                        phenomenally with more and more people trading with this digital currency.</p>
                                    <blockquote>
                                        <p>Consultations are slowly gaining immense recognition and are growing
                                            phenomenally with more and more people trading with this digital currency.
                                            The universal acceptance of Consultation.</p>
                                    </blockquote>
                                    <p>The universal acceptance of Consultation has given a tremendous opportunity for
                                        merchants to do crossborder transactions instantly and at reduced
                                        cost.Consultations are slowly gaining immense recognition and are growing
                                        phenomenally with more..</p>
                                    <h5>With more and more people trading with this digital </h5>
                                    <p>The universal acceptance of Consultation has given a tremendous opportunity for
                                        merchants to do crossborder transactions instantly and at reduced
                                        cost.Consultations are slowly gaining immense recognition and are growing
                                        phenomenally with more..</p>
                                    <div class="img-blog">
                                        <img src="{{ config('app.url') }}/img/blog/b3.jpg" alt="">
                                    </div>
                                    <p>The universal acceptance of Consultation has given a tremendous opportunity for
                                        merchants to do crossborder transactions instantly and at reduced
                                        cost.Consultations are slowly gaining immense recognition and are growing
                                        phenomenally with more..</p>
                                    <div class="post-share">
                                        <h5>Share:</h5>
                                        <ul class="post-social">
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
                        </article>
                        <div class="clear"></div>
                        <div class="related-post">
                            <div class="comments-heading">
                                <h3>Related post</h3>
                            </div>
                            <div class="related-post-list">
                                <!-- start single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="{{ config('app.url') }}/img/blog/b1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <span class="date-type">
                                            27 Jan / 2018
                                        </span>
                                        <p><a href="#">We offer rental offices for all business man</a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                                <!-- start single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="{{ config('app.url') }}/img/blog/b2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <span class="date-type">
                                            20 June / 2018
                                        </span>
                                        <p><a href="#">Man can change business policy all time</a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="single-post-comments">
                            <div class="comments-area">
                                <div class="comments-heading">
                                    <h3>4 comments</h3>
                                </div>
                                <div class="comments-list">
                                    <ul>
                                        <li>
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img src="{{ config('app.url') }}/img/blog/avater2.png"
                                                        alt="post-author">
                                                </div>
                                                <div class="comments-content-wrap">
                                                    <span>
                                                        <b><a href="#">Alens</a></b>
                                                        Post author
                                                        <span class="post-time">Jan 6, 2018</span>
                                                        <a href="#">Reply</a>
                                                    </span>
                                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                        consectetur</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="threaded-comments">
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img src="{{ config('app.url') }}/img/blog/avater1.png"
                                                        alt="post-author">
                                                </div>
                                                <div class="comments-content-wrap">
                                                    <span>
                                                        <b><a href="#">admin</a></b>
                                                        Post author
                                                        <span class="post-time">Jan 7, 2018</span>
                                                        <a href="#">Reply</a>
                                                    </span>
                                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel
                                                        mauris. Aenean at justo dolor. Fusce ac sapien bibendum,
                                                        scelerisque libero nec</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img src="{{ config('app.url') }}/img/blog/avater2.png"
                                                        alt="post-author">
                                                </div>
                                                <div class="comments-content-wrap">
                                                    <span>
                                                        <b><a href="#">Andre</a></b>
                                                        Post author
                                                        <span class="post-time">Nov 11, 2017</span>
                                                        <a href="#">Reply</a>
                                                    </span>
                                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                        consectetur</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="threaded-comments">
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img src="{{ config('app.url') }}/img/blog/avater1.png"
                                                        alt="post-author">
                                                </div>
                                                <div class="comments-content-wrap">
                                                    <span>
                                                        <b><a href="#">admin</a></b>
                                                        Post author
                                                        <span class="post-time">Nov 12, 2017</span>
                                                        <a href="#">Reply</a>
                                                    </span>
                                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel
                                                        mauris. Aenean at justo dolor. Fusce ac sapien bibendum,
                                                        scelerisque libero nec</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply </h3>
                                <span class="email-notes">Your email address will not be published. Required fields are
                                    marked *</span>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p>First Name *</p>
                                            <input type="text" />
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p>Last Name *</p>
                                            <input type="text" />
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p>Email *</p>
                                            <input type="email" />
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                            <p>Massage *</p>
                                            <textarea id="message-box" cols="30" rows="10"></textarea>
                                            <input class="add-btn contact-btn" type="submit" value="Post Comment" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- single-blog end -->
                    </div>
                    <!-- Start Right Sidebar blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="left-head-blog right-side">
                            <div class="left-blog-page">
                                <!-- search option start -->
                                <form action="#">
                                    <div class="blog-search-option">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- search option end -->
                            </div>
                            <div class="left-blog-page">
                                <div class="left-blog blog-category">
                                    <h4>categories</h4>
                                    <ul>
                                        <li><a href="#">Offices</a><span>12</span></li>
                                        <li><a href="#">Metting</a><span>23</span></li>
                                        <li><a href="#">Events</a><span>13</span></li>
                                        <li><a href="#">Private</a><span>32</span></li>
                                        <li><a href="#">Coworking</a><span>17</span></li>
                                        <li><a href="#">Rental</a><span>24</span></li>
                                        <li><a href="#">Business</a><span>21</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="left-blog-page">
                                <!-- recent start -->
                                <div class="left-blog">
                                    <h4>recent post</h4>
                                    <div class="recent-post">
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="{{ config('app.url') }}/img/blog/b1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <span class="date-type">
                                                    26 Jan / 2019
                                                </span>
                                                <p><a href="#">We offer rental offices for all business man</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="{{ config('app.url') }}/img/blog/b2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <span class="date-type">
                                                    20 June / 2019
                                                </span>
                                                <p><a href="#">Sanafi is an firm and general group</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="{{ config('app.url') }}/img/blog/b3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <span class="date-type">
                                                    26 Feb / 2019
                                                </span>
                                                <p><a href="#">Business man always think positive</a></p>
                                            </div>
                                        </div>
                                        <!-- End single post -->
                                        <!-- start single post -->
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="{{ config('app.url') }}/img/blog/b4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <span class="date-type">
                                                    13 Nov / 2019
                                                </span>
                                                <p><a href="#">Man can change business policy all time</a></p>

                                            </div>
                                        </div>
                                        <!-- End single post -->
                                    </div>
                                </div>
                                <!-- recent end -->
                            </div>
                            <div class="left-blog-page">
                                <div class="left-tags blog-tags">
                                    <div class="popular-tag left-side-tags left-blog">
                                        <h4>popular tags</h4>
                                        <ul>
                                            <li><a href="#">Offices</a></li>
                                            <li><a href="#">Metting </a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Social</a></li>
                                            <li><a href="#">Private</a></li>
                                            <li><a href="#">Coworking</a></li>
                                            <li><a href="#">Rental</a></li>
                                            <li><a href="#">Search</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Right Sidebar -->
                </div>
            </div>
            <!-- End row -->
        </div>
    </div>
    <!--End of Blog Area-->
@extends('layouts.visitorsApp')
