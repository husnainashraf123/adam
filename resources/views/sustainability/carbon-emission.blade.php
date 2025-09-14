@extends('layouts.app')

@section('title', 'Carbon Emission Services - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Carbon Emission Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sustainability</a></li>
            <li class="breadcrumb-item active text-primary">Carbon Emission</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Carbon Emission Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Carbon Emission Services</h4>
                    <h1 class="display-5 mb-4">Strategic Carbon Management and Advisory</h1>
                    <p class="mb-4">Navigate the critical intersection of carbon emissions, finance, and strategy with Adam Cresco's expert Carbon Emission Services. We provide comprehensive support to help your organization understand, measure, and manage its carbon footprint in an increasingly carbon-constrained world.</p>
                    
                    <p class="mb-4">Our services include detailed analysis of existing and emerging carbon pricing mechanisms (such as carbon taxes and emissions trading schemes), assessing their direct financial and operational impacts on your business. We model potential scenarios, helping you understand risks and opportunities associated with different carbon price levels.</p>
                    
                    <p class="mb-4">Furthermore, our insights inform effective internal policy-making, guiding the development of robust decarbonization strategies, setting meaningful reduction targets, and aligning your operations with climate goals and regulatory expectations.</p>
                    
                    <p class="mb-4"><strong>Partner with Adam Cresco for strategic guidance on managing carbon emissions, navigating pricing impacts, and integrating climate considerations into your core business decisions.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-cloud fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Carbon Pricing Analysis</h4>
                                    <p class="mb-0">Assess impact of carbon taxes and trading schemes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-balance-scale fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Scenario Modeling</h4>
                                    <p class="mb-0">Understand risks and opportunities of carbon pricing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-leaf fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Decarbonization Strategy</h4>
                                    <p class="mb-0">Develop robust strategies and reduction targets</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-cogs fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Policy Guidance</h4>
                                    <p class="mb-0">Align operations with climate goals and regulations</p>
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
                    <img src="{{ asset('img/service-sustainability-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Carbon Emission Services">
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
<!-- Carbon Emission Services End -->
@endsection 