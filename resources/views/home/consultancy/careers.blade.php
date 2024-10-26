@extends('layouts.front')
@section('title', 'Careers')
@section('body')


    <!-- Page Banner Section Start -->
    <div class="page-banner" style="background-color: #007bff; padding: 120px 0; height:300px;">
        <div class="text-center">
            <h2 class="about-banner-caption__main-title" style="color: #fff; margin-top: 50px;"><strong>Our Consultancy
                    Career</strong></h2>
            <p class="text-white">Our experienced team of leaders drives the vision and growth of our organization.</p>

        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Leadership Section Start -->
    <div class="leadership-section py-5">
        <div class="container">
            <div class="row g-6">
                @foreach ($collection as $item)
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item" data-aos="fade-up" data-aos-duration="1000">
                            <a class="service-item__link" href="{{ route('consultancy', $item->id) }}">
                                <div class="service-item__thumb">
                                    <img src="{{ asset('images/careers/' . $item->image) }}" alt="Consultancy">
                                </div>
                                <div class="service-item__caption">
                                    <h3 class="service-item__name">{{ $item->title }}</h3>
                                    <p class="service-item__description">{{ $item->description }}</p>
                                    <a href="{{ route('consultancy', $item->id) }}" class="btn2 btn-primary">View
                                        Services</a>
                                </div>
                            </a>
                        </div>
                        <!-- Service End -->
                    </div>
                @endforeach

            </div>


        </div>


    </div>
    <!-- Consultancy Services Section End -->

@endsection
