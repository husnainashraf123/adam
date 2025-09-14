@extends('layouts.app')

@section('title', 'What We Do - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">What We Do</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">What We Do</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- What We Do Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-5 mb-4">We're Defined by the Impact We Create</h1>
            <p class="mb-0">Adam cresco we offer audit, tax, advisory, and sustainability services—but our real value goes beyond the technical. We're here to create meaningful insights. From supporting ethical growth to guiding ESG transformation, we work with businesses that want to do better—for their stakeholders and the world around them.</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-item p-5 bg-light rounded">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-search-dollar fa-3x text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <h4 class="mb-0">Audit Services</h4>
                            <p class="mb-0">Comprehensive financial auditing and compliance</p>
                        </div>
                    </div>
                    <p>Whether helping a startup stabilize or advising a global firm on climate risk, we bring clarity, action, and accountability. Every client we serve, every solution we deliver, is aimed at building something better—smarter businesses, stronger communities, and a more sustainable future.</p>
                </div>
            </div>
            
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="service-item p-5 bg-light rounded">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-calculator fa-3x text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <h4 class="mb-0">Tax Services</h4>
                            <p class="mb-0">Strategic tax planning and compliance</p>
                        </div>
                    </div>
                    <p>Our tax expertise goes beyond compliance to strategic planning that helps businesses optimize their tax position while maintaining full regulatory compliance. We work with businesses of all sizes to develop tax strategies that support their growth objectives.</p>
                </div>
            </div>
            
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="service-item p-5 bg-light rounded">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-lightbulb fa-3x text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <h4 class="mb-0">Advisory Services</h4>
                            <p class="mb-0">Strategic business consulting and guidance</p>
                        </div>
                    </div>
                    <p>From supporting ethical growth to guiding ESG transformation, we work with businesses that want to do better—for their stakeholders and the world around them. Our advisory services help businesses navigate complex challenges and seize new opportunities.</p>
                </div>
            </div>
            
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.8s">
                <div class="service-item p-5 bg-light rounded">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <i class="fas fa-leaf fa-3x text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <h4 class="mb-0">ESG Strategy</h4>
                            <p class="mb-0">Environmental, Social & Governance consulting</p>
                        </div>
                    </div>
                    <p>We help businesses embrace sustainability and develop comprehensive ESG strategies that create long-term value. Our approach integrates environmental responsibility, social impact, and strong governance into core business operations.</p>
                </div>
            </div>
        </div>

        <!-- Impact Section -->
        <div class="row g-5 mt-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-primary rounded p-5 text-white text-center">
                    <h2 class="mb-4">Creating Meaningful Impact</h2>
                    <p class="mb-4 fs-5">Whether helping a startup stabilize or advising a global firm on climate risk, we bring clarity, action, and accountability. Every client we serve, every solution we deliver, is aimed at building something better—smarter businesses, stronger communities, and a more sustainable future.</p>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <i class="fas fa-chart-line fa-3x mb-3"></i>
                            <h4>Smarter Businesses</h4>
                            <p>Strategic insights for sustainable growth</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-hands-helping fa-3x mb-3"></i>
                            <h4>Stronger Communities</h4>
                            <p>Social impact through responsible business</p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-globe fa-3x mb-3"></i>
                            <h4>Sustainable Future</h4>
                            <p>Environmental stewardship and ESG focus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- What We Do End -->
@endsection 