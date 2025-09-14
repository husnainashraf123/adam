@extends('layouts.app')

@section('title', 'Our Purpose - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Purpose</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Our Purpose</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Our Purpose Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Mission</h4>
            <h1 class="display-5 mb-4">Creating Real Value for All Stakeholders</h1>
            <p class="mb-0">Our purpose is to create real value—for our clients, our team, and the communities we touch. It shapes our strategy, fuels our work, and connects our people across disciplines and industries.</p>
        </div>

        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('img/service-company-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Our Purpose">
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
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Purpose-Driven Approach</h4>
                    <h2 class="mb-4">This shared purpose keeps us aligned, focused, and accountable</h2>
                    <p class="mb-4">It's what allows us to deliver not just services—but solutions that last. And it's how we measure our success: by the trust we earn and the progress we help build.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div><i class="fas fa-target fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Strategic Focus</h4>
                                    <p>Purpose shapes our strategy and fuels our work</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div><i class="fas fa-users fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Team Connection</h4>
                                    <p>Connects our people across disciplines and industries</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div><i class="fas fa-handshake fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Trust Building</h4>
                                    <p>We measure success by the trust we earn</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div><i class="fas fa-chart-line fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Progress Creation</h4>
                                    <p>Focused on building progress for our clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Value Creation Section -->
        <div class="row g-5 mt-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-light rounded p-5">
                    <div class="text-center mb-5">
                        <h2 class="mb-4">Our Value Creation Framework</h2>
                        <p class="fs-5">We create value across three key dimensions</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="text-center p-4">
                                <i class="fas fa-user-tie fa-4x text-primary mb-4"></i>
                                <h4>For Our Clients</h4>
                                <p>Delivering solutions that last, not just services. We focus on creating sustainable value that helps businesses grow and thrive in the long term.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-4">
                                <i class="fas fa-users fa-4x text-primary mb-4"></i>
                                <h4>For Our Team</h4>
                                <p>Creating an environment where our people can grow, develop, and find meaning in their work. We invest in our team's success and well-being.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-4">
                                <i class="fas fa-globe fa-4x text-primary mb-4"></i>
                                <h4>For Communities</h4>
                                <p>Making a positive impact on the communities we serve. We believe in giving back and creating value that extends beyond our immediate business relationships.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Metrics -->
        <div class="row g-5 mt-5">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="bg-primary rounded p-5 text-white text-center">
                    <h2 class="mb-4">How We Measure Success</h2>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-shield-alt fa-3x me-4"></i>
                                <div class="text-start">
                                    <h4>Trust We Earn</h4>
                                    <p class="mb-0">Building lasting relationships through transparency, reliability, and consistent delivery of value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-rocket fa-3x me-4"></i>
                                <div class="text-start">
                                    <h4>Progress We Help Build</h4>
                                    <p class="mb-0">Creating measurable improvements in our clients' businesses and the communities they serve.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Purpose End -->
@endsection 