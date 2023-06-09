@extends('layouts.main')



@section('container')

<!-- VIRTUAL EMPLOYEE SECTION -->
<section class="virtual_employee-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="virtual_employee_image">
                    <figure class="mb-0">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="" class="img-fluid">
                    </figure>
                </div>
                <figure class="virtual_employee_yellow_icon mb-0">
                    <img src="{{ asset('images/virtual_employee_yellow_icon.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="virtual_employee_content_detail">
                    <a href="{{ url('') }}/wisata/{{ $posts[0]->category_id }}"><h6>{{ $posts[0]->name }}</h6></a>
                    <h2>{{ $posts[0]->title }}</h2>
                    <p>
                        {{-- <article class="my-3 fs-5"> --}}
                            {!! $posts[0]->body !!}
                        {{-- </article> --}}
                    </p>
                    <div class="btn_wrapper">
                        <a class="text-decoration-none get_started_btn" href="{{ url('/') }}">Home</a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="virtual_employee_left_icon mb-0">
            <img src="{{ url('') }}/images/virtual_employee_left_icon.png" alt="" class="img-fluid">
        </figure>
        <figure class="virtual_employee_right_top_icon mb-0">
            <img src="{{ url('') }}/images/virtual_employee_right_top_icon.png" alt="" class="img-fluid">
        </figure>
        <figure class="virtual_employee_right_bottom_icon mb-0">
            <img src="{{ url('') }}/images/virtual_employee_right_bottom_icon.png" alt="" class="img-fluid">
        </figure>
        <figure class="virtual_employee_bottom_icon mb-0">
            <img src="{{ url('') }}/images/virtual_employee_bottom_icon.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>
   
    <!-- SIGN UP SECTION -->
    <div class="sign_up-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <figure class="mb-0">
                        <img src="{{ url('') }}/images/signup_instant_logo.png" alt="" class="img-fluid">
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
    </div>
    <!-- FOOTER SECTION -->
    <section class="footer-section">
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
            <figure class="mb-0"><img src="{{ url('') }}/images/footer_logo.png" alt="" class="img-fluid"></figure>
        </div>
    </section>
@endsection