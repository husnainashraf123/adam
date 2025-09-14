@extends('layouts.app')

@section('title', 'Business Services & Out Source - Adamcresco')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Business Services & Out Source</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Services</a></li>
            <li class="breadcrumb-item active text-primary">Business Services & Out Source</li>
        </ol>    
    </div>
</div>
<!-- Page Header End -->

<!-- Business Services & Out Source Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Business Services & Out Source</h4>
                    <h1 class="display-5 mb-4">Comprehensive Business Process Support</h1>
                    <p class="mb-4">Maintain the financial health and clarity of your business with Adam Cresco's precise Bookkeeping and Financial Statement Preparation services. We understand that accurate and timely financial records are the bedrock of sound decision-making.</p>
                    
                    <p class="mb-4">Our dedicated team provides meticulous bookkeeping services, ensuring every transaction is accurately recorded, categorized, and reconciled on a consistent basis. Building upon this solid foundation, we expertly prepare clear, compliant, and insightful financial statements – including the Balance Sheet, Income Statement, and Cash Flow Statement – tailored to meet regulatory requirements and provide you with a true picture of your company's performance and position.</p>
                    
                    <p class="mb-4">Streamline your operations and enhance efficiency with Adam Cresco's comprehensive Business Process Services (BPS). We understand that managing non-core yet critical functions can divert valuable time and resources from your strategic objectives. Our tailored solutions cover a range of essential processes, potentially including areas like finance & accounting support, payroll administration, or specific compliance tasks.</p>
                    
                    <p class="mb-4"><strong>By partnering with Adam Cresco, you gain access to specialized expertise, optimized workflows, and robust controls, often leading to reduced operating costs, improved accuracy, and enhanced compliance. Let us handle the essential operational tasks reliably and effectively, freeing your team to focus on driving core business growth and innovation.</strong></p>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-book fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Bookkeeping</h4>
                                    <p class="mb-0">Accurate financial record keeping</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-chart-bar fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Financial Statements</h4>
                                    <p class="mb-0">Compliant reporting and analysis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-cogs fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Process Optimization</h4>
                                    <p class="mb-0">Streamlined business operations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-users fa-3x text-primary me-4"></i>
                                <div>
                                    <h4>Payroll & HR</h4>
                                    <p class="mb-0">Comprehensive HR support services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-4 mt-4">
                        <div class="col-sm-6">
                            <a href="/services/bookkeeping" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Learn More</a>
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
                    <img src="{{ asset('img/service-business-1.svg') }}" class="img-fluid rounded w-100" alt="Business Services">
                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{ asset('img/service-business-2.svg') }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="Business Process">
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
<!-- Business Services & Out Source End -->
@endsection 