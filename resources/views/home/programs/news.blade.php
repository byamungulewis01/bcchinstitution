@extends('layouts.front')
@section('title', 'Our Updates')
@section('body')
    <style>
        .page-banner {
            background-color: #3A80BA;
            padding: 80px 0; /* Increased height */
            text-align: center;
        }
        .page-banner__main-title {
            color: #fff;
            font-size: 36px;
            font-weight: bold;
        }
        .nav-tabs {
            border-bottom: 2px solid #3A80BA;
            margin-bottom: 20px;
        }
        .nav-tabs .nav-item {
            margin-right: 15px;
        }
        .nav-tabs .nav-link {
            color: #3A80BA;
            font-weight: bold;
            cursor: pointer;
        }
        .nav-tabs .nav-link.active {
            color: #fff;
            background-color: #3A80BA;
            border: 2px solid #3A80BA;
        }
        .blog-item-02 {
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .blog-item-02:hover {
            transform: scale(1.05);
        }
        .blog-item-02__image img {
            width: 100%;
            height: auto;
        }
        .blog-item-02__meta {
            font-size: 14px;
            color: #999;
        }
        .blog-item-02__title {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
        .blog-item-02__more {
            background-color: #3A80BA;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .blog-item-02__more:hover {
            background-color: #2a6f9d;
        }
        .pagination {
            margin-top: 20px;
        }
        .pagination .page-link {
            color: #3A80BA;
        }
        .pagination .active {
            background-color: #3A80BA;
            color: white;
        }
    </style>

    <!-- Page Banner Section Start -->
    <div class="page-banner">
        <h2 class="page-banner__main-title">Updates</h2>
    </div>
    <!-- Page Banner Section End -->

    <!-- Announcements and Events Menu Start -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#announcements" role="tab" aria-controls="announcements" aria-selected="false">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="false">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Announcements and Events Menu End -->

    <!-- Blog Start -->
    <div class="blog-section section-padding-01">
        <div class="container custom-container">
            <div class="tab-content" id="myTabContent">

                <!-- News Section Start -->
                <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                    <div class="row gy-6 grid">
                        <!-- Example News Item Start -->
                        <div class="col-xl-4 col-md-6 grid-item">
                            <div class="blog-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="blog-item-02__image">
                                    <a href="news-details.html"><img src="assets/images/news/news-1.jpg" alt="News" width="370" height="201"></a>
                                </div>
                                <div class="blog-item-02__content">
                                    <div class="blog-item-02__meta">
                                        <span class="meta-action"><i class="fas fa-calendar"></i> October 10, 2024</span>
                                        <span class="meta-action"><i class="fas fa-eye"></i> 1,500 views</span>
                                    </div>
                                    <h3 class="blog-item-02__title"><a href="news-details.html">New Campus Facilities Opened</a></h3>
                                    <p>Details about the newly opened campus facilities and their benefits to students.</p>
                                    <a class="blog-item-02__more btn btn-light btn-hover-white" href="news-details.html">Read More <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Example News Item End -->
                    </div>
                </div>
                <!-- News Section End -->

                <!-- Announcements Section Start -->
                <div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                    <div class="row gy-6 grid">

                        <!-- Example Announcement Item Start -->
                        <div class="col-xl-4 col-md-6 grid-item">
                            <div class="blog-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="blog-item-02__image">
                                    <a href="announcement-details.html"><img src="assets/images/announcements/announcement-1.jpg" alt="Announcement" width="370" height="201"></a>
                                </div>
                                <div class="blog-item-02__content">
                                    <div class="blog-item-02__meta">
                                        <span class="meta-action"><i class="fas fa-calendar"></i> September 15, 2024</span>
                                        <span class="meta-action"><i class="fas fa-eye"></i> 1,236 views</span>
                                    </div>
                                    <h3 class="blog-item-02__title"><a href="announcement-details.html">New Academic Year Starts on September 20</a></h3>
                                    <p>Details about the start of the new academic year and important dates.</p>
                                    <a class="blog-item-02__more btn btn-light btn-hover-white" href="announcement-details.html">Read More <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Example Announcement Item End -->

                    </div>
                </div>
                <!-- Announcements Section End -->

                <!-- Events Section Start -->
                <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                    <div class="row gy-6 grid">

                        <!-- Example Event Item Start -->
                        <div class="col-xl-4 col-md-6 grid-item">
                            <div class="blog-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="blog-item-02__image">
                                    <a href="event-details.html"><img src="assets/images/events/event-1.jpg" alt="Event" width="370" height="201"></a>
                                </div>
                                <div class="blog-item-02__content">
                                    <div class="blog-item-02__meta">
                                        <span class="meta-action"><i class="fas fa-calendar"></i> October 5, 2024</span>
                                        <span class="meta-action"><i class="fas fa-eye"></i> 2,100 views</span>
                                    </div>
                                    <h3 class="blog-item-02__title"><a href="event-details.html">Annual Science Fair</a></h3>
                                    <p>Join us for the Annual Science Fair showcasing student projects and innovations.</p>
                                    <a class="blog-item-02__more btn btn-light btn-hover-white" href="event-details.html">Read More <i class="fas fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Example Event Item End -->

                    </div>
                </div>
                <!-- Events Section End -->

                <!-- Page Pagination Start -->
                <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
                <!-- Page Pagination End -->

            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
