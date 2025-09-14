@extends('layouts.app')

@section('title', 'Adamcresco')

@section('hero')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel" style="height: 550px; min-height: 550px;">
        <div class="header-carousel-item" style="height: 550px; min-height: 550px;">
            <img src="{{ asset('img/carousel-1.svg') }}" class="img-fluid w-100" alt="Adamcresco Professional Services" style="height: 550px; object-fit: cover;">
            <div class="carousel-caption" style="height: 550px; min-height: 550px;">
                <div class="container" style="height: 100%;">
                    <div class="row gy-0 gx-5" style="height: 100%;">
                        <div class="col-lg-0 col-xl-5"></div>
                        <div class="col-xl-7 animated fadeInLeft" style="height: 100%;">
                            <div class="text-sm-center text-md-end" style="height: 100%; display: flex; flex-direction: column; justify-content: center;">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Adamcresco</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Expert Financial Solutions for Your Business Growth</h1>
                                <p class="mb-5 fs-5">Navigate financial complexity with confidence. We provide comprehensive audit, tax, advisory, and ESG services to help your business achieve sustainable growth and long-term success across the USA.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item" style="height: 550px; min-height: 550px;">
            <img src="{{ asset('img/carousel-2.svg') }}" class="img-fluid w-100" alt="Adamcresco ESG & Sustainability Services" style="height: 550px; object-fit: cover;">
            <div class="carousel-caption" style="height: 550px; min-height: 550px;">
                <div class="container" style="height: 100%;">
                    <div class="row g-5" style="height: 100%;">
                        <div class="col-12 animated fadeInUp" style="height: 100%;">
                            <div class="text-center" style="height: 100%; display: flex; flex-direction: column; justify-content: center;">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Adamcresco</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">Building Sustainable Business Futures</h1>
                                <p class="mb-5 fs-5">From ESG strategy to climate finance advisory, we help businesses embrace sustainability while driving growth. Partner with us to create long-term value for stakeholders and communities.
                                </p>
                                <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                    <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <h2 class="text-white me-2">Follow Us:</h2>
                                    <div class="d-flex justify-content-end ms-2">
                                        <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
@endsection

