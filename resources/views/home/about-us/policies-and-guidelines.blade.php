@extends('layouts.front')
@section('title', 'Policies & Guidelines')
@section('body')
    <style>
        /* Page Banner Section */


        .page-banner__wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
            color: #ffffff; /* White text color */
        }

        .about-banner-caption {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.6); /* Darker semi-transparent background for better readability */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5); /* Shadow for depth */
        }

        .about-banner-caption__main-title {
            font-size: 42px; /* Increased main title size */
            font-weight: bold;
            margin: 0;
        }

        .about-banner-caption__main-title strong {
            color: #ffcc00; /* Highlight color for emphasis */
        }

        .container {
            max-width: 1200px; /* Max width for the container */
            margin: 0 auto; /* Center the container */
            padding: 0 15px; /* Padding on the sides */
        }

        /* Content Section */
        .content-section {
            padding: 60px 15px; /* Add padding to the content section */
            background-color: #f9f9f9; /* Light background for content area */
            text-align: center;
        }

        .content-title {
            font-size: 32px; /* Larger title size */
            margin-bottom: 20px; /* Space below the title */
            font-weight: bold;
        }

        .content-text {
            font-size: 20px; /* Text size */
            margin-bottom: 40px; /* Space below the text */
            line-height: 1.6; /* Improve line spacing for readability */
            color: #333; /* Darker text color */
        }

        .policy-list {
            list-style-type: none; /* Remove default list styles */
            padding: 0; /* Remove default padding */
            display: inline-block; /* Center the list */
            text-align: left; /* Align text to the left for readability */
        }

        .policy-list li {
            font-size: 18px; /* Font size for list items */
            padding: 15px 20px; /* Space around list items */
            border: 1px solid #ccc; /* Border around each item */
            border-radius: 5px; /* Rounded corners for list items */
            margin: 10px 0; /* Space between items */
            transition: transform 0.3s, box-shadow 0.3s; /* Transition for hover effects */
            background: #fff; /* White background for list items */
            max-width: 800px; /* Maximum width for the list items */
            width: 100%; /* Full width */
            word-wrap: break-word; /* Allow long words to break to the next line */
        }

        .policy-list li:hover {
            transform: translateY(-3px); /* Lift effect on hover */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow effect on hover */
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .about-banner-caption__main-title {
                font-size: 30px; /* Smaller font size for mobile */
            }

            .content-title {
                font-size: 28px; /* Smaller title size for mobile */
            }

            .content-text {
                font-size: 18px; /* Smaller text size for mobile */
            }

            .policy-list li {
                max-width: 100%; /* Full width for smaller screens */
            }
        }

        @media (max-width: 480px) {
            .about-banner-caption__main-title {
                font-size: 24px; /* Even smaller font size for very small screens */
            }

            .content-title {
                font-size: 22px; /* Even smaller title size for very small screens */
            }
        }
    </style>

    <!-- Page Banner Section Start -->
    <div class="page-banner">
        <div class="page-banner__wrapper about-banner"
            style="background-image: url({{ asset('frontend/images/about-us-hero-bg.jpg') }});">

                <div class="about-banner-caption">
                    <h2 class="about-banner-caption__main-title"><strong>Policies & Guidelines</strong></h2>
                </div>

        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Content Section Start -->
    <div class="content-section">
        <div class="container">
            <h3 class="content-title">Our Policies</h3>
            <p class="content-text">Here, you can find the various policies and guidelines we adhere to ensure the best experience for our users.</p>
            <ul class="policy-list">
                @foreach ($policies as $policy)
                <li><strong>{{ $policy->title }}</strong>: {{ $policy->description }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Content Section End -->
@endsection
