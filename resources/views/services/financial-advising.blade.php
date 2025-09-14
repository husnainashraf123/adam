@extends('layouts.app')

@section('title', 'Financial Advising Services - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Financial Advising Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Financial Advising</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Financial Advising Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Financial Advising Services</h4>
                    <h1 class="display-5 mb-4">Expert Guidance for Your Financial Journey</h1>
                    <p class="mb-4">We understand that navigating the complexities of wealth management, investment strategies, and long-term financial planning requires expert guidance tailored to your unique circumstances and goals. Our advisors work closely with you to understand your aspirations, risk tolerance, and overall financial picture – whether personal, business-related, or integrated.</p>
                    
                    <p class="mb-4">We offer strategic advice on areas such as wealth accumulation, retirement planning, investment oversight, risk management, and estate considerations. By providing objective insights and developing clear, actionable strategies, Adam Cresco empowers you to build, manage, and protect your wealth effectively, ensuring you are well-positioned to achieve your financial objectives.</p>
                    
                    <p class="mb-4"><strong>Partner with us for trusted guidance on your financial journey.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-line fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Wealth Management</h4>
                                    <p class="mb-0">Comprehensive wealth accumulation strategies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-piggy-bank fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Retirement Planning</h4>
                                    <p class="mb-0">Secure your financial future</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-pie fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Investment Oversight</h4>
                                    <p class="mb-0">Strategic investment management and monitoring</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Risk Management</h4>
                                    <p class="mb-0">Protect your wealth and assets</p>
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
                    <img src="{{ asset('img/service-advisory-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Financial Advisory Services">
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
<!-- Financial Advising Services End -->
@endsection 