@section('content')
<!-- About Start -->
{{-- <div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">Meet our company unless miss the opportunity</h1>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum velit temporibus repudiandae ipsa, eaque perspiciatis cumque incidunt tenetur sequi reiciendis.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Business Consuluting</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Year Of Expertise</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                        </div>
                        <!-- Contact block commented out

                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">+01234567890</p>
                                </div>
                            </div>
                        </div>

                        -->
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('img/about-2.png') }}" class="img-fluid rounded w-100" alt="">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/about-3.png') }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/about-4.png') }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/about-5.jpg') }}" class="img-fluid rounded-bottom w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- About End -->
<!-- Services Start -->
<div class="container-fluid service pb-5" style="padding-top: 40px">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-5 mb-4">Broad capabilities. Deep expertise. Measurable impact.</h1>
            <p class="mb-0">
                For us every challenge is a chance to create value. Our team brings together technical precision, business acumen, and forward-thinking strategies to help clients navigate complexity and drive meaningful progress. With experience across industries and a sharp focus on results, we deliver solutions that don’t just work on paper—they work in practice.<br>
                Regardless you're a growing startup or a leading global enterprise, explore our diverse range of services and solutions designed to drive your business success.
            </p>
        </div>
        <div class="row g-4">
            <!-- Audit & Assurance -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid rounded-top w-100" alt="Audit & Assurance">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="/services/audit-assurance" class="h4 d-inline-block mb-4">Audit &amp; Assurance</a>
                        <p class="mb-4">
                            Our Audit services provide a robust and independent examination of your financial statements,
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/services/assurance">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Tax -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/service-2.jpg') }}" class="img-fluid rounded-top w-100" alt="Tax">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="/services/tax" class="h4 d-inline-block mb-4">Tax</a>
                        <p class="mb-4">
                            The complexity of federal, state, and local tax laws requires specialized knowledge and diligent attention 
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/services/tax">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Advisory -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/service-3.jpg') }}" class="img-fluid rounded-top w-100" alt="Advisory">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="/services/advisory" class="h4 d-inline-block mb-4">Advisory</a>
                        <p class="mb-4">
                            Whether your organization is seeking significant performance improvements,
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/services/advisory">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Business Services & Out Source -->
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('img/service-4.jpg') }}" class="img-fluid rounded-top w-100" alt="Business Services & Out Source">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="/services/business-services-outsourcing" class="h4 d-inline-block mb-4">Business Services &amp; Out Source</a>
                        <p class="mb-4">
                            Maintain the financial health and clarity of your business with Adam Cresco's
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="/services/business-services-outsourcing">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
<!-- Features Start -->
<div class="container-fluid feature pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 1046px;">
            <h4 class="text-primary">Our Indusitries</h4>
            <h1 class="display-5 mb-4">Connecting businesses<br>ideas, and<br>people for greater impact.</h1>
            {{-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic. --}}
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                    </div>
                    <h4>Consumer Business</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-university fa-2x text-primary"></i>
                    </div>
                    <h4>Financial Services</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-heartbeat fa-2x text-primary"></i>
                    </div>
                    <h4>Healthcare</h4>
                        {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-industry fa-2x text-primary"></i>
                    </div>
                    <h4>Manufacturing</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.0s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-leaf fa-2x text-primary"></i>
                    </div>
                    <h4>Natural Resources & Energy</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-hands-helping fa-2x text-primary"></i>
                    </div>
                    <h4>Not-for-profit</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Private Equity</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-briefcase fa-2x text-primary"></i>
                    </div>
                    <h4>Professional Services</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-landmark fa-2x text-primary"></i>
                    </div>
                    <h4>Public Sector</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="2.0s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                    <h4>Real Estate & Construction</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="2.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-laptop fa-2x text-primary"></i>
                    </div>
                    <h4>Technology, Media & Entertainment</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="2.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-phone fa-2x text-primary"></i>
                    </div>
                    <h4>Telecommunications</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="2.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon p-4 mb-4" style="width: 100%;">
                        <i class="fas fa-truck fa-2x text-primary"></i>
                    </div>
                    <h4>Transport</h4>
                    {{-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
<!-- Offer Start -->
{{-- <div class="container-fluid offer-section pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Offer</h4>
            <h1 class="display-5 mb-4">Benefits We offer</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="nav nav-pills bg-light rounded p-5">
                    <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                        <h5 class="mb-0">Lending money for investment of your new projects</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                        <h5 class="mb-0">Lending money for investment of your new projects</h5>
                    </a>
                    <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                        <h5 class="mb-0">Mobile payment is more flexible and easy for all investors</h5>
                    </a>
                    <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                        <h5 class="mb-0">all transaction is kept free for the member of pro traders</h5>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="tab-content">
                    <div id="collapseOne" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="{{ asset('img/offer-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="{{ asset('img/offer-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="{{ asset('img/offer-3.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFour" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-md-7">
                                <img src="{{ asset('img/offer-4.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                            <div class="col-md-5">
                                <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Offer End -->
<!-- Blog Start -->
{{-- <div class="container-fluid blog pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Blog & News</h4>
            <h1 class="display-5 mb-4">Articles For Pro Traders</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/testimonial-1.jpg') }}" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('img/service-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Non-Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/testimonial-2.jpg') }}" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('img/service-3.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/testimonial-3.jpg') }}" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
            <div class="blog-item p-4">
                <div class="blog-img mb-4">
                    <img src="{{ asset('img/service-4.jpg') }}" class="img-fluid w-100 rounded" alt="">
                    <div class="blog-title">
                        <a href="#" class="btn">Non-Dividend Stocks</a>
                    </div>
                </div>
                <a href="#" class="h4 d-inline-block mb-3">Options Trading Business?</a>
                <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore aut aliquam suscipit error corporis accusamus labore....
                </p>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/testimonial-1.jpg') }}" class="img-fluid rounded-circle" style="width: 60px; height: 60px;" alt="">
                    <div class="ms-3">
                        <h5>Admin</h5>
                        <p class="mb-0">October 9, 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Blog End -->
<!-- FAQs Start -->
{{-- <div class="container-fluid faq-section pb-5">
    <div class="container pb-5 overflow-hidden">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">FAQs</h4>
            <h1 class="display-5 mb-4">Frequently Asked Questions</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                    <div class="accordion-item rounded-top">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What Does This Tool Do?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            What Are The Disadvantages Of Online Trading?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Is Online Trading Safe?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            What Is Online Trading, And How Dose It Work?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Which App Is Best For Online Trading?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-bottom">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                            How To Create A Trading Account?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushSection">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded">
                    <img src="{{ asset('img/about-2.png') }}" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- FAQs End -->
<!-- Team Start -->
{{-- <div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Team</h4>
            <h1 class="display-5 mb-4">Meet Our Advisers</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('img/team-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('img/team-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('img/team-3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('img/team-4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->
<!-- Testimonial Start -->
{{-- <div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonial</h4>
            <h1 class="display-5 mb-4">Our Clients Riviews</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-1.jpg') }}" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-2.jpg') }}" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-3.jpg') }}" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="{{ asset('img/testimonial-2.jpg') }}" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Person Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Testimonial End -->


<!-- Copyright End -->
<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
@endsection 