@extends('layouts.app')

@section('title', 'Assurance Services - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Assurance Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Assurance</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Assurance Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Assurance Services</h4>
                    <h1 class="display-5 mb-4">Independent, Objective Verification for Trust and Confidence</h1>
                    <p class="mb-4">Our Assurance Services provide the independent, objective verification essential for building trust and confidence in today's complex business landscape. We go beyond mere compliance, offering rigorous assessments of your financial statements, internal controls, and operational data.</p>
                    
                    <p class="mb-4">Our dedicated team employs deep industry knowledge and meticulous methodologies to deliver high-quality audits, reviews, and other assurance engagements. By providing clarity and reliable insights, we empower your stakeholders – from investors and lenders to management and regulators – with the credible information they need, ultimately strengthening governance, mitigating risk, and supporting your strategic decision-making.</p>
                    
                    <p class="mb-4"><strong>Choose Adam Cresco for assurance that adds tangible value and enhances your organization's integrity.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Independent Verification</h4>
                                    <p class="mb-0">Objective assessment of financial statements and controls</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-line fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Risk Mitigation</h4>
                                    <p class="mb-0">Identify and address potential risks and vulnerabilities</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-users fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Stakeholder Confidence</h4>
                                    <p class="mb-0">Build trust with investors, lenders, and regulators</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-lightbulb fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Strategic Insights</h4>
                                    <p class="mb-0">Valuable information for decision-making processes</p>
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
                    <img src="{{ asset('img/service-assurance-1.svg') }}" class="img-fluid rounded w-100" alt="Assurance Services">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/service-assurance-2.svg') }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="Certification">
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
<!-- Assurance Services End -->
@endsection 