@extends('layouts.app')

@section('title', 'Climate Change Risk and Opportunity - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Climate Change Risk and Opportunity</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sustainability</a></li>
            <li class="breadcrumb-item active text-primary">Climate Change Risk</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Climate Change Risk and Opportunity Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Climate Change Risk and Opportunity</h4>
                    <h1 class="display-5 mb-4">Navigate Climate Risks and Seize Opportunities</h1>
                    <p class="mb-4">We recognize that climate change presents both significant risks – including physical impacts, transition challenges, and increasing regulatory pressures – and substantial opportunities for innovation, efficiency gains, and market leadership.</p>
                    
                    <p class="mb-4">Our expert team helps your organization identify, assess, and understand how these complex factors impact your strategy, operations, supply chain, and financial performance. We provide insightful analysis and support the development of robust strategies to mitigate climate-related risks, enhance resilience, improve sustainability reporting, and capitalize on emerging green economy opportunities.</p>
                    
                    <p class="mb-4"><strong>By integrating climate considerations into your core decision-making, Adam Cresco helps you build long-term value, meet growing stakeholder and investor expectations, and position your business for sustainable success in a changing world.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-exclamation-triangle fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Risk Assessment</h4>
                                    <p class="mb-0">Identify and assess climate-related risks</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-lightbulb fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Opportunity Analysis</h4>
                                    <p class="mb-0">Innovation and efficiency gains</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Resilience Building</h4>
                                    <p class="mb-0">Enhance organizational resilience</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-line fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Strategic Integration</h4>
                                    <p class="mb-0">Climate considerations in decision-making</p>
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
                    <img src="{{ asset('img/service-sustainability-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Climate Change Risk Assessment">
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
<!-- Climate Change Risk and Opportunity End -->
@endsection 