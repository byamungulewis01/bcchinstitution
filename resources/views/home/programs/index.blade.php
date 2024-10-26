@extends('layouts.front')
@section('title', 'Programs')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner bg-color-05">
        <div class="page-banner__wrapper">
        </div>
    </div>

    <!-- Language Courses Start -->
    <div class="language-section bg-color-05 section-padding-01 scene">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03"><mark>Our Proffessional </mark> Courses</h2>
                <p class="mt-0">Learning new languages, connect to the world and <br> become a global citizen with EduMall
                </p>
            </div>
            <!-- Section Title End -->

            <div class="row g-6">
                @foreach ($categories as $category)
                    <div class="col-lg-3 col-sm-6">
                        <!-- Courses Language Start -->
                        <div class="course-language-item" data-aos="fade-up" data-aos-duration="1000">
                            <a class="course-language-item__link" href="{{ route('show_school', encrypt($category->id)) }}">
                                <div class="course-language-item__thumb">
                                    <img src=" {{ asset('images/trainings/category/' . $category->imageName) }}"
                                        alt="Language" width="330" height="248">

                                </div>
                                <div class="course-language-item__caption">
                                    <h3 class="course-language-item__name">{{ $category->title }}</h3>
                                    <div class="course-language-item__info">
                                        <div class="course-language-item__count">{{ $category->trainings->count() }}
                                            programs</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Courses Language End -->
                    </div>
                @endforeach
            </div>
        </div>

        <div class="language-section__shape-01" data-depth="-0.5"></div>
        <div class="language-section__shape-02" data-depth="0.5"></div>
        <img class="language-section__shape-03" data-depth="-0.6" src="assets/images/shape/edumall-shape-01.png"
            alt="Shape">
        <div class="language-section__shape-04" data-depth="-0.6"></div>
        <div class="language-section__shape-05" data-depth="0.6"></div>

    </div>
    <!-- Language Courses End -->

@endsection
