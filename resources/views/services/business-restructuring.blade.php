@extends('layouts.app')

@section('title', 'Business Restructuring Services - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Business Restructuring Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Business Restructuring</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Business Restructuring Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Business Restructuring Services</h4>
                    <h1 class="display-5 mb-4">Comprehensive Restructuring for Business Transformation</h1>
                    <p class="mb-4">Whether your organization is seeking significant performance improvements, undergoing a merger or acquisition, needing to adapt to disruptive market changes, or even facing financial distress as a loss-making entity, our experienced team provides objective analysis and actionable guidance.</p>
                    
                    <p class="mb-4">We work closely with management and stakeholders to assess the situation, identify core issues, and develop comprehensive restructuring plans. Our expertise spans operational adjustments, financial reorganization, strategic realignment, and turnaround management.</p>
                    
                    <p class="mb-4">Crucially, we leverage technical insights and innovative strategies specifically designed to chart a clear path back towards sustainable profitability for businesses currently experiencing losses. Our overarching aim is to stabilize operations, optimize performance, preserve value, and ultimately position your company for a resilient and successful future.</p>
                    
                    <p class="mb-4"><strong>Trust Adam Cresco to provide the decisive support needed to effectively reshape and revitalize your business during pivotal moments.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-line fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Performance Improvement</h4>
                                    <p class="mb-0">Significant enhancements to business performance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-handshake fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Merger & Acquisition</h4>
                                    <p class="mb-0">Support during complex business transitions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-sync-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Turnaround Management</h4>
                                    <p class="mb-0">Path to sustainable profitability for loss-making entities</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-rocket fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Strategic Realignment</h4>
                                    <p class="mb-0">Adapt to disruptive market changes</p>
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
                    <img src="{{ asset('img/service-advisory-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Business Restructuring Services">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/service-advisory-2.svg') }}?v={{ time() }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="Strategic Collaboration">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/service-advisory-3.svg') }}?v={{ time() }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="Strategy Document">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/service-advisory-4.svg') }}?v={{ time() }}" class="img-fluid rounded-bottom w-100" alt="Advisory Meeting">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Business Restructuring Services End -->
@endsection 