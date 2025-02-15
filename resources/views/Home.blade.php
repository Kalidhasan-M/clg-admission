@include("nav")

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@php
  $bannerImages = is_array($home->banner_image) ? $home->banner_image : json_decode($home->banner_image, true);
@endphp

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @if(!empty($bannerImages) && is_array($bannerImages))
            @foreach($bannerImages as $index => $image)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="Slide {{ $index + 1 }}" style="width:100vw!important; height: 40vw;">
                </div>
            @endforeach
        @endif    
    </div>
</div>
<div style="max-width: 1200px; margin: 0 auto; background-color: #2674b7; padding: 16px; margin-top: 100px; margin-bottom: 100px; color: white">
    <h1 style="text-align: center">{{ $home->student_name }}</h1>
    <div>{{ $home->testimonial }}</div>
</div>
<div class="container py-5">
    <h2 class="text-center text-primary fw-bold mb-4">{{ $home->title }}</h2>
    <div class="row g-4">
        @foreach($homeData as $data)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card shadow-sm border-0">
                <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="Award Image" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text fw-semibold text-muted">{{ $data->program_description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@include("footer")
