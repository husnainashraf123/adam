@extends('layouts.app')

@section('title', 'Internal Audit Services - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Internal Audit Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Internal Audit</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Internal Audit Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Internal Audit Services</h4>
                    <h1 class="display-5 mb-4">Strengthen Governance and Enhance Operational Effectiveness</h1>
                    <p class="mb-4">Strengthen your governance framework and enhance operational effectiveness with Adam Cresco's expert Internal Audit services. We provide an independent, objective assurance and consulting activity designed to add value and improve your organization's operations.</p>
                    
                    <p class="mb-4">Our experienced professionals employ a systematic, risk-based approach to evaluate the effectiveness of your risk management, control, and governance processes. We work collaboratively with management or audit committee to identify potential vulnerabilities, assess the adequacy of internal controls, recommend practical improvements, and ensure compliance with policies and regulations.</p>
                    
                    <p class="mb-4">Whether you need to establish an internal audit function, supplement your existing team (co-sourcing), or fully outsource the activity, Adam Cresco delivers tailored solutions that provide crucial assurance, drive efficiencies, and help safeguard your organization's assets and reputation.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Risk Management</h4>
                                    <p class="mb-0">Systematic evaluation of risk management processes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-cogs fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Control Assessment</h4>
                                    <p class="mb-0">Evaluate effectiveness of internal controls</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-users fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Collaborative Approach</h4>
                                    <p class="mb-0">Work with management and audit committees</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-line fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Operational Efficiency</h4>
                                    <p class="mb-0">Drive efficiencies and safeguard assets</p>
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
                    <img src="{{ asset('img/service-assurance-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Internal Audit Services">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/service-assurance-2.svg') }}?v={{ time() }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="Certification">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/service-assurance-3.svg') }}?v={{ time() }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="Audit Checklist">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/service-assurance-4.svg') }}?v={{ time() }}" class="img-fluid rounded-bottom w-100" alt="Financial Report">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Internal Audit Services End -->
@endsection 