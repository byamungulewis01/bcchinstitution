@extends('layouts.front')
@section('title', 'Offices')
@section('body')
    <!-- Internal CSS -->
    <style>

        .office-banner-caption {
            text-align: center;
            color: #fff;
        }

        .office-banner-caption__main-title {
            font-size: 48px;
            font-weight: bold;
        }

        .office-banner-caption__sub-title {
            font-size: 18px;
            margin-top: 10px;
        }

        /* Office Locations Section Styling */
        .office-locations {
            padding: 50px 0;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .office-item {
            margin-bottom: 30px;
        }

        .office-item__wrapper {
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .office-item__image {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .office-item__title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .office-item__address,
        .office-item__contact,
        .office-item__email {
            font-size: 14px;
            margin-bottom: 5px;
        }

        /* Contact Us Section Styling */
        .contact-us {
            padding: 30px 0;
            background-color: #f1f1f1;
            text-align: center;
        }

        .contact-us__info {
            font-size: 16px;
            color: #333;
        }
    </style>

    <!-- Page Banner Section Start -->
    <div class="page-banner">
        <div class="page-banner__wrapper office-banner"
        style="background-image: url({{ asset('frontend/images/about-us-hero-bg.jpg') }});">
            <div class="container">
                <!-- Banner Caption Start -->
                <div class="office-banner-caption">
                    <h2 class="office-banner-caption__main-title"><strong>Our Offices</strong></h2>
                    <p class="office-banner-caption__sub-title">Find our offices across different locations</p>
                </div>
                <!-- Banner Caption End -->
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Office Locations Section Start -->
    <section class="office-locations">
        <div class="container">
            <h3 class="section-title">Our Office Locations</h3>

            <!-- Office List Start -->
            <div class="row">
                <!-- Office 1 Start -->
                <div class="col-md-4 office-item">
                    <div class="office-item__wrapper">
                        <img src="{{ asset('frontend/images/office-1.jpg') }}" alt="Main Headquarters" class="office-item__image">
                        <div class="office-item__content">
                            <h4 class="office-item__title">Main Headquarters</h4>
                            <p class="office-item__address">1234 Main Street, Kigali, Rwanda</p>
                            <p class="office-item__contact"><strong>Phone:</strong> +250 788 123 456</p>
                            <p class="office-item__email"><strong>Email:</strong> hq@company.com</p>
                        </div>
                    </div>
                </div>
                <!-- Office 1 End -->

                <!-- Office 2 Start -->
                <div class="col-md-4 office-item">
                    <div class="office-item__wrapper">
                        <img src="{{ asset('frontend/images/office-2.jpg') }}" alt="Office 2" class="office-item__image">
                        <div class="office-item__content">
                            <h4 class="office-item__title">East Africa Branch</h4>
                            <p class="office-item__address">5678 East Avenue, Nairobi, Kenya</p>
                            <p class="office-item__contact"><strong>Phone:</strong> +254 712 345 678</p>
                            <p class="office-item__email"><strong>Email:</strong> eastafrica@company.com</p>
                        </div>
                    </div>
                </div>
                <!-- Office 2 End -->

                <!-- Office 3 Start -->
                <div class="col-md-4 office-item">
                    <div class="office-item__wrapper">
                        <img src="{{ asset('frontend/images/office-3.jpg') }}" alt="Office 3" class="office-item__image">
                        <div class="office-item__content">
                            <h4 class="office-item__title">West Africa Branch</h4>
                            <p class="office-item__address">91011 West Street, Lagos, Nigeria</p>
                            <p class="office-item__contact"><strong>Phone:</strong> +234 809 123 4567</p>
                            <p class="office-item__email"><strong>Email:</strong> westafrica@company.com</p>
                        </div>
                    </div>
                </div>
                <!-- Office 3 End -->
            </div>
            <!-- Office List End -->
        </div>
    </section>
    <!-- Office Locations Section End -->

    <!-- Contact Us Section Start -->
    <section class="contact-us">
        <div class="container">
            <h3 class="section-title">Get in Touch with Us</h3>
            <p class="contact-us__info">For inquiries or more information, feel free to contact any of our offices or send us an email at <strong>info@company.com</strong>.</p>
        </div>
    </section>
    <!-- Contact Us Section End -->
@endsection
