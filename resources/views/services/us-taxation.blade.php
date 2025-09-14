@extends('layouts.app')

@section('title', 'US Taxation Services - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">US Taxation Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">US Taxation</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- US Taxation Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">US Taxation Services</h4>
                    <h1 class="display-5 mb-4">Comprehensive Tax Compliance and Advisory</h1>
                    <p class="mb-4">The complexity of federal, state, and local tax laws requires specialized knowledge and diligent attention – qualities our dedicated tax professionals bring to every engagement. We provide comprehensive tax compliance and advisory services for businesses and individuals, ensuring accurate and timely filing while identifying opportunities for strategic tax planning.</p>
                    
                    <p class="mb-4">From corporate and partnership returns to individual filings and addressing multi-state or potential international considerations, our goal is to minimize your tax burden legally and help you make informed financial decisions.</p>
                    
                    <p class="mb-4"><strong>Trust Adam Cresco to manage your US tax obligations effectively, keeping you compliant and optimizing your outcomes in an ever-evolving regulatory environment.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-calculator fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Tax Compliance</h4>
                                    <p class="mb-0">Accurate and timely filing for all tax obligations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-lightbulb fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Strategic Planning</h4>
                                    <p class="mb-0">Identify opportunities for tax optimization</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-building fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Corporate & Partnership</h4>
                                    <p class="mb-0">Comprehensive business tax services</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-user fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Individual Filings</h4>
                                    <p class="mb-0">Personal tax preparation and planning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-4 mt-4">
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Learn More</a>
                        </div>
                        <!-- Contact block commented out

                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Contact Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">+01234567890</p>
                                </div>
                            </div>
                        </div>

                        -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('img/service-us-tax-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="US Taxation Services">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/service-us-tax-2.svg') }}?v={{ time() }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="Tax Charts">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/service-us-tax-3.svg') }}?v={{ time() }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="IRS Building">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/service-us-tax-4.svg') }}?v={{ time() }}" class="img-fluid rounded-bottom w-100" alt="Tax Refund Check">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- US Taxation Services End -->
@endsection 