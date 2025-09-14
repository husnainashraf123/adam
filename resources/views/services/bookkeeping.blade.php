@extends('layouts.app')

@section('title', 'Bookkeeping & Financial Statement Preparation - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Bookkeeping & Financial Statement Preparation</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Bookkeeping</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Bookkeeping Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Bookkeeping & Financial Statement Preparation</h4>
                    <h1 class="display-5 mb-4">Maintain Financial Health and Clarity</h1>
                    <p class="mb-4">Maintain the financial health and clarity of your business with Adam Cresco's precise Bookkeeping and Financial Statement Preparation services. We understand that accurate and timely financial records are the bedrock of sound decision-making.</p>
                    
                    <p class="mb-4">Our dedicated team provides meticulous bookkeeping services, ensuring every transaction is accurately recorded, categorized, and reconciled on a consistent basis. Building upon this solid foundation, we expertly prepare clear, compliant, and insightful financial statements – including the Balance Sheet, Income Statement, and Cash Flow Statement – tailored to meet regulatory requirements and provide you with a true picture of your company's performance and position.</p>
                    
                    <p class="mb-4"><strong>By entrusting Adam Cresco with these critical functions, you free up valuable internal resources, reduce the risk of errors, and gain reliable financial intelligence essential for strategic planning, securing financing, and fulfilling reporting obligations. Partner with us for dependable financial record-keeping and reporting you can trust.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-book fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Meticulous Bookkeeping</h4>
                                    <p class="mb-0">Accurate recording and categorization of transactions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-bar fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Financial Statements</h4>
                                    <p class="mb-0">Balance Sheet, Income Statement, Cash Flow Statement</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-shield-alt fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Regulatory Compliance</h4>
                                    <p class="mb-0">Meet all regulatory requirements and standards</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-lightbulb fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Strategic Planning</h4>
                                    <p class="mb-0">Reliable financial intelligence for decision-making</p>
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
                    <img src="{{ asset('img/service-business-1.svg') }}?v={{ time() }}" class="img-fluid rounded w-100" alt="Bookkeeping Services">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/service-business-2.svg') }}?v={{ time() }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="Business Process">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{ asset('img/service-business-3.svg') }}?v={{ time() }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="Cloud Technology">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{ asset('img/service-business-4.svg') }}?v={{ time() }}" class="img-fluid rounded-bottom w-100" alt="Outsourcing Process">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bookkeeping Services End -->
@endsection 