@extends('layouts.app')

@section('title', 'Sustainability Reporting - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Sustainability Reporting</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sustainability</a></li>
            <li class="breadcrumb-item active text-primary">Sustainability Reporting</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Sustainability Reporting Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Sustainability Reporting</h4>
                    <h1 class="display-5 mb-4">Effective ESG Performance Communication</h1>
                    <p class="mb-4">Effectively communicate your commitment to environmental, social, and governance (ESG) performance with Adam Cresco's comprehensive Sustainability Reporting services. As stakeholders – including investors, customers, employees, and regulators – increasingly demand transparency beyond traditional financial metrics, developing clear, credible, and impactful sustainability reports is essential.</p>
                    
                    <p class="mb-4">We guide you through the complexities of identifying material ESG topics relevant to your business, collecting accurate data, and structuring compelling reports aligned with leading global frameworks (such as GRI, SASB, TCFD, IFRS S1 & S2 or Integrated Reporting). Our expertise ensures your reporting not only meets evolving disclosure requirements and stakeholder expectations but also authentically reflects your organization's sustainability initiatives, risks, opportunities, and progress.</p>
                    
                    <p class="mb-4"><strong>Partner with Adam Cresco to enhance transparency, build trust, strengthen your reputation, and effectively showcase your dedication to sustainable and responsible business practices.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-bar fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>ESG Performance</h4>
                                    <p class="mb-0">Environmental, social, and governance metrics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-globe fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Global Frameworks</h4>
                                    <p class="mb-0">GRI, SASB, TCFD, IFRS S1 & S2 compliance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-eye fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Transparency</h4>
                                    <p class="mb-0">Clear and credible sustainability communication</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-handshake fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Stakeholder Trust</h4>
                                    <p class="mb-0">Build trust and strengthen reputation</p>
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
                    <img src="{{ asset('img/service-sustainability-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Sustainability Reporting">
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
<!-- Sustainability Reporting End -->
@endsection 