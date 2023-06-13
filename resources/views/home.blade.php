@extends('layouts.main')

@section('container')
    <div class="banner-section-outer" id="wisata">
        <header>
            <!-- <div class="main_header">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand" href="./index.html"><figure class="mb-0"><img src="images/instant_logo.png" alt="" class="img-fluid"></figure></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="./index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./services.html">Services</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Pages </a>
                                    <div class="dropdown-menu drop-down-content">
                                        <ul class="list-unstyled drop-down-pages">
                                            <li class="nav-item">
                                                <a class="dropdown-item nav-link" href="./pricing_plan.html">Pricing Plan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dropdown-item nav-link" href="./404.html">404</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./projects.html">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.html">Contact</a>
                                </li>
                            </ul>
                            <div class="last_list ml-auto">
                                <a href="#"><i class="fa-solid fa-headphones"></i></a>
                                <a class="text-decoration-none last_list_atag" href="tel:0008596256">Call us: 000 8596 256</a>
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in mr-0"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div> -->
        </header>
    <!-- BANNER SECTION -->
        <section class="banner-section" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-md-left text-center">
                        <div class="banner-section-content">
                            {{-- <h1 data-aos="fade-up" style="color:#35cf20">Sambanggo</h1> --}}
                            <img src="{{ url('') }}/images/logo_sambanggo.png" alt="" class="img-fluid">
                            <p data-aos="fade-right" style="color:#93eef8">
                                {{-- Sambanggo atau sambang Kulon Progo adalah sebuah gerakan mengajak wisatawan untuk berkunjung atau menikmati berbagai obyek wisata yang ada di Kabupaten  Kulon Progo 

                                Baik Sambang Gisik, Sambang Gawe, maupun Sambang Gunung.

                                Sambang Gisik : wisatawan diajak mengunjungi destinasi wisata di wilayah sepanjang pantai Kulon Progo.  

                                Sambang Gawe : wisatawan diajak mengunjungi atau menikmati berbagai produk ekonomi kreatif yang ada di Kulon Progo.

                                Sambang Gunung : wisatawan diajak mengunjungi destinasi wisata yang ada di wilayah pegunungan atau perbukitan.

                                Wisatawan juga dapat berkunjung ke berbagai destinasi wisata yang ada di Kulon Progo maupun ke 24 Desa Wisata.


                                Ayo berkunjung ke Kulon Progo
                                Sambanggo!!! --}}
                            </p>
                            <div class="btn_wrapper" data-aos="fade-up">
                                <a class="text-decoration-none getstarted_btn" href="{{ url('/event_home') }}">Calender Of Event</a>
                                {{-- <a class="text-decoration-none aboutus_btn" href="./about.html">Maps</a> --}}
                                <a class="text-decoration-none aboutus_btn" href="{{ url('/login') }}">Login</a>
                            </div>
                            <figure class="banner_yellow_line mb-0">
                                <img src="images/banner_yellow_line.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="banner-section-image">
                            <figure class="mb-0">
                                <img src="images/tugu2.png" alt="" class="img-fluid">
                            </figure> 
                        </div>
                        <figure class="banner_yellow_green_icon mb-0">
                            {{-- <img src="images/gb1.png" alt="" class="img-fluid"> --}}
                        </figure>
                        <figure class="banner_white_circle_icon mb-0">
                            {{-- <img src="images/tari.png" alt="" class="img-fluid"> --}}
                        </figure>
                    </div>
                </div>
                <figure class="banner_yellow_icon mb-0">
                    <img src="images/gb3.png" alt="" class="img-fluid">
                </figure>
                <figure class="banner_va_icon mb-0">
                    <img src="images/banner_vs_icon.png" alt="" class="img-fluid">
                </figure>
                <figure class="banner_bottom_white_icon mb-0">
                    <img src="images/banner_bottom_white_icon.png" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_top_icon mb-0">
                    <img src="images/banner_right_top_transparent_icon.png" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_icon mb-0">
                    <img src="images/banner_right_bottom_icon.png" alt="" class="img-fluid">
                </figure>
            </div>
        </section>
    </div>
    <!-- VIRTUAL EMPLOYEE SECTION -->
    <section class="virtual_employee-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="virtual_employee_image">
                        <figure class="mb-0">
                            <img src="{{ url('') }}/images/filosofi.JPG" alt="" class="img-fluid" style="border-radius: 2em">
                        </figure>
                    </div>
                    <figure class="virtual_employee_yellow_icon mb-0">
                        <img src="{{ url('') }}/images/virtual_employee_yellow_icon.png" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                    <div class="virtual_employee_content_detail">
                        <h6>Wisata Kulon Progo</h6>
                        <h2>Apa Itu "Sambanggo" ?</h2>
                        <p>
                            Sambanggo atau sambang Kulon Progo adalah sebuah gerakan mengajak wisatawan untuk berkunjung atau menikmati berbagai obyek wisata yang ada di Kabupaten  Kulon Progo 
                        </p>
                        <p>
                            Baik Sambang Gisik, Sambang Gawe, maupun Sambang Gunung.
                        </p>
                        <p>
                            Sambang Gisik : wisatawan diajak mengunjungi destinasi wisata di wilayah sepanjang pantai Kulon Progo.  
                        </p>
                        <p>
                            Sambang Gawe : wisatawan diajak mengunjungi atau menikmati berbagai produk ekonomi kreatif yang ada di Kulon Progo.
                        </p>
                        <p>
                            Sambang Gunung : wisatawan diajak mengunjungi destinasi wisata yang ada di wilayah pegunungan atau perbukitan.
                        </p>
                        <p>
                            Wisatawan juga dapat berkunjung ke berbagai destinasi wisata yang ada di Kulon Progo maupun ke 24 Desa Wisata.
                        </p>
                        <p>
                            Ayo berkunjung ke Kulon Progo
                            Sambanggo!!!
                        </p>
                        {{-- <div class="btn_wrapper">
                            <a class="text-decoration-none get_started_btn" href="./index.html">Get Started</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <figure class="virtual_employee_left_icon mb-0">
                <img src="./assets/images/virtual_employee_left_icon.png" alt="" class="img-fluid">
            </figure>
            <figure class="virtual_employee_right_top_icon mb-0">
                <img src="./assets/images/virtual_employee_right_top_icon.png" alt="" class="img-fluid">
            </figure>
            <figure class="virtual_employee_right_bottom_icon mb-0">
                <img src="./assets/images/virtual_employee_right_bottom_icon.png" alt="" class="img-fluid">
            </figure>
            <figure class="virtual_employee_bottom_icon mb-0">
                <img src="./assets/images/virtual_employee_bottom_icon.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- CASE STUDIES SECTION -->
    <section class="case_studies_section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="case_studies-content">
                        <h6>Sambanggo</h6>
                        <h2>Wisata Kulon Progo</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                @foreach($categories as $category)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="case_studies_image">
                            <figure class="mb-0"><img src="{{ asset('storage/' . $category->foto) }}" alt="" class="img-fluid"></figure>
                            <div class="case_studies_box">
                                <h4>{{ $category->name }}</h4>
                                <!-- <p>Dolores eos aui ratione seaui nesciunt</p> -->
                                <a href="{{ url('') }}/wisata/{{ $category->id }}">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="btn_wrapper">
                <a class="text-decoration-none viewall_btn" href="{{ url('/mapWisata') }}" target="_blank">Maps</a>
            </div>
            <figure class="case_studies_shape mb-0">
                <img src="images/case_studies_shape.png" alt="" class="img-fluid" data-aos="fade-up">
            </figure>
        </div>
    </section>
    <!-- WHY CHOOSE US SECTION -->
    <!-- <section class="choose_us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                    <div class="choose_us_content">
                        <h6>WHY CHOOSE US</h6>
                        <h2>How Instant VA Can Help You to Grow Your Business</h2>
                        <p>Ronsectetur adipiscing elit sed do eiusmod tempor in labore et dolore magna aliqua ruis ipsum suspendisse ultrices gravida sit amet.</p>
                    </div>
                    <div class="box_wrapper">
                        <div class="box mb-0">
                            <h2 class="counter">583</h2>
                            <p class="sub_p mb-0">Happy Clients</p>
                        </div>
                        <div class="box mb-0">
                            <h2 class="counter">825</h2>
                            <p class="sub_p mb-0">Projects Done</p>
                        </div>
                        <div class="box mb-0 mr-0">
                            <h2 class="counter">235</h2>
                            <p class="sub_p mb-0">Awards Won</p>
                        </div>
                    </div>
                    <figure class="choose_us_yellow_icon mb-0">
                        <img src="images/choose_us_yellow_icon.png" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="choose_us_image">
                        <figure class="mb-0">
                            <img src="images/choose_us_image.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
            <figure class="choose_us_left_icon mb-0">
                <img src="images/home_services_left_icon.png" alt="" class="img-fluid">
            </figure>
            <figure class="choose_us_right_icon mb-0">
                <img src="images/home_services_right_icon.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section> -->
    <!-- TESTIMONIALS SECTION -->
    <!-- <section class="testimonials-section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6>TESTIMONIALS</h6>
                    <h2>What Our Clients are Saying</h2>
                </div>
            </div>
            <div class="testimonial_wrapper">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <figure class="testimonials_shape1 mb-0">
                            <img src="images/testimonials_1.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="testimonials_shape2 mb-0">
                            <img src="images/testimonials_2.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="testimonials_shape3 mb-0">
                            <img src="images/testimonials_3.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="testimonials_shape4 mb-0">
                            <img src="images/testimonials_4.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="owl-carousel owl-theme">   
                            <div class="item">
                                <div class="testimonials_content">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur aeci
                                        velit, sed quia non numquam eius modi tempora incidunt ut lao magnam
                                        aliquam quaerat voluptatem reprehenderit in voluptate cillum dolore
                                        eu fugiat nulla pariatur maxime...</p>
                                    <div class="testimonials_wrapper">
                                        <span class="testimonials_name d-block">Kevin Andrew</span>
                                        <span class="testimonials_desc">CEO  of the company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials_content">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur aeci
                                        velit, sed quia non numquam eius modi tempora incidunt ut lao magnam
                                        aliquam quaerat voluptatem reprehenderit in voluptate cillum dolore
                                        eu fugiat nulla pariatur maxime...</p>
                                    <div class="testimonials_wrapper">
                                        <span class="testimonials_name d-block">Kevin Andrew</span>
                                        <span class="testimonials_desc">CEO  of the company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonials_content">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur aeci
                                        velit, sed quia non numquam eius modi tempora incidunt ut lao magnam
                                        aliquam quaerat voluptatem reprehenderit in voluptate cillum dolore
                                        eu fugiat nulla pariatur maxime...</p>
                                    <div class="testimonials_wrapper">
                                        <span class="testimonials_name d-block">Kevin Andrew</span>
                                        <span class="testimonials_desc">CEO  of the company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <figure class="testimonials_shape5 mb-0">
                            <img src="images/testimonials_5.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="testimonials_shape6 mb-0">
                            <img src="images/testimonials_6.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="testimonials_shape7 mb-0">
                            <img src="images/testimonials_7.png" alt="" class="img-fluid">
                        </figure>
                        <figure class="testimonials_shape8 mb-0">
                            <img src="images/testimonials_8.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- SEND MESSAGE SECTION -->
    <section class="send_message_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="send_message_box_content">
                        <h6>MORE INFO</h6>
                        <h2>Tourism Information Center</h2>
                        <div class="btn_wrapper">
                            <a class="text-decoration-none get_started_btn" href="#wisata">Get Started</a>
                        </div>
                        <i class="fa-solid fa-headphones"></i>
                        <span class="call_us d-block">Call us Today:</span>
                        <span class="phone_num">(0274) 773095</span>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="send_message_form_box_content">
                        <h6>SCAN ME</h6>
                    <form>
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class=" form-group mb-0">    
                                    <figure class="mb-0" >
                                        {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">                            --}}
                                            <img src="{{ url('') }}/images/kontak_info.png" alt="" class="img-fluid" style="border-radius: 1em;height:200px;width:200px;" >
                                        {{-- </div> --}}
                                    </figure>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    </div>
                    <figure class="send_message_yellow_icon mb-0">
                        <img src="images/send_message_yellow_icon.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
            <figure class="send_message_left_icon mb-0">
                <img src="images/send_message_left_icon.png" alt="" class="img-fluid">
            </figure>
            <figure class="send_message_right_icon mb-0">
                <img src="images/send_message_right_icon.png" alt="" class="img-fluid">
            </figure>
            <figure class="send_message_bottom_icon mb-0">
                <img src="images/send_message_bottom_icon.png" alt="" class="img-fluid">
            </figure>
        </div>
    </section>
    <!-- SIGN UP SECTION -->
    {{-- <div class="sign_up-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <figure class="mb-0">
                        <img src="images/signup_instant_logo.png" alt="" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="sign_up_content">
                        <span>SIGN UP FOR THE NEWSLETTER</span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="sign_up_form_content">
                        <form>
                            <div class="form-row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="emailadd" class="form-control upper_layer" placeholder="Enter Email Address">
                                    <div class="input-group-append form-button">
                                        <button class="btn sign_up_arrow" name="btnsubmit" id="submitbtn" type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- FOOTER SECTION -->
    {{-- <section class="footer-section">
        <div class="container">
            <div class="middle-portion">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 d-lg-block d-none"></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="about_col">
                            <h4>About Us</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <p class="pp">Rerum necessitatibus saepe eveniet ut et voluptates repu diandae sint et molestiae non recusandae.</p>
                                </li>
                                <li class="icons"><a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li class="icons"><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="icons"><a href="#"><i class="fa-brands fa-linkedin-in mr-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12 d-md-block d-none">
                        <div class="links_col">
                            <h4>Useful Links</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="./about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="./services.html">Services</a>
                                </li>
                                <li>
                                    <a href="./pricing_plan.html">Pricing Plan</a>
                                </li>
                                <li>
                                    <a href="./projects.html">Our Projects</a>
                                </li>
                                <li>
                                    <a href="./contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 d-lg-block d-none">
                        <div class="explore_col">
                            <h4>Explore</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="./about.html#team_members">Team</a>
                                </li>
                                <li>
                                    <a href="./index.html#virtual_employee">Virtual</a>
                                </li>
                                <li>
                                    <a href="./index.html#process">Our Process</a>
                                </li>
                                <li>
                                    <a href="./projects.html#project_casestudies">Case Studies</a>
                                </li>
                                <li>
                                    <a href="./index.html#testimonial">Testimonials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="contact_col">
                            <h4>Contact Info</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+61383766284" class="text-decoration-none">+61 3 8376 6284</a>
                                </li>
                                <li>
                                    <i class="fa-sharp fa-solid fa-envelope"></i>
                                    <a href="mailto:Info@instantva.om" class="text-decoration-none">Info@instantva.om</a>
                                </li>
                                <li class="mb-0">
                                    <i class="fa-solid fa-location-dot location"></i>
                                    <a class="text-decoration-none">21 King Street Melbourne, 3000, Australia</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-portion">
            <div class="copyright col-xl-12"> 
                <p>Copyright 2022, Instantva.com All Rights Reserved.</p>
            </div>
        </div>
        <div class="footer_logo">
            <figure class="mb-0"><img src="images/footer_logo.png" alt="" class="img-fluid"></figure>
        </div>
    </section> --}}
@endsection