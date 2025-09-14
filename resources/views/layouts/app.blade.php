<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Adamcresco')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @yield('meta')
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}"/>
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    
    <!-- Topbar Start -->
    {{-- <div class="container-fluid topbar bg-dark px-5 d-none d-lg-block"> --}}
        {{-- <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                    <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Topbar End -->
    
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <img src="{{ asset('images/logo.png') }}" alt="Adamcresco Logo" class="me-3" style="height: 113;margin-right: -19px !important;">
                <img src="{{ asset('images/logo2.jpeg') }}" alt="Adamcresco Logo" class="" >
                {{-- <span class="d-flex align-items-center" style="height:113px;">
                    <span style="display: flex; flex-direction: column; justify-content: center;">
                        <span style="
                            font-family: 'Dancing Script', cursive;
                            font-size: 2.5rem;
                            color: #FFD700;
                            line-height: 1;
                            letter-spacing: 0.15em;
                            margin-bottom: -0.7rem;
                            font-style: italic;
                            font-weight: 700;
                            text-shadow: 0 2px 8px rgba(0,0,0,0.25);
                            display: block;
                        ">
                            The
                        </span>
                        <span>
                            <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 1.5rem; color: #FFD700; letter-spacing: 0.5em;">
                                ADAM
                            </span>
                            <span style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 1.5rem; color: #fff; letter-spacing: 0.25em;">
                                CRESCO
                            </span>
                            <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 1.5rem; color: #FFD700;">.</span>
                        </span>
                    </span>
                </span>
                <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
                 --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    {{-- <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a> --}}
             
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('services/*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            Our Services
                        </a>
                        <div class="mega-menu-container">
                            <div class="mega-menu-content">
                                <div class="mega-menu-sidebar">
                                    <a href="/services/assurance" class="sidebar-item {{ request()->is('services/assurance') || request()->is('services/assurance/*') ? 'active' : '' }}" data-section="assurance">
                                    <span>Audit & Assurance</span>
                                        <span class="arrow">→</span>
                                    </a>
                                    <a href="/services/tax" class="sidebar-item {{ request()->is('services/tax') || request()->is('services/tax/*') ? 'active' : '' }}" data-section="tax">
                                        <span>Tax Services</span>
                                        <span class="arrow">→</span>
                                    </a>
                                    <a href="/services/advisory" class="sidebar-item {{ request()->is('services/advisory') || request()->is('services/advisory/*') ? 'active' : '' }}" data-section="advisory">
                                    <span>Advisory</span>
                                        <span class="arrow">→</span>
                                    </a>
                                    <a href="/services/business-services" class="sidebar-item {{ request()->is('services/business-services') || request()->is('services/business-services/*') ? 'active' : '' }}" data-section="business">
                                        <span>Business Services & Outsourcing</span>
                                        <span class="arrow">→</span>
                                    </a>
                                </div>
                                <div class="mega-menu-main">
                                    <h3 id="services-title">Our Services</h3>
                                    <div class="main-links" id="services-content">
                                        <!-- Default content - will be replaced by JavaScript -->
                                        <a href="/services/assurance/ifrs-corporate-reporting" class="main-link">IFRS and Corporate Reporting</a>
                                        <a href="/services/assurance/proposed-standards" class="main-link">Proposed Standards</a>
                                        <a href="/services/tax/us-taxation" class="main-link">US Taxation</a>
                                        <a href="/services/tax/canadian-tax-services" class="main-link">Canadian Tax Services</a>
                                        <a href="/services/advisory/deal-advisory" class="main-link">Deal Advisory</a>
                                        <a href="/services/advisory/forensics" class="main-link">Forensics</a>
                                        <a href="/services/advisory/management-consulting" class="main-link">Management Consulting</a>
                                        <a href="/services/advisory/risk-advisory-services" class="main-link">Risk Advisory Services</a>
                                        <a href="/services/business-services/outsourced-accounting-bookkeeping" class="main-link">Outsourced Accounting and Bookkeeping</a>
                                        <a href="/services/business-services/legal-company-secretarial" class="main-link">Legal and Company Secretarial</a>
                                        <a href="/services/business-services/compliance-reporting" class="main-link">Compliance and Reporting</a>
                                        <a href="/services/business-services/payroll-hr-global-mobility" class="main-link">Payroll, HR and Global Mobility</a>
                                    </div>
                                </div>
                                <div class="mega-menu-featured">
                                    <h4>Featured</h4>
                                    <div class="featured-image">
                                        <i class="fas fa-chart-line" style="font-size: 3rem; color: #7ed957;"></i>
                                    </div>
                                    <div class="featured-links">
                                        <a href="/services/assurance" class="featured-link">Audit & Assurance Overview</a>
                                        <a href="/services/tax" class="featured-link">Tax Services Overview</a>
                                        <a href="/services/advisory" class="featured-link">Advisory Services</a>
                                        <a href="/services/business-services" class="featured-link">Business Services</a>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('sustainability/*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            Sustainability
                        </a>
                        <div class="mega-menu-container">
                            <div class="mega-menu-content">
                                <div class="mega-menu-sidebar">
                                    <a href="/sustainability/climate-change-risk" class="sidebar-item {{ request()->is('sustainability/climate-change-risk') ? 'active' : '' }}" data-section="climate">
                                        <span>Climate Change Risk</span>
                                    </a>
                                    <a href="/sustainability/ghg-accounting" class="sidebar-item {{ request()->is('sustainability/ghg-accounting') ? 'active' : '' }}" data-section="ghg">
                                        <span>GHG Accounting</span>
                                    </a>
                                    <a href="/sustainability/sustainability-reporting" class="sidebar-item {{ request()->is('sustainability/sustainability-reporting') ? 'active' : '' }}" data-section="reporting">
                                        <span>Sustainability Reporting</span>
                                    </a>
                                    <a href="/sustainability/climate-finance-advisory" class="sidebar-item {{ request()->is('sustainability/climate-finance-advisory') ? 'active' : '' }}" data-section="finance">
                                        <span>Climate Finance Advisory</span>
                                    </a>
                                    <a href="/sustainability/carbon-emission" class="sidebar-item {{ request()->is('sustainability/carbon-emission') ? 'active' : '' }}" data-section="carbon">
                                        <span>Carbon Emission Services</span>
                                    </a>
                                </div>
                                <div class="mega-menu-main">
                                    <h3 id="sustainability-title">Sustainability Services</h3>
                                    <div class="main-links" id="sustainability-content">
                                        <!-- Default content - will be replaced by JavaScript -->
                                        <a href="/sustainability/climate-change-risk" class="main-link">Climate Change Risk and Opportunity</a>
                                        <a href="/sustainability/ghg-accounting" class="main-link">GHG Accounting Report and Assurance</a>
                                        <a href="/sustainability/sustainability-reporting" class="main-link">Sustainability Reporting</a>
                                        <a href="/sustainability/climate-finance-advisory" class="main-link">Climate Finance Advisory</a>
                                        <a href="/sustainability/carbon-emission" class="main-link">Carbon Emission Services</a>
                                    </div>
                                </div>
                                <div class="mega-menu-featured">
                                    <h4>Featured</h4>
                                    <div class="featured-image">
                                        <i class="fas fa-leaf" style="font-size: 3rem; color: #7ed957;"></i>
                                    </div>
                                    <div class="featured-links">
                                        <a href="/sustainability/climate-change-risk" class="featured-link">Climate Change Risk</a>
                                        <a href="/sustainability/ghg-accounting" class="featured-link">GHG Accounting</a>
                                        <a href="/sustainability/sustainability-reporting" class="featured-link">Sustainability Reporting</a>
                                        <a href="/sustainability/climate-finance-advisory" class="featured-link">Climate Finance</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('who-we-are') || request()->is('what-we-do') || request()->is('our-purpose') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            Who We Are
                        </a>
                        <div class="mega-menu-container">
                            <div class="mega-menu-content">
                                <div class="mega-menu-sidebar">
                                    <a href="/who-we-are" class="sidebar-item {{ request()->is('who-we-are') ? 'active' : '' }}" data-section="about">
                                        <span>Who We Are</span>
                                    </a>
                                    <a href="/what-we-do" class="sidebar-item {{ request()->is('what-we-do') ? 'active' : '' }}" data-section="services">
                                        <span>What We Do</span>
                                    </a>
                                    <a href="/our-purpose" class="sidebar-item {{ request()->is('our-purpose') ? 'active' : '' }}" data-section="purpose">
                                        <span>Our Purpose</span>
                                    </a>
                                    <a href="/governance" class="sidebar-item {{ request()->is('governance') ? 'active' : '' }}" data-section="governance">
                                        <span>Governance</span>
                                    </a>
                                </div>
                                <div class="mega-menu-main">
                                    <h3 id="about-title">About Adamcresco</h3>
                                    <div class="main-links" id="about-content">
                                        <!-- Default content - will be replaced by JavaScript -->
                                        <a href="/who-we-are" class="main-link">Who We Are</a>
                                        <a href="/what-we-do" class="main-link">What We Do</a>
                                        <a href="/our-purpose" class="main-link">Our Purpose</a>
                                        <a href="/governance" class="main-link">Governance</a>
                                    </div>
                                </div>
                                <div class="mega-menu-featured">
                                    <h4>Featured</h4>
                                    <div class="featured-image">
                                        <i class="fas fa-users" style="font-size: 3rem; color: #7ed957;"></i>
                                    </div>
                                    <div class="featured-links">
                                        <a href="/who-we-are" class="featured-link">About Us</a>
                                        <a href="/what-we-do" class="featured-link">Our Services</a>
                                        <a href="/our-purpose" class="featured-link">Our Mission</a>
                                        <a href="/governance" class="featured-link">Leadership</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a href="/governance" class="nav-item nav-link {{ request()->is('governance') ? 'active' : '' }}">Governance</a> --}}
                    <div class="nav-item dropdown">
                        <a href="/Industries" class="nav-link dropdown-toggle {{ request()->is('Industries') || request()->is('Industries/*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            Industries
                        </a>
                        <div class="mega-menu-container">
                            <div class="mega-menu-content">
                                <div class="mega-menu-sidebar">
                                    <a href="/Industries/consumer-business" class="sidebar-item {{ request()->is('Industries/consumer-business') ? 'active' : '' }}" data-section="consumer">
                                        <span>Consumer Business</span>
                                    </a>
                                    <a href="/Industries/financial-services" class="sidebar-item {{ request()->is('Industries/financial-services') || request()->is('Industries/financial-services/*') ? 'active' : '' }}" data-section="financial">
                                        <span>Financial Services</span>
                                        <span class="arrow">→</span>
                                    </a>
                                    <a href="/Industries/healthcare" class="sidebar-item {{ request()->is('Industries/healthcare') ? 'active' : '' }}" data-section="healthcare">
                                        <span>Healthcare</span>
                                    </a>
                                    <a href="/Industries/manufacturing" class="sidebar-item {{ request()->is('Industries/manufacturing') ? 'active' : '' }}" data-section="manufacturing">
                                        <span>Manufacturing</span>
                                    </a>
                                    <a href="/Industries/natural-resources-energy" class="sidebar-item {{ request()->is('Industries/natural-resources-energy') ? 'active' : '' }}" data-section="energy">
                                        <span>Natural Resources & Energy</span>
                                    </a>
                                    <a href="/Industries/not-for-profit" class="sidebar-item {{ request()->is('Industries/not-for-profit') ? 'active' : '' }}" data-section="nonprofit">
                                        <span>Not-for-profit</span>
                                    </a>
                                    <a href="/Industries/private-equity" class="sidebar-item {{ request()->is('Industries/private-equity') ? 'active' : '' }}" data-section="equity">
                                        <span>Private Equity</span>
                                    </a>
                                    <a href="/Industries/professional-services" class="sidebar-item {{ request()->is('Industries/professional-services') ? 'active' : '' }}" data-section="professional">
                                        <span>Professional Services</span>
                                    </a>
                                    <a href="/Industries/public-sector" class="sidebar-item {{ request()->is('Industries/public-sector') ? 'active' : '' }}" data-section="public">
                                        <span>Public Sector</span>
                                    </a>
                                    <a href="/Industries/real-estate-construction" class="sidebar-item {{ request()->is('Industries/real-estate-construction') ? 'active' : '' }}" data-section="realestate">
                                        <span>Real Estate & Construction</span>
                                    </a>
                                    <a href="/Industries/technology-media-entertainment" class="sidebar-item {{ request()->is('Industries/technology-media-entertainment') ? 'active' : '' }}" data-section="technology">
                                        <span>Technology, Media & Entertainment</span>
                                    </a>
                                    <a href="/Industries/telecommunications" class="sidebar-item {{ request()->is('Industries/telecommunications') ? 'active' : '' }}" data-section="telecom">
                                        <span>Telecommunications</span>
                                    </a>
                                    <a href="/Industries/transport" class="sidebar-item {{ request()->is('Industries/transport') ? 'active' : '' }}" data-section="transport">
                                        <span>Transport</span>
                                    </a>
                                </div>
                                <div class="mega-menu-main">
                                    <h3 id="industries-title">Industry Expertise</h3>
                                    <div class="main-links" id="industries-content">
                                        <!-- Default content - will be replaced by JavaScript -->
                                        <a href="/Industries/consumer-business" class="main-link">Consumer Business</a>
                                        <a href="/Industries/financial-services" class="main-link">Financial Services</a>
                                        <a href="/Industries/healthcare" class="main-link">Healthcare</a>
                                        <a href="/Industries/manufacturing" class="main-link">Manufacturing</a>
                                        <a href="/Industries/natural-resources-energy" class="main-link">Natural Resources & Energy</a>
                                        <a href="/Industries/not-for-profit" class="main-link">Not-for-profit</a>
                                        <a href="/Industries/private-equity" class="main-link">Private Equity</a>
                                        <a href="/Industries/professional-services" class="main-link">Professional Services</a>
                                        <a href="/Industries/public-sector" class="main-link">Public Sector</a>
                                        <a href="/Industries/real-estate-construction" class="main-link">Real Estate & Construction</a>
                                        <a href="/Industries/technology-media-entertainment" class="main-link">Technology, Media & Entertainment</a>
                                        <a href="/Industries/telecommunications" class="main-link">Telecommunications</a>
                                        <a href="/Industries/transport" class="main-link">Transport</a>
                                    </div>
                                </div>
                                <div class="mega-menu-featured">
                                    <h4>Featured</h4>
                                    <div class="featured-image">
                                        <i class="fas fa-industry" style="font-size: 3rem; color: #7ed957;"></i>
                                    </div>
                                    <div class="featured-links">
                                        <a href="/Industries/financial-services" class="featured-link">Financial Services</a>
                                        <a href="/Industries/healthcare" class="featured-link">Healthcare</a>
                                        <a href="/Industries/manufacturing" class="featured-link">Manufacturing</a>
                                        <a href="/Industries/technology-media-entertainment" class="featured-link">Technology</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<a href="#" class="nav-item nav-link">Blogs</a>-->
                    <a href="#" class="nav-item nav-link">Insights</a>
                    <a href="#" class="nav-item nav-link">Careers</a>
                    <a href="#" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="#" class="rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">EN</a>
            </div>
        </nav>
        
        @yield('hero')
    </div>
    <!-- Navbar End -->
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                {{-- <div class="col-md-6 col-lg-6 col-xl-4"> --}}
                    {{-- <div class="footer-item">
                        <a href="/" class="p-0">
                            <h4 class="text-white">
                                <img src="{{ asset('images/logo.png') }}" alt="Adamcresco Logo" class="me-3" style="height: 30px;">
                            </h4>
                        </a>
                        <p class="mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                        <div class="d-flex">
                            <a href="#" class="bg-primary d-flex rounded align-items-center py-2 px-3 me-2">
                                <i class="fas fa-apple-alt text-white"></i>
                                <div class="ms-3">
                                    <small class="text-white">Download on the</small>
                                    <h6 class="text-white">App Store</h6>
                                </div>
                            </a>
                            <a href="#" class="bg-dark d-flex rounded align-items-center py-2 px-3 ms-2">
                                <i class="fas fa-play text-primary"></i>
                                <div class="ms-3">
                                    <small class="text-white">Get it on</small>
                                    <h6 class="text-white">Google Play</h6>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                {{-- </div> --}}
                {{-- <div class="col-md-6 col-lg-6 col-xl-2"> --}}
                    {{-- <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    </div> --}}
                {{-- </div> --}}
                {{-- <div class="col-md-6 col-lg-6 col-xl-3"> --}}
                    {{-- <div class="footer-item">
                        <h4 class="text-white mb-4">Support</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                    </div> --}}
                {{-- </div> --}}
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">123 Street New York.USA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">(+012) 3456 7890</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="fab fa-firefox-browser text-primary me-3"></i>
                            <p class="text-white mb-0">Yoursite@ex.com</p>
                        </div>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                            <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>adamcresco</a>, All right reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- Mega Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Service content data
            const serviceContent = {
                assurance: {
                    title: "Audit & Assurance",
                    links: [
                        { url: "/services/assurance/ifrs-corporate-reporting", text: "IFRS and Corporate Reporting" },
                        { url: "/services/assurance/proposed-standards", text: "Proposed Standards" },
                        // { url: "/services/assurance/audit-services", text: "Audit Services" },
                        // { url: "/services/assurance/assurance-services", text: "Assurance Services" },
                        // { url: "/services/assurance/internal-audit", text: "Internal Audit" },
                        // { url: "/services/assurance/risk-management", text: "Risk Management" }
                    ]
                },
                tax: {
                    title: "Tax Services",
                    links: [
                        { url: "/services/tax/us-taxation", text: "US Taxation " },
                        { url: "/services/tax/canadian-tax-services", text: "Canadian Tax Services" },
                        // { url: "/services/tax/corporate-tax", text: "Corporate Tax" },
                        // { url: "/services/tax/personal-tax", text: "Personal Tax" },
                        // { url: "/services/tax/international-tax", text: "International Tax" },
                        // { url: "/services/tax/tax-planning", text: "Tax Planning" }
                    ]
                },
                advisory: {
                    title: "Advisory Services",
                    links: [
                        { url: "/services/advisory/deal-advisory", text: "Deal Advisory" },
                        { url: "/services/advisory/forensics", text: "Forensics" },
                        { url: "/services/advisory/management-consulting", text: "Management Consulting" },
                        { url: "/services/advisory/risk-advisory-services", text: "Risk Advisory Services" },
                        // { url: "/services/advisory/strategy-consulting", text: "Strategy Consulting" },
                        // { url: "/services/advisory/technology-advisory", text: "Technology Advisory" }
                    ]
                },
                business: {
                    title: "Business Services & Outsourcing",
                    links: [
                        { url: "/services/business-services/outsourced-accounting-bookkeeping", text: "Outsourced Accounting and Bookkeeping" },
                        { url: "/services/business-services/legal-company-secretarial", text: "Legal and Company Secretarial" },
                        { url: "/services/business-services/compliance-reporting", text: "Compliance and Reporting" },
                        { url: "/services/business-services/payroll-hr-global-mobility", text: "Payroll, HR and Global Mobility" },
                        { url: "/services/business-services/financial-reporting", text: "Financial Reporting" },
                        { url: "/services/business-services/finance-function-future", text: "Building the Finance Function of the Future" }
                    ]
                }
            };

            // Function to update service content
            function updateServiceContent(section) {
                const titleElement = document.getElementById('services-title');
                const contentElement = document.getElementById('services-content');
                
                if (serviceContent[section] && titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Update content after fade out
                    setTimeout(() => {
                        titleElement.textContent = serviceContent[section].title;
                        contentElement.innerHTML = '';
                        
                        serviceContent[section].links.forEach((link, index) => {
                            const linkElement = document.createElement('a');
                            linkElement.href = link.url;
                            linkElement.className = 'main-link';
                            linkElement.textContent = link.text;
                            linkElement.style.opacity = '0';
                            linkElement.style.transform = 'translateY(10px)';
                            contentElement.appendChild(linkElement);
                            
                            // Fade in new content
                            setTimeout(() => {
                                linkElement.style.opacity = '1';
                                linkElement.style.transform = 'translateY(0)';
                            }, index * 50);
                        });
                        
                        // Remove updating class
                        setTimeout(() => {
                            contentElement.classList.remove('updating');
                        }, serviceContent[section].links.length * 50 + 100);
                    }, currentLinks.length * 50 + 100);
                }
            }

            // Function to clear service content
            function clearServiceContent() {
                const titleElement = document.getElementById('services-title');
                const contentElement = document.getElementById('services-content');
                
                if (titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Clear content after fade out
                    setTimeout(() => {
                        titleElement.textContent = '';
                        contentElement.innerHTML = '';
                        contentElement.classList.remove('updating');
                    }, currentLinks.length * 50 + 100);
                }
            }

            // Sustainability content data - removed since no items have sub-submenus
            // const sustainabilityContent = {
            //     climate: {
            //         title: "Climate Change Risk",
            //         links: [
            //             { url: "/sustainability/climate-change-risk", text: "Climate Change Risk and Opportunity" },
            //             { url: "/sustainability/ghg-accounting", text: "GHG Accounting Report and Assurance" },
            //             { url: "/sustainability/sustainability-reporting", text: "Sustainability Reporting" },
            //             { url: "/sustainability/climate-finance-advisory", text: "Climate Finance Advisory" },
            //             { url: "/sustainability/carbon-emission", text: "Carbon Emission Services" }
            //         ]
            //     },
            //     ghg: {
            //         title: "GHG Accounting",
            //         links: [
            //             { url: "/sustainability/ghg-accounting", text: "GHG Accounting Report and Assurance" },
            //             { url: "/sustainability/sustainability-reporting", text: "Sustainability Reporting" },
            //             { url: "/sustainability/climate-finance-advisory", text: "Climate Finance Advisory" },
            //             { url: "/sustainability/carbon-emission", text: "Carbon Emission Services" }
            //         ]
            //     },
            //     reporting: {
            //         title: "Sustainability Reporting",
            //         links: [
            //             { url: "/sustainability/sustainability-reporting", text: "Sustainability Reporting" },
            //             { url: "/sustainability/climate-finance-advisory", text: "Climate Finance Advisory" },
            //             { url: "/sustainability/carbon-emission", text: "Carbon Emission Services" }
            //         ]
            //     },
            //     finance: {
            //         title: "Climate Finance Advisory",
            //         links: [
            //             { url: "/sustainability/climate-finance-advisory", text: "Climate Finance Advisory" },
            //             { url: "/sustainability/carbon-emission", text: "Carbon Emission Services" }
            //         ]
            //     },
            //     carbon: {
            //         title: "Carbon Emission Services",
            //         links: [
            //             { url: "/sustainability/carbon-emission", text: "Carbon Emission Services" }
            //         ]
            //     }
            // };

            // Function to update sustainability content
            function updateSustainabilityContent(section) {
                const titleElement = document.getElementById('sustainability-title');
                const contentElement = document.getElementById('sustainability-content');
                
                if (sustainabilityContent[section] && titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Update content after fade out
                    setTimeout(() => {
                        titleElement.textContent = sustainabilityContent[section].title;
                        contentElement.innerHTML = '';
                        
                        sustainabilityContent[section].links.forEach((link, index) => {
                            const linkElement = document.createElement('a');
                            linkElement.href = link.url;
                            linkElement.className = 'main-link';
                            linkElement.textContent = link.text;
                            linkElement.style.opacity = '0';
                            linkElement.style.transform = 'translateY(10px)';
                            contentElement.appendChild(linkElement);
                            
                            // Fade in new content
                            setTimeout(() => {
                                linkElement.style.opacity = '1';
                                linkElement.style.transform = 'translateY(0)';
                            }, index * 50);
                        });
                        
                        // Remove updating class
                        setTimeout(() => {
                            contentElement.classList.remove('updating');
                        }, sustainabilityContent[section].links.length * 50 + 100);
                    }, currentLinks.length * 50 + 100);
                }
            }

            // Function to clear sustainability content
            function clearSustainabilityContent() {
                const titleElement = document.getElementById('sustainability-title');
                const contentElement = document.getElementById('sustainability-content');
                
                if (titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Clear content after fade out
                    setTimeout(() => {
                        titleElement.textContent = '';
                        contentElement.innerHTML = '';
                        contentElement.classList.remove('updating');
                    }, currentLinks.length * 50 + 100);
                }
            }

            // Who We Are content data - removed since no items have sub-submenus
            // const aboutContent = {
            //     about: {
            //         title: "Who We Are",
            //         links: [
            //             { url: "/who-we-are", text: "About Adamcresco" },
            //             { url: "/who-we-are/our-story", text: "Our Story" },
            //             { url: "/who-we-are/our-values", text: "Our Values" },
            //             { url: "/who-we-are/our-culture", text: "Our Culture" },
            //             { url: "/who-we-are/our-people", text: "Our People" },
            //             { url: "/who-we-are/leadership", text: "Leadership Team" }
            //         ]
            //     },
            //     services: {
            //         title: "What We Do",
            //         links: [
            //             { url: "/what-we-do", text: "Our Services Overview" },
            //             { url: "/services/assurance", text: "Audit & Assurance" },
            //             { url: "/services/tax", text: "Tax Services" },
            //             { url: "/services/advisory", text: "Advisory Services" },
            //             { url: "/services/business-services", text: "Business Services" },
            //             { url: "/sustainability", text: "Sustainability Services" }
            //         ]
            //     },
            //     purpose: {
            //         title: "Our Purpose",
            //         links: [
            //             { url: "/our-purpose", text: "Our Mission" },
            //             { url: "/our-purpose/vision", text: "Our Vision" },
            //             { url: "/our-purpose/values", text: "Our Values" },
            //             { url: "/our-purpose/impact", text: "Our Impact" },
            //             { url: "/our-purpose/commitment", text: "Our Commitment" }
            //         ]
            //     },
            //     governance: {
            //         title: "Governance",
            //         links: [
            //             { url: "/governance", text: "Board of Directors" },
            //             { url: "/governance/leadership", text: "Leadership Team" },
            //             { url: "/governance/policies", text: "Policies & Procedures" },
            //             { url: "/governance/compliance", text: "Compliance" },
            //             { url: "/governance/transparency", text: "Transparency" }
            //         ]
            //     }
            // };

            // Function to update about content
            function updateAboutContent(section) {
                const titleElement = document.getElementById('about-title');
                const contentElement = document.getElementById('about-content');
                
                if (aboutContent[section] && titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Update content after fade out
                    setTimeout(() => {
                        titleElement.textContent = aboutContent[section].title;
                        contentElement.innerHTML = '';
                        
                        aboutContent[section].links.forEach((link, index) => {
                            const linkElement = document.createElement('a');
                            linkElement.href = link.url;
                            linkElement.className = 'main-link';
                            linkElement.textContent = link.text;
                            linkElement.style.opacity = '0';
                            linkElement.style.transform = 'translateY(10px)';
                            contentElement.appendChild(linkElement);
                            
                            // Fade in new content
                            setTimeout(() => {
                                linkElement.style.opacity = '1';
                                linkElement.style.transform = 'translateY(0)';
                            }, index * 50);
                        });
                        
                        // Remove updating class
                        setTimeout(() => {
                            contentElement.classList.remove('updating');
                        }, aboutContent[section].links.length * 50 + 100);
                    }, currentLinks.length * 50 + 100);
                }
            }

            // Function to clear about content
            function clearAboutContent() {
                const titleElement = document.getElementById('about-title');
                const contentElement = document.getElementById('about-content');
                
                if (titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Clear content after fade out
                    setTimeout(() => {
                        titleElement.textContent = '';
                        contentElement.innerHTML = '';
                        contentElement.classList.remove('updating');
                    }, currentLinks.length * 50 + 100);
                }
            }
            
            // Industries content data
            const industriesContent = {
                financial: {
                    title: "Financial Services",
                    links: [
                        { url: "/Industries/financial-services/asset-management", text: "Asset Management" },
                        { url: "/Industries/financial-services/financial-services-advisory", text: "Financial Services Advisory" },
                        { url: "/Industries/financial-services/financial-services-tax", text: "Financial Services Tax" },
                        { url: "/Industries/financial-services/insurance", text: "Insurance" },
                        { url: "/Industries/financial-services/banking", text: "Banking & Capital Markets" }
                    ]
                }
            };

            // Function to update industries content
            function updateIndustriesContent(section) {
                const titleElement = document.getElementById('industries-title');
                const contentElement = document.getElementById('industries-content');
                
                if (industriesContent[section] && titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Update content after fade out
                    setTimeout(() => {
                        titleElement.textContent = industriesContent[section].title;
                        contentElement.innerHTML = '';
                        
                        industriesContent[section].links.forEach((link, index) => {
                            const linkElement = document.createElement('a');
                            linkElement.href = link.url;
                            linkElement.className = 'main-link';
                            linkElement.textContent = link.text;
                            linkElement.style.opacity = '0';
                            linkElement.style.transform = 'translateY(10px)';
                            contentElement.appendChild(linkElement);
                            
                            // Fade in new content
                            setTimeout(() => {
                                linkElement.style.opacity = '1';
                                linkElement.style.transform = 'translateY(0)';
                            }, index * 50);
                        });
                        
                        // Remove updating class
                        setTimeout(() => {
                            contentElement.classList.remove('updating');
                        }, industriesContent[section].links.length * 50 + 100);
                    }, currentLinks.length * 50 + 100);
                }
            }

            // Function to clear industries content
            function clearIndustriesContent() {
                const titleElement = document.getElementById('industries-title');
                const contentElement = document.getElementById('industries-content');
                
                if (titleElement && contentElement) {
                    // Add updating class for transition effect
                    contentElement.classList.add('updating');
                    
                    // Fade out current content
                    const currentLinks = contentElement.querySelectorAll('.main-link');
                    currentLinks.forEach((link, index) => {
                        setTimeout(() => {
                            link.style.opacity = '0';
                            link.style.transform = 'translateY(-10px)';
                        }, index * 50);
                    });
                    
                    // Clear content after fade out
                    setTimeout(() => {
                        titleElement.textContent = '';
                        contentElement.innerHTML = '';
                        contentElement.classList.remove('updating');
                    }, currentLinks.length * 50 + 100);
                }
            }
            
            // Mega menu functionality
            const dropdownItems = document.querySelectorAll('.nav-item.dropdown');
            
            dropdownItems.forEach(function(dropdown) {
                const megaMenu = dropdown.querySelector('.mega-menu-container');
                const navLink = dropdown.querySelector('.nav-link');
                
                if (megaMenu) {
                    // Show mega menu on hover
                    dropdown.addEventListener('mouseenter', function() {
                        megaMenu.classList.add('show');
                    });
                    
                    // Hide mega menu when mouse leaves
                    dropdown.addEventListener('mouseleave', function() {
                        megaMenu.classList.remove('show');
                    });
                    
                    // Prevent menu from closing when hovering over the mega menu content
                    megaMenu.addEventListener('mouseenter', function() {
                        megaMenu.classList.add('show');
                    });
                    
                    megaMenu.addEventListener('mouseleave', function() {
                        megaMenu.classList.remove('show');
                    });
                }
            });
            
            // Sidebar item hover effects with dynamic content
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            sidebarItems.forEach(function(item) {
                item.addEventListener('mouseenter', function() {
                    // Remove active class from all sidebar items in the same mega menu
                    const megaMenu = item.closest('.mega-menu-container');
                    if (megaMenu) {
                        const sameMenuItems = megaMenu.querySelectorAll('.sidebar-item');
                        sameMenuItems.forEach(function(otherItem) {
                            otherItem.classList.remove('active');
                        });
                    }
                    
                    // Add active class to current item
                    item.classList.add('active');
                    
                    // Update content based on which mega menu this belongs to
                    const section = item.getAttribute('data-section');
                    if (section) {
                        // Determine which mega menu this is and call appropriate update function
                        const megaMenuContainer = item.closest('.mega-menu-container');
                        if (megaMenuContainer) {
                            const servicesMenu = megaMenuContainer.querySelector('#services-content');
                            const sustainabilityMenu = megaMenuContainer.querySelector('#sustainability-content');
                            const aboutMenu = megaMenuContainer.querySelector('#about-content');
                            const industriesMenu = megaMenuContainer.querySelector('#industries-content');
                            
                            // Check if this section has content data (sub-submenus)
                            const hasContent = (servicesMenu && serviceContent[section]) ||
                                             (industriesMenu && industriesContent[section]);
                            
                            if (hasContent) {
                                // Update content for items with sub-submenus
                                if (servicesMenu && serviceContent[section]) {
                                    updateServiceContent(section);
                                } else if (industriesMenu && industriesContent[section]) {
                                    updateIndustriesContent(section);
                                }
                            } else {
                                // Clear content for items without sub-submenus
                                if (servicesMenu) {
                                    clearServiceContent();
                                } else if (sustainabilityMenu) {
                                    clearSustainabilityContent();
                                } else if (aboutMenu) {
                                    clearAboutContent();
                                } else if (industriesMenu) {
                                    clearIndustriesContent();
                                }
                            }
                        }
                    }
                });
            });



            // Mobile menu handling
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            
            if (navbarToggler && navbarCollapse) {
                navbarToggler.addEventListener('click', function() {
                    // Close all mega menus when mobile menu is toggled
                    const megaMenus = document.querySelectorAll('.mega-menu-container');
                    megaMenus.forEach(function(menu) {
                        menu.classList.remove('show');
                    });
                });
            }
            
            // Close mega menus when clicking outside
            document.addEventListener('click', function(event) {
                const dropdowns = document.querySelectorAll('.nav-item.dropdown');
                dropdowns.forEach(function(dropdown) {
                    if (!dropdown.contains(event.target)) {
                        const megaMenu = dropdown.querySelector('.mega-menu-container');
                        if (megaMenu) {
                            megaMenu.classList.remove('show');
                        }
                    }
                });
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html> 