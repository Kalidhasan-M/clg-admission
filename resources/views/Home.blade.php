@include("nav")
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@php
  $bannerImages = is_array($home->banner_image) ? $home->banner_image : json_decode($home->banner_image, true);
@endphp
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @if(!empty($bannerImages) && is_array($bannerImages))
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($bannerImages as $index => $image)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset($image) }}" class="d-block w-100" alt="Slide {{ $index + 1 }}" style="width:100vw!important; height: 40vw;">
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
<div style="max-width: 1200px; margin: 0 auto; background-color: #2674b7; padding: 16px; margin-top: 100px; margin-bottom: 100px; color: white">
    <h1 style="text-align: center">{{ $home->student_name }}</h1>
    <div>{{ $home->testimonial }}</div>
</div>
<div class="w-full bg-white py-10">
    <h2 class="text-center text-3xl font-bold mb-8">{{ $home->title }}</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 md:px-12 d-flex mb-5">
        <div class="bg-gray-100 rounded-lg overflow-hidden shadow p-5">
            <img src="{{ asset($home->image) }}" alt="Award Image" class="w-full object-cover" style="width: -webkit-fill-available;">
            <div class="p-4">
                <p class="text-center text-sm font-semibold">{{ $home->program_description }}</p>
            </div>
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@include("footer")
