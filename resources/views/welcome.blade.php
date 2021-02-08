@extends('layouts.template')


@section('stylesheet')
@stop('stylesheet')

@section('content')

 <!--  dark banner section here -->
 <section class="dark_banner_section dark_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_content_inner">
                        <a href="https://www.youtube.com/watch?v=-w4LA-P0lfk" class="video_popup play_animation"><img src="img/icon/play_icon.png" alt=""></a>
                        <div class="text_fadeup">
                            <h2 class="wow fadeInUp2" data-wow-delay=".3s">Design makes</h2>
                        </div>
                        <div class="text_fadeup">
                            <h2 class="wow fadeInUp2" data-wow-delay=".5s">anything much <span class="typed"></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  dark banner section end -->

    <!-- about part here -->
    <section class="about_us_section padding_top dark_version">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="about_section_img">
                        <div class="about_us_img wow fadeInDown" data-wow-delay=".5s">
                            <img src="img/about_us_img_1.png" alt="#" class="img-fluid"
                                data-parallax='{"x": 0, "y": -20}'>
                            <img src="img/about_us_img_1_shape.png" alt="#" class="img-fluid about_img_shape"
                                data-parallax='{"x": 0, "y": -50}'>
                        </div>
                        <div class="about_us_img wow fadeInUp" data-wow-delay=".5s">
                            <img src="img/about_us_img_2.png" alt="#" class="img-fluid"
                                data-parallax='{"x": 0, "y": 40}'>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about_section_content pl_45">
                        <h5 class="wow fadeInLeft gradient_color text-uppercase" data-wow-delay=".3s">About us</h5>
                        <h2 class="wow fadeInLeft" data-wow-delay=".4s">Best digital solution 
                            for your hopey</h2>
                        <p class="wow fadeInLeft" data-wow-delay=".5s">I transform thorny problems into elant solutions using visuals design. 
                            Use this pack illustrations for any kind of projects from websites and
                            Lorem ipsum dolor sit amet</p>
                        <a href="#" class="cu_btn animate_btn wow fadeInLeft" data-wow-delay=".6s">GET IN TOUCH</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end -->

    <!-- services part here -->
    <section class="services_section dark_version section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="single_service_section">
                        <a href="single_project_1.html"><img src="img/icon/service_icon_7.svg" alt="#" class="service_icon"></a>
                        <h4 class="horizontal_effect">
                            <a class="tittle_animation" data-hover=" UI/UX Design" href="single_project_1.html">UI/UX Design</a>
                        </h4>
                        <p>I transform thorny problems into elegant <br>
                            Lorem ipsum dolor amet</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay=".5s">
                    <div class="single_service_section">
                        <a href="single_project_1.html"><img src="img/icon/service_icon_8.svg" alt="#" class="service_icon"></a>
                        <h4 class="horizontal_effect">
                            <a class="tittle_animation" data-hover="Company Branding" href="single_project_1.html">Company Branding</a>
                        </h4>
                        <p>I transform thorny problems into elegant <br>
                            Lorem ipsum dolor amet</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay=".7s">
                    <div class="single_service_section">
                        <a href="single_project_1.html"><img src="img/icon/service_icon_9.svg" alt="#" class="service_icon"></a>
                        <h4 class="horizontal_effect">
                            <a class="tittle_animation" data-hover="Business Consultancy" href="single_project_1.html">Business Consultancy</a>
                        </h4>
                        <p>I transform thorny problems into elegant <br>
                            Lorem ipsum dolor amet</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services part end -->

    <!--portfolio part here -->
    <section class="portfolio_section dark_version">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="section_tittle style_2 fade_effect">
                        <div class="text_fadeup">
                            <h5 class="wow fadeInUp2 gradient_color" data-wow-delay=".3s"> Our Portfolio</h5>
                        </div>
                        <div class="text_fadeup">
                            <h2 class="wow fadeInUp2 text-white" data-wow-delay=".5s">Our recent Projects </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-12 wow fadeInDown" data-wow-delay=".3s">
                    <div class="single_portfolio_section full_width_portfolio">
                        <a href="single_project_1.html">
                            <img src="img/gallery/portfilio_1.png" alt="#" class="img-fluid">
                        </a>
                        <div class="single_portfolio_content">
                            <h4 class="text_fadeup d-block"> 
                                <a href="single_project_1.html" class="wow fadeInUp2 d-block" data-wow-delay=".4s">User Interface Design</a> 
                            </h4>
                            <p class="text_fadeup d-block"> 
                                <span class="wow fadeInUp2 d-block" data-wow-delay=".5s"> Media</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay=".4s">
                    <div class="single_portfolio_section">
                        <a href="single_project_1.html">
                            <img src="img/gallery/portfilio_2.png" alt="#" class="img-fluid">
                        </a>
                        <div class="single_portfolio_content">
                            <h4 class="text_fadeup d-block"> 
                                <a href="single_project_1.html" class="wow fadeInUp2 d-block" data-wow-delay=".5s"> Photography</a> 
                            </h4>
                            <p class="text_fadeup d-block"> 
                                <span class="wow fadeInUp2 d-block" data-wow-delay=".6s"> Photography</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_portfolio_section">
                        <a href="single_project_1.html">
                            <img src="img/gallery/portfilio_3.png" alt="#" class="img-fluid">
                        </a>
                        <div class="single_portfolio_content">
                            <h4 class="text_fadeup d-block"> 
                                <a href="single_project_1.html" class="wow fadeInUp2 d-block" data-wow-delay=".6s">Explore space</a> 
                            </h4>
                            <p class="text_fadeup d-block"> 
                                <span class="wow fadeInUp2 d-block" data-wow-delay=".7s"> Smart</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay=".8s">
                    <div class="single_portfolio_section">
                        <a href="single_project_1.html">
                            <img src="img/gallery/portfilio_4.png" alt="#" class="img-fluid">
                        </a>
                        <div class="single_portfolio_content">
                            <h4 class="text_fadeup d-block"> 
                                <a href="single_project_1.html" class="wow fadeInUp2 d-block" data-wow-delay=".9s">Inspiring Projects</a> 
                            </h4>
                            <p class="text_fadeup d-block"> 
                                <span class="wow fadeInUp2 d-block" data-wow-delay="1s">Media</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                    <div class="single_portfolio_section">
                        <a href="single_project_1.html">
                            <img src="img/gallery/portfilio_5.png" alt="#" class="img-fluid">
                        </a>
                        <div class="single_portfolio_content">
                            <h4 class="text_fadeup d-block"> 
                                <a href="single_project_1.html" class="wow fadeInUp2 d-block" data-wow-delay="1s">Social Banner</a> 
                            </h4>
                            <p class="text_fadeup d-block"> 
                                <span class="wow fadeInUp2 d-block" data-wow-delay="1s">Media</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio part end -->

    <!-- countdown section part here -->
    <section class="countdown_section section_padding dark_version">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="countdown_section_content">
                        <div class="single_countdown">
                            <span class="counter gradient_color">800</span>
                            <p>international clients</p>
                        </div>
                        <div class="single_countdown">
                            <span class="counter gradient_color">2500</span>
                            <p>Projects Completed</p>
                        </div>
                        <div class="single_countdown">
                            <span class="counter gradient_color">210</span>
                            <p>Expert Employees</p>
                        </div>
                        <div class="single_countdown">
                            <span class="counter gradient_color">85</span>
                            <p>Countries Served</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="countdown_img"  data-parallax='{"x": 0, "y": 50, "rotateZ":0}'>
            <img src="img/icon/testimonial_icon_3.png" alt="#" class="img-fluid">
        </div>
    </section>
    <!-- countdown section part end -->

    <!--  service section here -->
    <section class="service_section dark_version">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="section_tittle text-left fade_effect">
                        <div class="text_fadeup">
                            <h5 class="wow fadeInUp2 gradient_color" data-wow-delay=".3s">Our Services</h5>
                        </div>
                        <div class="text_fadeup">
                            <h2 class="wow fadeInUp2 text-white" data-wow-delay=".5s">Services we provide</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section_tittle_content pl_45">
                        <p>I transform thorny problems into elant solutions using visuals design. 
                            Use this pack illustrations for any kind of projects from websites and
                            Lorem ipsum dolor sit amet Use this pack illustrations for any kind of 
                            projects from websites and</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="services_content_iner">
                        <div class="single_services_section wow fadeInDown"
                        data-wow-delay=".3s">
                            <a href="single_project_1.html" class="services_section_bg bg_4"></a>
                            <div class="single_section_content">
                                <h5>Digital Marketing</h5>
                                <h3><a href="single_project_1.html"> Boost your online Store
                                    Presence</a></h3>
                            </div>
                        </div>
                        <div class="single_services_section wow fadeInDown"
                        data-wow-delay=".5s">
                            <a href="single_project_1.html" class="services_section_bg bg_5"></a>
                            <div class="single_section_content">
                                <h5>Business Consultancy</h5>
                                <h3><a href="single_project_1.html"> I transform your thorny problems</a></h3>
                            </div>
                        </div>
                        <div class="single_services_section wow fadeInDown"
                        data-wow-delay=".7s">
                            <a href="single_project_1.html" class="services_section_bg bg_6"></a>
                            <div class="single_section_content">
                                <h5>UX Research & UI Design</h5>
                                <h3><a href="single_project_1.html"> Regulatory oneven an enterprises such</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  service section end -->

    <!-- testimonial part here -->
    <section class="testimonial_section dark_version section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial_section_content testimonial_slider_1 owl-carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-sm-10">
                                <div class="single_testimonial_slider">
                                    <img src="img/client_1.png" alt="#">
                                    <p>“If you need any help or assistance we'd be happy to help.
                                        Just reply to this email. Trusted by Agency proud to work
                                        many well known brands”</p>
                                    <h4>John Gregory<span>UI/UX Design</span> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-sm-10">
                                <div class="single_testimonial_slider">
                                    <img src="img/client_1.png" alt="#">
                                    <p>“If you need any help or assistance we'd be happy to help.
                                        Just reply to this email. Trusted by Agency proud to work
                                        many well known brands”</p>
                                    <h4>John Gregory<span>UI/UX Design</span> </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="img/icon/testimonial_icon_2.png" alt="#" class="testimonial_icon_1 wow fadeInLeft"
            data-wow-delay=".3s">
    </section>
    <!-- testimonial part end --> 
    
    <!--  service section here -->
    <section class="blog_part dark_version">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section_tittle fade_effect">
                    <div class="text_fadeup">
                        <h5 class="wow fadeInUp2 gradient_color" data-wow-delay=".3s">Our Media</h5>
                    </div>
                    <div class="text_fadeup">
                        <h2 class="wow fadeInUp2 text-white" data-wow-delay=".5s">Latest media info</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_blog_post mb-lg-0">
                        <a href="blog_details.html"><img src="img/blog_post/blog_post_1.png" alt="#" class="img-fluid"></a>
                        <h3>25 <span>MAR</span> </h3>
                        <ul>
                            <li> <a href="#"> <i class="ti-user"></i> By Justin Trada</a></li>
                            <li> <a href="#"> <i class="ti-user"></i> 03 Comments</a></li>
                        </ul>
                        <h4> <a href="blog_details.html">Pay your bill to Phone to Pay Payments Bank in the world</a>  </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_blog_post mb-lg-0">
                        <a href="blog_details.html"><img src="img/blog_post/blog_post_2.png" alt="#" class="img-fluid"></a>
                        <h3>25 <span>MAR</span> </h3>
                        <ul>
                            <li> <a href="#"> <i class="ti-user"></i> By Justin Trada</a></li>
                            <li> <a href="#"> <i class="ti-user"></i> 03 Comments</a></li>
                        </ul>
                        <h4> <a href="blog_details.html">The new camera king is coming will rock the town hall!</a>  </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInDown" data-wow-delay=".5s">
                    <div class="single_blog_post mb-lg-0">
                        <a href="blog_details.html"><img src="img/blog_post/blog_post_3.png" alt="#" class="img-fluid"></a>
                        <h3>25 <span>MAR</span> </h3>
                        <ul>
                            <li> <a href="#"> <i class="ti-user"></i> By Justin Trada</a></li>
                            <li> <a href="#"> <i class="ti-user"></i> 03 Comments</a></li>
                        </ul>
                        <h4> <a href="blog_details.html">Doloremque velit sapien labore eius lopren itna</a>  </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  service section end -->

    <!-- client list section part here -->
    <section class="client_list_section client_lis_grid dark_version">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div class="section_tittle wrapper">
                        <h2 class="wow fadeInDown text-white" data-wow-delay=".5s">Trusted
                            by Agency is proud to work with <br>
                            many well-known brands</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center wow fadeInDown" data-wow-delay=".7s">
                <div class="col-lg-12">
                    <div class="client_logo logo_carousel owl-carousel">
                        <div class="single_client_logo">
                            <img src="img/white_logo/client_logo_6.png" srcset="img/white_logo/client_logo_6_2x.png 2x" alt="#">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/white_logo/client_logo_7.png" srcset="img/white_logo/client_logo_7_2x.png 2x" alt="#">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/white_logo/client_logo_8.png" srcset="img/white_logo/client_logo_8_2x.png 2x" alt="#">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/white_logo/client_logo_9.png" srcset="img/white_logo/client_logo_9_2x.png 2x" alt="#">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/white_logo/client_logo_10.png" srcset="img/white_logo/client_logo_10_2x.png 2x" alt="#">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/white_logo/client_logo_1.png" srcset="img/white_logo/client_logo_1_2x.png 2x" alt="#">
                        </div>
                        <div class="single_client_logo">
                            <img src="img/white_logo/client_logo_2.png" srcset="img/white_logo/client_logo_2_2x.png 2x" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client list section part end -->

    <!-- cta part part -->
    <section class="cta_part dark_version">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="cta_part_content">
                        <h2>We are availabe for Freelance work</h2>
                        <a href="#" class="cu_btn white_bg">Request a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part part end -->

@endsection

@section('scripts')

@stop('scripts')