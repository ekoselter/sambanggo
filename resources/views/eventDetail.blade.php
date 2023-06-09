@extends('layouts.main')



@section('container')

<!-- VIRTUAL EMPLOYEE SECTION -->
<section class="virtual_employee-section">
    <div class="container">
        <div class="row">
            <div class="table-responsive col-lg-8">
                <h2>{{ $kategori }}</h2>
                <div class="btn_wrapper mb-5">
                    <a class="text-decoration-none get_started_btn" href="{{ url('/event_home') }}">Back</a>
                </div>
                {{-- <a href="{{ url('') }}/dashboard/posts/create" class="btn btn-primary mb-3">Creat new post</a> --}}
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Tanggal Event</th>
                        <th scope="col">Keterangan</th>
                        {{-- <th scope="col">Action</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($events as $event)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $event->event_name }}</td>
                        <td>{{ $event->event_date }}</td>
                        <td>{!! $event->ket !!}</td>
                        {{-- <td>
                          <a href="{{ url('') }}/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></a>
                          <a href="{{ url('') }}/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></a>
                          <form action="{{ url('') }}/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></button>
                          </form>
                          
                        </td> --}}
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
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