@extends('layouts.app')

@section('title', 'GHG Accounting Report and Assurance - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">GHG Accounting Report and Assurance</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sustainability</a></li>
            <li class="breadcrumb-item active text-primary">GHG Accounting</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- GHG Accounting Report and Assurance Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">GHG Accounting Report and Assurance</h4>
                    <h1 class="display-5 mb-4">Accurate Carbon Footprint Measurement and Verification</h1>
                    <p class="mb-4">Accurately measuring, tracking, and reporting your organization's carbon footprint is increasingly crucial for regulatory compliance, stakeholder relations, and informed strategic decision-making. Our experts assist you in developing robust GHG inventories according to recognized standards (like the GHG Protocol), ensuring comprehensive data collection and calculation across relevant emission scopes.</p>
                    
                    <p class="mb-4">Furthermore, we provide independent Assurance over your GHG reports, lending vital credibility and reliability to your emissions data through rigorous verification procedures. This third-party validation enhances stakeholder confidence, strengthens your environmental claims, and supports your journey towards effective climate risk management and sustainability goals.</p>
                    
                    <p class="mb-4"><strong>Trust Adam Cresco for accurate GHG accounting and credible assurance that underpins your climate commitments.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-calculator fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>GHG Inventories</h4>
                                    <p class="mb-0">Robust inventories according to GHG Protocol standards</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Independent Assurance</h4>
                                    <p class="mb-0">Third-party validation of emissions data</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-bar fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Comprehensive Reporting</h4>
                                    <p class="mb-0">Data collection across all emission scopes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-users fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Stakeholder Confidence</h4>
                                    <p class="mb-0">Enhanced credibility and environmental claims</p>
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
                    <img src="{{ asset('img/service-sustainability-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="GHG Accounting">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/service-sustainability-2.svg') }}?v={{ time() }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="Carbon Footprint Analysis">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/service-sustainability-3.svg') }}?v={{ time() }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="Sustainability Reporting">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/service-sustainability-4.svg') }}?v={{ time() }}" class="img-fluid rounded-bottom w-100" alt="Climate Finance Advisory">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- GHG Accounting Report and Assurance End -->
@endsection 