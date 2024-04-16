@extends('layout.app')
@section('content')
<div class="career-page">
    <section class="home-banner dark-bg">
        <div id="experience">
            <canvas id="lines"></canvas>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="home-bnn-content">
                        <h1>Become a Imminent<br><span>Family Member</span></h1>
                        <p>We’re growing, so we’re always on the look-out for great talents who are passionate about what they do.</p>
                        <a href="#job_opening" class="job_opening_sec">
                            <button type="button" class="btn defult-btn btn-lg blue-solid-btn btn-animation" id="">
                                View Openings</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-vision padding-full">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="our-vision-left comm-para" data-aos="fade-up">
                        <div class="home-heading">
                            <h2>Our Vision</h2>
                        </div>
                        <p>We are the #1 performance marketing agency built by a high performing team, and we pivot as fast as the digital marketplace.</p>
                        ​
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="our-vision-right comm-para" data-aos="fade-up">
                        <p>We stick with our people and our people stick with us. We serve our team and our team leads in service to the world. Our innovative services are developed by listening to our customers and understanding their pain points. Our digital marketing strategies help small business owners consistently win in a digital world. Our customers are life-long partners and we win together. Our impact is much bigger than our bottom line: We develop the best leaders with the biggest hearts, and we give back to our community, both with time and money. Our community and the world thrive together with our business and our partners.</p>
                        ​
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="job_section padding-full light-bg" id="job_opening">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="job_main text-center">
                        <div class="job-content comm-para " data-aos="fade-up">
                            <div class="over-heading ">
                                <span class="over-span text-center">Openings</span>
                                <div class="home-heading">
                                    <h2>Job Openings</h2>
                                </div>
                            </div>
                            <p>We have job openings for the following positions</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row career_job_row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="Wordpress Development" onClick="reply_click(this.id)">
                    <div class="career-part active">
                        <div class="career_heading mt-0">Wordpress Development</div>
                        <p>Experience:- 1-4 Years</p>
                        <p>Skills:- PHP, Theme and Plugin Customization , woo commerce.</p>
                        <a class="btn_carr mobile_responsive" id="Wordpress Development" onClick="reply_click(this.id)" href="#mobile_responsive_scroll">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="UX / UI Design" onClick="reply_click(this.id)">
                    <div class="career-part ">
                        <div class="career_heading mt-0">UX / UI Design</div>
                        <p>Experience:- 1 - 2 Years</p>
                        <p>Skills:- Photoshop, Illustrator, HTML 5, CSS 3 & Javascript, Jquery, Bootstrap3</p>
                        <a class="btn_carr mobile_responsive" id="UX / UI Design" onClick="reply_click(this.id)" href="#mobile_responsive_scroll">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="PHP Development" onClick="reply_click(this.id)">
                    <div class="career-part ">
                        <div class="career_heading mt-0">PHP Development</div>
                        <p>Experience:- 2 Years</p>
                        <p>Skills:- Corephp, Coding, Payment Gateways.</p>
                        <a class="btn_carr mobile_responsive" id="PHP Development" onClick="reply_click(this.id)" href="#mobile_responsive_scroll">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="App Development" onClick="reply_click(this.id)">
                    <div class="career-part ">
                        <div class="career_heading mt-0">App Development</div>
                        <p>Experience:- 2-3 Years</p>
                        <p>Skills:- App Design, APIs, Coding, Knowledge of UX -UI and Backend.</p>
                        <a class="btn_carr mobile_responsive" id="App Development" onClick="reply_click(this.id)" href="#mobile_responsive_scroll">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="row career_job_row" data-aos="fade-up" id="mobile_responsive_scroll">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="contact-form">

                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script type="text/javascript">
                            function reply_click(clicked_id) {
                                //alert(clicked_id);
                                //document.write(clicked_id);
                                jQuery('#test22').text(clicked_id);

                            }
                        </script>

                        <div class="home-heading">Fill the Form and Apply for <span id="test22">Wordpress Development</span></div>


                        <div class="wpcf7 no-js" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{url('career_application/send')}}" method="post" class="wpcf7-form init" aria-label="Contact form" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
                                @csrf
                                <!-- <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="512" />
                                    <input type="hidden" name="_wpcf7_version" value="5.9.3" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f512-p186-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="186" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                </div> -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <p>
                                            <span class="wpcf7-form-control-wrap" data-name="text-385">
                                                <input size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="First name" value="" type="text" name="username" />
                                                @if ($errors->has('username'))
                                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                                @endif
                                        </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p>
                                            <input size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Email Address" value="" type="email" name="email" />
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p>

                                            <input size="40" class=" form-control" aria-required="true" aria-invalid="false" placeholder="Phone Number" value="" type="tel" name="contact" />
                                            @if ($errors->has('contact'))
                                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p>
                                            <select class=" form-control" aria-required="true" aria-invalid="false" name="menu_language">
                                                <option value="Select">Select</option>
                                                <option value="Wordpress Development">Wordpress Development</option>
                                                <option value="UX / UI Design">UX / UI Design</option>
                                                <option value="App Development">App Development</option>
                                                <option value="PHP Development">PHP Development</option>
                                            </select>
                                            @if ($errors->has('menu_language'))
                                            <span class="text-danger">{{ $errors->first('menu_language') }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <p><label>Upload Your CV</label><br />
                                            <input size="40" class=" form-control" accept="audio/*,video/*,image/*" aria-required="true" aria-invalid="false" type="file" name="resume" />
                                            @if ($errors->has('resume'))
                                            <span class="text-danger">{{ $errors->first('resume') }}</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <p><input class="wpcf7-form-control wpcf7-submit has-spinner mt-4 defult-btn blue-solid-btn btn-animation btn btn-primary" type="submit" value="Apply" />
                                </p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits_section padding-full">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="text-center" data-aos="fade-up">
                        <div class="home-heading"> Perks & Benefits</div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="benefits_content comm-para">
                        <div class="mt-0 benefits_heading">Clear Career Paths</div>
                        <p>We map out your career path with clear milestones and a timeline to hold each other accountable.</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="benefits_content comm-para">
                        <div class="mt-0 benefits_heading">Remote Work</div>
                        <p>We offer 100% remote work opportunities and have setup the right communication strategies, and technology solutions to stay connected.</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="benefits_content comm-para">
                        <div class="mt-0 benefits_heading">Volunteer + Give Back</div>
                        <p>We encourage and provide paid opportunities for our team to volunteer and give back to our community.</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="benefits_content comm-para">
                        <div class="mt-0 benefits_heading">Flexible Schedule</div>
                        <p>We offer flexible schedule solutions and use the best project management workflows to keep tasks and projects on target.</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="benefits_content comm-para">
                        <div class="mt-0 benefits_heading">Monthly Bonuses</div>
                        <p>Our team shares in the success of the business and are eligable for monthly bonuses</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                    <div class="benefits_content comm-para">
                        <div class="mt-0 benefits_heading">Time Off + Work Life Balance</div>
                        <p>We are a high performance team that works hard and goes home on time every workday and we offer unlimited time off.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection