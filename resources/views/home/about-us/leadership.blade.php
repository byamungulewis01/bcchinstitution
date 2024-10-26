@extends('layouts.front')
@section('title', 'Leadership')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner" style="background-color: #007bff; padding: 100px 0;">
        <div class="container text-center">
            <h2 class="about-banner-caption__main-title" style="color: #fff; margin-top: 50px;"><strong>Our Leadership
                    Team</strong></h2>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Leadership Section Start -->
    <div class="leadership-section py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-8">
                    <h3 class="section-title" style="color: #007bff;">Meet Our Leaders</h3>
                    <p>Our experienced team of leaders drives the vision and growth of our organization.</p>
                </div>
            </div>

            <div class="row">
                <!-- Leadership Card Start -->
                @foreach ($leaderships as $item)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="leadership-card text-center shadow-sm">
                            <div class="leadership-card__image">
                                <img src="{{ asset('images/leaders/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="leadership-card__info mt-3">
                                <h5 class="leadership-card__name">{{ $item->name }}</h5>
                                <p class="leadership-card__position text-muted">{{ $item->position }}</p>
                                <p class="leadership-card__bio">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Leadership Section End -->

    <style>
        /* Custom Styles for Leadership Section */
        .page-banner {
            color: #fff;
            text-align: center;
        }

        .leadership-section {
            background-color: #f9f9f9;
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #007bff;
            /* Change color for section title */
        }

        .leadership-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            transition: all 0.3s ease-in-out;
            border: 1px solid #e1e1e1;
            /* Light border for depth */
        }

        .leadership-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
            /* Slightly stronger shadow */
        }

        .leadership-card__image img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 3px solid #007bff;
            /* Blue border for images */
        }

        .leadership-card__name {
            font-size: 22px;
            font-weight: 600;
            margin-top: 15px;
        }

        .leadership-card__position {
            font-size: 16px;
            color: #555;
        }

        .leadership-card__bio {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
            /* Margin for bio spacing */
        }
    </style>
@endsection
