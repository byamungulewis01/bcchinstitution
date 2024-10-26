@extends('layouts.front')
@section('title', 'Our Awards')
@section('body')

  <!-- Page Banner Section Start -->
  <div class="page-banner bg-color-05">
    <div class="page-banner__wrapper">
      <div class="container">
        <div class="page-banner__caption text-center">
          <h2 class="page-banner__main-title">Our Awards</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Banner Section End -->

  <!-- Awards Section Start -->
  <style>
    .awards-section {
      padding: 40px 20px;
      background-color: #e3f2fd; /* Light blue background */
    }

    .awards-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .award-card {
      background: #ffffff; /* White background */
      border-radius: 15px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .award-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .award-title {
      font-size: 22px;
      font-weight: bold;
      color: #1e88e5; /* Blue title */
      margin-bottom: 10px;
    }

    .award-description {
      font-size: 16px;
      color: #555;
      margin: 10px 0;
    }

    .award-date {
      font-size: 14px;
      color: #777;
      margin-top: 10px;
    }

    .download-btn {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 15px;
      background-color: #1e88e5; /* Blue button */
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
      cursor: pointer; /* Change cursor to pointer */
    }

    .download-btn:hover {
      background-color: #1976d2; /* Darker blue on hover */
    }
  </style>

  <div class="awards-section">
    <div class="awards-container">
      <!-- Award Card Example 1 -->
      @foreach ($awards as $item)
      <div class="award-card">
        <div class="award-title">{{ $item->title }}</div>
        <div class="award-description">{{ $item->description }}</div>
        <div class="award-date">Date: {{ \Carbon\Carbon::parse($item->date)->format('F d, Y') }}</div>
        <a target="_blank" href="{{ asset('files/awards/' . $item->file_url) }}" class="download-btn">Download PDF</a>
      </div>
      @endforeach

    </div>
  </div>
  <!-- Awards Section End -->

@endsection
