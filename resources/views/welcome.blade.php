@extends('layout.main')

@section('main_body')
    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">Medicio medical group</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">Provide best quality healthcare for you</h4>
                        </div>
                        <div class="well well-trans">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <ul class="lead-list">
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span
                                            class="list"><strong>Affordable monthly premium
                                                packages</strong><br />Lorem ipsum dolor sit amet, in verterem
                                            persecuti vix, sit te meis</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span
                                            class="list"><strong>Choose your favourite doctor</strong><br />Lorem
                                            ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span
                                            class="list"><strong>Only use friendly
                                                environment</strong><br />Lorem ipsum dolor sit amet, in verterem
                                            persecuti vix, sit te meis</span></li>
                                </ul>
                                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                    <a href="#" class="btn btn-skin btn-lg">Learn more <i
                                            class="fa fa-angle-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/dummy/img-1.png') }}" class="img-responsive" alt="" />
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
                                Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae
                                vix, graecis eligendi ne.
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
                                Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae
                                vix, graecis eligendi ne.
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
                                Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae
                                vix, graecis eligendi ne.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Get diagnostic report</h4>
                            <p>
                                Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae
                                vix, graecis eligendi ne.
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
                                        <h3>In an emergency? Need help now?</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum
                                            ante eget faucibus. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                    <div class="cta-btn">
                                        <a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>
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
    <section id="service" class="home-section nopadding paddingtop-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('assets/img/dummy/img-1.jpg') }}" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-stethoscope fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Medical checkup</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-wheelchair fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Nursing Services</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-plus-square fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Pharmacy</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-h-square fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Gyn Care</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-filter fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Neurology</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-user-md fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Sleep Center</h5>
                                <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: services -->

    <!-- Section: team -->
    @include('pages.team.team')
    <!-- /Section: team -->

    <!-- Section: works -->
    @include('pages.resources.resources')
    <!-- /Section: works -->

    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
        <div class="carousel-reviews broun-block">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Emergency Contraception</a>
                                        <div class="mark">My rating: <span class="rating-input"><span
                                                    data-value="0" class="glyphicon glyphicon-star"></span><span
                                                    data-value="1" class="glyphicon glyphicon-star"></span><span
                                                    data-value="2" class="glyphicon glyphicon-star"></span><span
                                                    data-value="3" class="glyphicon glyphicon-star"></span><span
                                                    data-value="4"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span></div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem
                                            fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('assets/img/testimonials/1.jpg') }}" alt=""
                                            class="person img-circle" />
                                        <a title="" href="#">Anna</a>
                                        <span>Chicago, Illinois</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Orthopedic Surgery</a>
                                        <div class="mark">My rating: <span class="rating-input"><span
                                                    data-value="0" class="glyphicon glyphicon-star"></span><span
                                                    data-value="1" class="glyphicon glyphicon-star"></span><span
                                                    data-value="2"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="3"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="4"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span></div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem
                                            fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('assets/img/testimonials/2.jpg') }}" alt=""
                                            class="person img-circle" />
                                        <a title="" href="#">Matthew G</a>
                                        <span>San Antonio, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Medical consultation</a>
                                        <div class="mark">My rating: <span class="rating-input"><span
                                                    data-value="0" class="glyphicon glyphicon-star"></span><span
                                                    data-value="1" class="glyphicon glyphicon-star"></span><span
                                                    data-value="2" class="glyphicon glyphicon-star"></span><span
                                                    data-value="3" class="glyphicon glyphicon-star"></span><span
                                                    data-value="4" class="glyphicon glyphicon-star"></span><span
                                                    data-value="5" class="glyphicon glyphicon-star"></span>
                                            </span></div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem
                                            fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('assets/img/testimonials/3.jpg') }}" alt=""
                                            class="person img-circle" />
                                        <a title="" href="#">Scarlet Smith</a>
                                        <span>Dallas, Texas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Birth control pills</a>
                                        <div class="mark">My rating: <span class="rating-input"><span
                                                    data-value="0" class="glyphicon glyphicon-star"></span><span
                                                    data-value="1" class="glyphicon glyphicon-star"></span><span
                                                    data-value="2" class="glyphicon glyphicon-star"></span><span
                                                    data-value="3" class="glyphicon glyphicon-star"></span><span
                                                    data-value="4"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span></div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem
                                            fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('assets/img/testimonials/4.jpg') }}" alt=""
                                            class="person img-circle" />
                                        <a title="" href="#">Lucas Thompson</a>
                                        <span>Austin, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Radiology</a>
                                        <div class="mark">My rating: <span class="rating-input"><span
                                                    data-value="0" class="glyphicon glyphicon-star"></span><span
                                                    data-value="1" class="glyphicon glyphicon-star"></span><span
                                                    data-value="2"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="3"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="4"
                                                    class="glyphicon glyphicon-star-empty"></span><span
                                                    data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span></div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem
                                            fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('assets/img/testimonials/5.jpg') }}" alt=""
                                            class="person img-circle" />
                                        <a title="" href="#">Ella Mentree</a>
                                        <span>Fort Worth, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Cervical Lesions</a>
                                        <div class="mark">My rating: <span class="rating-input"><span
                                                    data-value="0" class="glyphicon glyphicon-star"></span><span
                                                    data-value="1" class="glyphicon glyphicon-star"></span><span
                                                    data-value="2" class="glyphicon glyphicon-star"></span><span
                                                    data-value="3" class="glyphicon glyphicon-star"></span><span
                                                    data-value="4" class="glyphicon glyphicon-star"></span><span
                                                    data-value="5" class="glyphicon glyphicon-star"></span>
                                            </span></div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem
                                            fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{ asset('assets/img/testimonials/6.jpg') }}" alt=""
                                            class="person img-circle" />
                                        <a title="" href="#">Suzanne Adam</a>
                                        <span>Detroit, Michigan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-reviews" role="button"
                            data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button"
                            data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: testimonial -->

    <!-- Section: pricing -->
    @include('pages.pricing.pricing')
    <!-- /Section: pricing -->

    @include('pages.partiners.include_partiners')

@endsection