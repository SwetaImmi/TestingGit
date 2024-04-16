@extends('layout.app')
@section('content')
<div class="contact-page">
    <section class="home-banner dark-bg min-height-bnn">
        <span class="dot-background"></span>
        <div class="container text-center">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="home-bnn-content">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_section padding-full">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-4">
                    <div class="contact_info" data-aos="fade-up">
                        <div class="home-heading">Contact Info</div>
                        <p>We can help you at every step for increased revenues and profits. With us, you can advance confidently in the right direction.</p>
                        <div class="contact_inf">
                            <i class="fas fa-map-marker-alt"></i>
                            Plot No. F 26, Phase 8, Industrial Area, Sector 73, Sahibzada Ajit Singh Nagar, Punjab 160071
                        </div>
                        <div class="contact_inf">

                            <i class="fas fa-phone-volume"></i>
                            <a class="text-white" href="tel:+916283009504">
                                +916283009504</a>
                        </div>
                        <div class="contact_inf">
                            <i class="fas fa-envelope"></i>
                            <a class="text-white" href="/cdn-cgi/l/email-protection#147d7a727b547d79797d7a717a60677b726063756671673a777b79">
                                <span class="__cf_email__" data-cfemail="7811161e173811151511161d160c0b171e0c0f190a1d0b561b1715">[email&#160;protected]</span></a>
                        </div> ​
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-8">
                    <div class="contact_detail" data-aos="fade-up">
                        <div class="contact-form">
                            <div class="home-heading">Fill the form and send your query</div>
                            <div class="wpcf7 no-js" id="wpcf7-f460-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="{{url('contact_us/send')}}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <p>
                                                <input size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="First name" type="text" name="firstname" />
                                                @if ($errors->has('firstname'))
                                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Email Address" value="" type="email" name="email" />
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p>
                                                <input size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="Phone Number" value="" type="tel" name="contact" />
                                                @if ($errors->has('contact'))
                                                <span class="text-danger">{{ $errors->first('contact') }}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p>
                                                <select class="form-control" aria-required="true" aria-invalid="false" name="menu_language">
                                                    <option value="Select">Select</option>
                                                    <option value="Wordpress Developer">Wordpress Developer</option>
                                                    <option value="PHP Developer">PHP Developer</option>
                                                    <option value="UX/UI Design">UX/UI Design</option>
                                                    <option value="Application Developer">Application Developer</option>
                                                </select>
                                                @if ($errors->has('menu_language'))
                                                <span class="text-danger">{{ $errors->first('menu_language') }}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <p>
                                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Message" name="message_query">
                                                    </textarea>
                                                @if ($errors->has('message_query'))
                                                <span class="text-danger">{{ $errors->first('message_query') }}</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="wpcf7-form-control wpcf7-submit has-spinner mt-4 defult-btn blue-solid-btn btn-animation btn btn-primary" type="submit" value="Sent Message" />
                                    </p>
                                    <!-- <div class="wpcf7-response-output" aria-hidden="true"></div> -->
                                </form>
                            </div>
                        </div>
                        ​
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="job_section padding-full light-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="job_main text-center">
                        <div class="comm-para job-content" data-aos="fade-up">
                            <div class="over-heading">
                                <span class="over-span text-center">FAQ</span>
                                <div class="home-heading">Frequently Asked Questions</div>
                            </div>
                            <p>What do you need to know? Answer That You Should Know</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="contact_faq">
                        <div class="accordion" id="faq-inner">
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">What makes you different from other companies? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse1" class="collapse collapse-content" aria-labelledby="heading1" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Is your content SEO-friendly? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse2" class="collapse collapse-content" aria-labelledby="heading2" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading3">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">What makes you different from other companies? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse3" class="collapse collapse-content" aria-labelledby="heading3" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">What makes you different from other companies? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse4" class="collapse collapse-content" aria-labelledby="heading4" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">What makes you different from other companies? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse5" class="collapse collapse-content" aria-labelledby="heading5" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading6">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">What makes you different from other companies? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse6" class="collapse collapse-content" aria-labelledby="heading6" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading7">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">What makes you different from other companies? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse7" class="collapse collapse-content" aria-labelledby="heading7" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-main">
                                <div class="card">
                                    <div class="card-header" id="heading8">
                                        <div class="mb-0">
                                            <button class="btn btn-link btn-block text-left font-weight-bolder collapsed " type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">What makes you different from other companies? <i class="fas fa-minus card-minus"></i>
                                                <i class="fas fa-plus card-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="collapse8" class="collapse collapse-content" aria-labelledby="heading8" data-parent="#faq-inner">
                                        <div class="card-body">
                                            <p>As web developers, our work is done right after creating a website. However, the blind trust and collaboration that we get from our clients compel us to offer help to them. Therefore, we help our clients in maintaining and updating the website with our effective and efficient resources.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection