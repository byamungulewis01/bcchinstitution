@extends('layouts.front')
@section('title', 'Gallery')
@section('body')
       <!-- page Banner Section Start -->
       <div class="page-banner">
        <div class="page-banner__wrapper" style="background-color: #3A80BA; padding: 60px 0; text-align: center;">
            <h2 class="about-banner-caption__main-title" style="color: #fff; font-size: 36px; font-weight: bold;">Gallery</h2>
        </div>
    </div>
    <!-- page Banner Section End -->

    <!-- Gallery Section Start -->
    <div class="container">
        <div class="gallery-section">
            <h3>Gallery</h3>

            <!-- Gallery Grid Start -->
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery-item">
                        <a href="path_to_image1.jpg" target="_blank">
                            <img src="path_to_image1_thumbnail.jpg" alt="Image 1" style="width:100%;">
                        </a>
                        <div class="gallery-item-info">
                            <p>Image 1 Caption</p>
                            <p>Uploaded on: Oct 10, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <a href="path_to_image2.jpg" target="_blank">
                            <img src="path_to_image2_thumbnail.jpg" alt="Image 2" style="width:100%;">
                        </a>
                        <div class="gallery-item-info">
                            <p>Image 2 Caption</p>
                            <p>Uploaded on: Sep 15, 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <a href="path_to_image3.jpg" target="_blank">
                            <img src="path_to_image3_thumbnail.jpg" alt="Image 3" style="width:100%;">
                        </a>
                        <div class="gallery-item-info">
                            <p>Image 3 Caption</p>
                            <p>Uploaded on: Aug 22, 2024</p>
                        </div>
                    </div>
                </div>
                <!-- Add more images as needed -->
            </div>
            <!-- Gallery Grid End -->

            <!-- Pagination Start -->
            <div class="pagination">
                <a href="#" class="prev">&laquo; Previous</a>
                <a href="#" class="page-number">1</a>
                <a href="#" class="page-number">2</a>
                <a href="#" class="page-number">3</a>
                <a href="#" class="next">Next &raquo;</a>
            </div>
            <!-- Pagination End -->
        </div>
    </div>
    <!-- Gallery Section End -->

    <style>
        .page-banner {
            padding: 60px 0;
            color: white;
            text-align: center;
            background-size: cover;
            background-position: center;
        }
        .gallery-banner-caption__main-title {
            font-size: 36px;
            font-weight: bold;
        }
        .gallery-section {
            margin: 40px 0;
        }
        .gallery-item {
            margin-bottom: 30px;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        .gallery-item-info {
            text-align: center;
            margin-top: 10px;
        }

        /* Pagination Styles */
        .pagination {
            margin: 20px 0;
            text-align: center;
        }
        .pagination a {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }
        .pagination a:hover {
            background-color: #ddd;
        }
        .pagination .prev, .pagination .next {
            font-weight: bold;
        }
    </style>
@endsection
