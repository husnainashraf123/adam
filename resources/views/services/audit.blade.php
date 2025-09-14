@extends('layouts.app')

@section('title', 'Audit Services - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Audit Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Audit</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Audit Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Audit Services</h4>
                    <h1 class="display-5 mb-4">Robust and Independent Financial Examination</h1>
                    <p class="mb-4">Our Audit services provide a robust and independent examination of your financial statements, ensuring they fairly present your financial position and performance in accordance with applicable accounting standards (like GAAP or IFRS).</p>
                    
                    <p class="mb-4">Our experienced auditors utilize a risk-based methodology, leveraging deep industry knowledge and advanced techniques to perform thorough and efficient audits. We understand an audit is more than a compliance necessity; it's an opportunity to gain valuable insights.</p>
                    
                    <p class="mb-4">While our primary focus is delivering a credible opinion on your financial reporting, our process often identifies areas for strengthening internal controls and improving operational efficiencies.</p>
                    
                    <p class="mb-4"><strong>Trust Adam Cresco to deliver an audit that provides the highest level of assurance to your stakeholders, enhancing transparency and building confidence in your financial integrity.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-search-dollar fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Independent Examination</h4>
                                    <p class="mb-0">Robust assessment of financial statements and performance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Risk-Based Approach</h4>
                                    <p class="mb-0">Focused methodology for thorough and efficient audits</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-cogs fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Internal Controls</h4>
                                    <p class="mb-0">Strengthen controls and improve operational efficiency</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-line fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Valuable Insights</h4>
                                    <p class="mb-0">Beyond compliance - strategic business intelligence</p>
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
                    <img src="{{ asset('img/service-assurance-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Audit Services">
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
<!-- Audit Services End -->
@endsection 