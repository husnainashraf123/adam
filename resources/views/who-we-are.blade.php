@extends('layouts.app')

@section('title', 'Who We Are - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Who We Are</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Who We Are</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Who We Are Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('img/service-company-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Adamcresco Company Overview">
                    <div class="" style="position: absolute; top: 10px; right: 10px; z-index: 10;">
                        <img src="{{ asset('img/service-company-2-simple.svg') }}?v={{ time() }}&r={{ rand(1000,9999) }}" class="img-fluid" style="width: 120px; height: 120px; opacity: 0.9;" alt="Mission & Values">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/service-company-3.svg') }}?v={{ time() }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="Corporate Governance">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/service-company-4.svg') }}?v={{ time() }}" class="img-fluid rounded-bottom w-100" alt="Our Purpose & Vision">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Adamcresco</h4>
                    <h1 class="display-5 mb-4">US Based Firm Serving Clients Across USA</h1>
                    <p class="mb-4">Adam cresco is an US based firm serving clients across USA with expert support in audit, Taxation, Advisory, & ESG strategy. We are helping business to navigate financial complexity, drive growth, & embrace sustainability.</p>
                    
                    <p class="mb-4">Whether you are a start-up, a growing, a loss making, or a mature business entity looking to achieve your objective either achieving short term profit or long term wealth management of your shareholders, or reporting issues or any other related issue, we brings clarity, compliance and long-term values.</p>
                    
                    <p class="mb-4"><strong>We're not just accountants. We're problem-solvers, partners, and progress enablers.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-check-circle fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Expert Support</h4>
                                    <p class="mb-0">Audit, Taxation, Advisory & ESG Strategy</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-check-circle fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Comprehensive Services</h4>
                                    <p class="mb-0">Financial complexity navigation & growth</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-check-circle fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Sustainability Focus</h4>
                                    <p class="mb-0">ESG strategy & long-term value creation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-check-circle fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>All Business Types</h4>
                                    <p class="mb-0">Start-ups to mature business entities</p>
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
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;"></p>
                                </div>
                            </div>
                        </div>

                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Who We Are End -->
@endsection 