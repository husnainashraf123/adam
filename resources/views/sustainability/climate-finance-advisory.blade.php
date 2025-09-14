@extends('layouts.app')

@section('title', 'Climate Finance Advisory - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Climate Finance Advisory</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sustainability</a></li>
            <li class="breadcrumb-item active text-primary">Climate Finance Advisory</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Climate Finance Advisory Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Climate Finance Advisory</h4>
                    <h1 class="display-5 mb-4">Mobilize Capital for Climate Solutions</h1>
                    <p class="mb-4">We assist organizations in identifying, accessing, and effectively deploying capital for climate mitigation and adaptation initiatives. Our specialists understand the complex interplay between climate objectives and financial mechanisms, including green bonds, climate funds, carbon market opportunities, blended finance structures, and public incentives.</p>
                    
                    <p class="mb-4">We provide expert advisory on structuring investments, developing bankable climate projects, aligning financial strategies with decarbonization pathways, and attracting climate-focused investors. Whether you are seeking funding for sustainable infrastructure, renewable energy projects, or resilience measures, or aiming to strategically allocate capital towards climate solutions, Adam Cresco provides the crucial financial expertise to mobilize resources, optimize investment decisions, and drive sustainable growth in a low-carbon economy.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-money-bill-wave fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Capital Access</h4>
                                    <p class="mb-0">Identify and access climate-focused funding</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-line fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Investment Structuring</h4>
                                    <p class="mb-0">Develop bankable climate projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-leaf fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Decarbonization Pathways</h4>
                                    <p class="mb-0">Align financial strategies with climate goals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-users fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Investor Attraction</h4>
                                    <p class="mb-0">Attract climate-focused investors</p>
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
                    <img src="{{ asset('img/service-sustainability-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Climate Finance Advisory">
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
<!-- Climate Finance Advisory End -->
@endsection 