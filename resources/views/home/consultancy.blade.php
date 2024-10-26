@extends('layouts.front')
@section('title', 'Consultancy')
@section('body')

    <div class="page-banner bg-color-05">
        <div class="page-banner__wrapper">
            <div class="container">

                <!-- Page Banner Caption Start -->
                <div class="page-banner__caption text-center">
                    <h2 class="page-banner__main-title">{{ $career->title }}</h2>
                </div>
                <!-- Page Banner Caption End -->

            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <div class="blog-section section-padding-01">
        <div class="container custom-container">

            <div class="row gy-6 grid">
                @foreach ($consultances as $item)
                    <div class="col-xl-4 col-md-6 grid-item">

                        <!-- Blog Item Start -->
                        <div class="blog-item-02" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog-item-02__image">
                                <a href="{{ route('consultancyShow', $item->id) }}"><img src="{{ asset('images/' . $item->imageName) }}"
                                        alt="Consultancy" width="370" height="201"></a>
                            </div>
                            <div class="blog-item-02__content">

                                <h3 class="blog-item-02__title"><a href="{{ route('consultancyShow', $item->id) }}">{{ $item->title }}</a></h3>
                                <p>{!! Illuminate\Support\Str::limit(strip_tags($item->description), 135) !!}</p>
                                <a class="blog-item-02__more btn btn-light btn-hover-white"
                                    href="{{ route('consultancyShow', $item->id) }}">Read More <i
                                        class="fas  fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Blog Item End -->

                    </div>
                @endforeach

            </div>

            <!-- Page Pagination Start -->
            {{ $consultances->links('vendor.pagination.custom') }}
            <!-- Page Pagination End -->

        </div>
    </div>
    <!-- Blog End -->

@endsection
