@extends('layouts.front')
@section('title', 'Our Stories')
@section('body')
    <!-- page Banner Section Start -->
    <div class="page-banner">
        <div class="page-banner__wrapper" style="background-color: #3A80BA; padding: 60px 0; text-align: center;">
            <h2 class="about-banner-caption__main-title" style="color: #fff; font-size: 36px; font-weight: bold;">Our Story</h2>
        </div>
    </div>
    <!-- page Banner Section End -->

    <!-- Our Story Section Start -->
    <div class="our-story-section" style="background-color: #f0f4f8; padding: 50px 0;">
        <div class="container custom-container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03" style="color: #333;">What Makes Us <mark style="background-color: #FFC107; color: #000;">Special?</mark></h2>
                <p class="mt-0" style="color: #555;">Our journey is a reflection of Rwanda's remarkable story. From its stunning landscapes to its visionary leadership, Rwanda stands tall as a beacon of resilience and growth in Africa.</p>
            </div>
            <!-- Section Title End -->

            <!-- Single Story Content Start -->
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up" data-aos-duration="1200">
                    <div class="story-content">
                        <img src="{{ asset('frontend/images/rwanda-story.jpg') }}" alt="Rwandan Journey" class="img-fluid mb-4">
                        <h3 class="story-content__title" style="color: #3A80BA; font-size: 28px; font-weight: bold;">The Rise of a Nation</h3>
                        <p class="story-content__text" style="color: #555;">
                            Rwanda is a country that has transformed itself, emerging from a tragic past to become a model of innovation, environmental sustainability, and social progress. With a people known for their determination, the country has risen to embrace peace, unity, and development.
                        </p>
                        <p class="story-content__text" style="color: #555;">
                            From the capital city of Kigali, often regarded as one of the cleanest and safest cities in Africa, to the green rolling hills that define its landscape, Rwanda captivates the heart of everyone who visits. Its commitment to technological advancement, healthcare, and education has positioned it as a hub of progress in Africa.
                        </p>
                        <p class="story-content__text" style="color: #555;">
                            The story of Rwanda is one of hope, hard work, and vision. Through its leadership and the resilience of its people, the country continues to inspire the world, proving that with determination and unity, any challenge can be overcome.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Single Story Content End -->

        </div>
    </div>
    <!-- Our Story Section End -->

@endsection
