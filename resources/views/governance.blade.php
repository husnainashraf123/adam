@extends('layouts.app')

@section('title', 'Governance - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Governance</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Governance</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Governance Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Governance</h4>
            <h1 class="display-5 mb-4">Strong Governance Isn't Just Policy—It's How We Earn Trust</h1>
            <p class="mb-0">As a purpose-driven firm, we're intentional about the clients we work with, the standards we uphold, and the values we live by. We believe responsible business isn't optional—it's essential.</p>
        </div>

        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Accountability & Transparency</h4>
                    <h2 class="mb-4">That's why we track our performance, share our progress, and welcome transparency</h2>
                    <p class="mb-4">By doing so, we stay aligned with our mission and ensure that the value we create is sustainable, measurable, and meaningful—for our clients, our people, and society at large.</p>
                    
                    <p class="mb-4"><strong>Governance isn't paperwork. It's how we prove our purpose—every day, every decision.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-bar fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Performance Tracking</h4>
                                    <p class="mb-0">Comprehensive monitoring of our impact and results</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-eye fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Transparency</h4>
                                    <p class="mb-0">Open sharing of progress and performance metrics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-bullseye fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Mission Alignment</h4>
                                    <p class="mb-0">Ensuring all decisions align with our core purpose</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-balance-scale fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Responsible Business</h4>
                                    <p class="mb-0">Essential practices for sustainable operations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('img/service-company-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Corporate Governance">
                    <div class="" style="position: absolute; top: 10px; right: 10px; z-index: 10;">
                        <img src="{{ asset('img/service-company-2.svg') }}?v={{ time() }}&r={{ rand(1000,9999) }}" class="img-fluid" style="width: 120px; height: 120px; opacity: 0.9; border: 2px solid #fff; border-radius: 10px;" alt="Mission & Values">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/service-company-3.svg') }}?v={{ time() }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="Corporate Governance">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/service-company-4.svg') }}?v={{ time() }}" class="img-fluid rounded-bottom w-100" alt="Our Purpose & Vision">
                    </div>
                </div>
            </div>
        </div>

        <!-- Governance Principles -->
        <div class="row g-5 mt-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-light rounded p-5">
                    <div class="text-center mb-5">
                        <h2 class="mb-4">Our Governance Principles</h2>
                        <p class="fs-5">The foundation of our responsible business practices</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-4">
                                <i class="fas fa-user-check fa-4x text-primary mb-4"></i>
                                <h4>Client Selection</h4>
                                <p>Intentional about the clients we work with, ensuring alignment with our values and purpose.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-4">
                                <i class="fas fa-award fa-4x text-primary mb-4"></i>
                                <h4>High Standards</h4>
                                <p>Upholding the highest professional and ethical standards in all our work and relationships.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-4">
                                <i class="fas fa-heart fa-4x text-primary mb-4"></i>
                                <h4>Core Values</h4>
                                <p>Living by the values we espouse, ensuring consistency between what we say and what we do.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="text-center p-4">
                                <i class="fas fa-shield-alt fa-4x text-primary mb-4"></i>
                                <h4>Responsible Practice</h4>
                                <p>Believing that responsible business isn't optional—it's essential to our success and impact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Value Creation Framework -->
        <div class="row g-5 mt-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="bg-primary rounded p-5 text-white">
                    <div class="text-center mb-5">
                        <h2 class="mb-4">Sustainable, Measurable, and Meaningful Value</h2>
                        <p class="fs-5">Our governance ensures the value we create benefits all stakeholders</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="fas fa-leaf fa-3x mb-3"></i>
                                <h4>Sustainable</h4>
                                <p>Creating long-term value that endures and grows over time, benefiting future generations.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="fas fa-chart-line fa-3x mb-3"></i>
                                <h4>Measurable</h4>
                                <p>Quantifiable impact that can be tracked, reported, and improved upon continuously.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <i class="fas fa-star fa-3x mb-3"></i>
                                <h4>Meaningful</h4>
                                <p>Creating real significance and positive change for our clients, people, and society.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daily Commitment -->
        <div class="row g-5 mt-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded p-5 text-center">
                    <h2 class="mb-4">Our Daily Commitment</h2>
                    <p class="fs-5 mb-4">Governance isn't paperwork. It's how we prove our purpose—every day, every decision.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-calendar-check fa-3x text-primary me-4"></i>
                                <div class="text-start">
                                    <h4>Every Day</h4>
                                    <p class="mb-0">Consistent application of our governance principles in all our daily operations and interactions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-cogs fa-3x text-primary me-4"></i>
                                <div class="text-start">
                                    <h4>Every Decision</h4>
                                    <p class="mb-0">Ensuring each choice we make aligns with our purpose and creates positive impact.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Governance End -->
@endsection 