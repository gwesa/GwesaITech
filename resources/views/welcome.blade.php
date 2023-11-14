@extends('layout.main')

@section('main_body')
    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">GwesaITech Solutions</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Provide best quality ICT services for you</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="well well-trans">
                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                    <ul class="lead-list">
                                        <li><span class="fa fa-check fa-2x icon-success"></span> <span
                                                class="list"><strong>Affordable IT Consultaions Support
                                                    packages</strong><br />GwesaITech provides Techinical Support for you in
                                                Affordable prices, Make Apointment with GwesaITech for Better Support</span>
                                        </li>
                                        <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list">
                                                <strong>Work in Both OnSite and Remotely</strong><br />
                                                Our Team has all requared Software to complete any kind of support both Onsite
                                                and Remote
                                            </span>
                                        </li>
                                        <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list">
                                                <strong>Online Training and Turorials</strong><br />
                                                GwesaITech solution provides and Conduct online Training and Tutorials through
                                                recorded videos and
                                                Explained in Swahili mixed with litle English explanations
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                        <a href="#" class="btn btn-skin btn-lg">More Services <i
                                                class="fa fa-angle-right"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/img/dummy/home1.jpg') }}" class="img-responsive" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Make an appoinment</h4>
                            <p>
                                Request for IT Support that you want, GwesaITech solution we listens to you and team will Support you soon as Possible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-list-alt fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Choose your package</h4>
                            <p>
                                With GwesaITech solution you have a room to choose affordable service packages for your needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Help by specialist</h4>
                            <p>
                                Our team are well experienced and specialized for ICT solutions make appoint now they will help you.!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Training and Tutorials</h4>
                            <p>
                                Through GwesaITech online platform we have  a session for Online Training and Tutorials through YouTube channel
                                GwesaITech69, click it to subscribe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: boxes -->

    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3>Are Not Subscribed our YouTube channel?</h3>
                                        <p>In to be reached first by our YouTube contents SUBSCRIBE now via the following button :- </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                    <div class="cta-btn">
                                        <a href="#" class="btn btn-skin btn-lg">SUBSCRIBE HERE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: services -->
    @include('pages.services.service')
    <!-- /Section: services -->

    <!-- Section: team -->
    @include('pages.team.team')
    <!-- /Section: team -->

    <!-- Section: works -->
    @include('pages.resources.resources')
    <!-- /Section: works -->

    <!-- Section: testimonial -->
    
    <!-- /Section: testimonial -->

    <!-- Section: pricing -->
    @include('pages.pricing.pricing')
    <!-- /Section: pricing -->

    @include('pages.partiners.include_partiners')
@endsection
