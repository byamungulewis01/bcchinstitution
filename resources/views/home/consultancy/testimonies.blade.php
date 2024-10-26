@extends('layouts.front')
@section('title', 'Testimonies')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner bg-color-05">
        <div class="page-banner__wrapper">
            <div class="container">
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="testimonial-section bg-color-01 section-padding-01">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h4 class="section-title__sub-title">TESTIMONIALS</h4>
                <h2 class="section-title__title-02">See What Our Students Have To Say</h2>
            </div>
            <!-- Section Title End -->

            <!-- Testimonial Start -->
            <div class="testimonial-section section-padding-02 mb-5">
                <div class="row">
                    <div class="testimonial-active swiper-dots-style" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($testimonies as $testimony)
                                    <div class="swiper-slide">

                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <div class="testimonial-quote-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px"
                                                    height="40px" viewBox="0 0 50 40">
                                                    <path
                                                        d="M21.8750977,2.18046875 C22.4503906,2.18046875 22.9167969,1.7140625 22.9167969,1.13876953 C22.9167969,0.563476562 22.4503906,0.0970703125 21.8750977,0.0970703125 C9.79960938,0.110839844 0.0138671875,9.89658203 2.76635467e-06,21.9720703 L2.76635467e-06,28.2220703 C-0.01796875,34.56875 5.11230469,39.728418 11.4588867,39.7465793 C17.8055664,39.7645508 22.9652344,34.6342773 22.9833957,28.2876953 C23.0013672,21.9410156 17.8710938,16.7813477 11.5245117,16.7632813 C7.77705078,16.7526367 4.25966797,18.5698242 2.10009766,21.6325195 C2.29296875,10.8446289 11.0853516,2.19580078 21.8750977,2.18046875 Z">
                                                    </path>
                                                    <path
                                                        d="M38.5416992,16.7638672 C34.8157227,16.7667969 31.3244141,18.5832031 29.1833984,21.6326172 C29.3763672,10.8446289 38.16875,2.19580078 48.9583984,2.18056641 C49.5336914,2.18056641 50.0000977,1.71416016 50.0000977,1.13886719 C50.0000977,0.563574219 49.5336914,0.0971679688 48.9583984,0.0971679688 C36.8829102,0.1109375 27.097168,9.89667969 27.0833984,21.972168 L27.0833984,28.222168 C27.0833984,34.5503906 32.2134766,39.6804687 38.5416992,39.6804687 C44.8699219,39.6804687 50.0000977,34.5503906 50.0000977,28.222168 C50.0000977,21.8939453 44.8700195,16.7638672 38.5416992,16.7638672 Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="testimonial-main-content">
                                                <div class="testimonial-caption">
                                                    <h3 class="testimonial-caption__title">{{ $testimony->title }}</h3>
                                                    <p>{{ $testimony->description }}</p>
                                                </div>
                                                <div class="testimonial-info">
                                                    <div class="testimonial-info__image">
                                                        <img src="{{ asset('images/testimonies/' . $testimony->image) }}"
                                                            alt="Avatar" width="60" height="60">
                                                    </div>
                                                    <div class="testimonial-info__caption">
                                                        <h5 class="testimonial-info__name">{{ $testimony->name }}</h5>
                                                        <p class="testimonial-info__designation">/ {{ $testimony->position }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item End -->

                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
        </div>
    </div>
    <!-- Testimonial End -->





@endsection
