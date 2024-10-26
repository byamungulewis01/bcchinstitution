@extends('layouts.front')
@section('title', 'Governance Structure')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner" style="background: linear-gradient(135deg, #007bff, #00aaff); padding: 60px 0;">
        <div class="container text-center">
            <h2 class="about-banner-caption__main-title" style="color: #fff; font-weight: bold;">Governance Structure</h2>
            <p class="about-banner-caption__sub-title" style="color: #f8f9fa;">Learn about our organizational framework and leadership roles</p>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Governance Structure Section Start -->
    <div class="governance-structure-section py-5">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Governance Introduction -->
                <div class="col-lg-8 col-md-10 text-center mb-5">
                    <h3 class="section-title" style="color: #007bff;">Our Governance Model</h3>
                    <p class="section-description" style="color: #666;">Our governance structure reflects a commitment to transparency, accountability, and leadership excellence. Explore the key positions that guide our organization.</p>
                </div>

                <!-- Governance Cards -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="governance-card text-center" style="border: 1px solid #007bff; border-radius: 8px; padding: 20px;">
                        <div class="governance-card__icon">
                            <img src="{{ asset('frontend/images/chairperson-icon.png') }}" alt="Chairperson">
                        </div>
                        <h4 class="governance-card__title" style="color: #007bff;">Chairperson</h4>
                        <p class="governance-card__description">The Chairperson leads the board, ensuring that strategic objectives are met and the organization upholds its mission.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="governance-card text-center" style="border: 1px solid #007bff; border-radius: 8px; padding: 20px;">
                        <div class="governance-card__icon">
                            <img src="{{ asset('frontend/images/executive-director-icon.png') }}" alt="Executive Director">
                        </div>
                        <h4 class="governance-card__title" style="color: #007bff;">Executive Director</h4>
                        <p class="governance-card__description">Responsible for day-to-day management and implementation of the organization’s strategic plan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="governance-card text-center" style="border: 1px solid #007bff; border-radius: 8px; padding: 20px;">
                        <div class="governance-card__icon">
                            <img src="{{ asset('frontend/images/board-of-directors-icon.png') }}" alt="Board of Directors">
                        </div>
                        <h4 class="governance-card__title" style="color: #007bff;">Board of Directors</h4>
                        <p class="governance-card__description">A diverse group of leaders who provide oversight and ensure the organization stays on course with its mission and values.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="governance-card text-center" style="border: 1px solid #007bff; border-radius: 8px; padding: 20px;">
                        <div class="governance-card__icon">
                            <img src="{{ asset('frontend/images/committees-icon.png') }}" alt="Committees">
                        </div>
                        <h4 class="governance-card__title" style="color: #007bff;">Committees</h4>
                        <p class="governance-card__description">Specialized teams focusing on key areas such as finance, audit, human resources, and strategy.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="governance-card text-center" style="border: 1px solid #007bff; border-radius: 8px; padding: 20px;">
                        <div class="governance-card__icon">
                            <img src="{{ asset('frontend/images/advisory-panel-icon.png') }}" alt="Advisory Panel">
                        </div>
                        <h4 class="governance-card__title" style="color: #007bff;">Advisory Panel</h4>
                        <p class="governance-card__description">A group of experts who provide advice and insights to help guide the organization's long-term strategy.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Governance Structure Section End -->

    <!-- Governance Structure Diagram Start -->
    <div class="governance-diagram-section py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-4" style="color: #333;">Governance Structure Diagram</h3>
            <div class="text-center">
                <img src="{{ asset('frontend/images/governance-diagram.png') }}" alt="Governance Structure Diagram" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Governance Structure Diagram End -->

@endsection
