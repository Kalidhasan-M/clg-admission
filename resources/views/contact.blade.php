@php
    use App\Settings\GeneralSettings;
    $settings = app(GeneralSettings::class);
@endphp

@include('nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
   body {
        background: linear-gradient(135deg, #273DA1, #764BA2);
        min-height: 100vh;
        align-items: center;
        justify-content: center;
    }
    .contact-container {
        max-width: 700px;
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    .form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        transition: 0.3s;
    }
    .form-control:focus {
        border-color: #667EEA;
        box-shadow: 0 0 8px rgba(102, 126, 234, 0.5);
    }
    .btn-custom {
        background: #667EEA;
        color: white;
        border-radius: 8px;
        padding: 12px;
        transition: 0.3s;
    }
    .btn-custom:hover {
        background: #764BA2;
    }
    .info-container {
        text-align: center;
        color: #fff;
    }
</style>
<body>
    <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center py-5 px-4" style="background: linear-gradient(135deg, #764BA2, #273DA1); border-radius: 12px;">
        <div class="contact-container " style="margin-right: 100px;">
            <h2 class="text-center text-primary fw-bold">Get in Touch</h2>
            <p class="text-center text-muted">We'd love to hear from you. Send us a message!</p>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Your Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter your name">
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Your Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter your email">
                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Your Message</label>
                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5" placeholder="Type your message...">{{ old('message') }}</textarea>
                    @error('message') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Send Message</button>
            </form>
        </div>
        <div class="mt-6 pr-16"> 
            <div>
                <div class="shadow-md rounded-lg p-4 bg-white">
                    <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                    <p class="text-black"><a href="{{ $settings->address }}">Address: {{ $settings->address }}</a></p>
                    <p class="text-black mt-1"><a href="tel:{{ $settings->phone }}">📞 Phone: {{ $settings->phone }}</a></p>
                    <p class="text-black mt-1"><a href="mailto:{{ $settings->email }}">📧 Email: {{ $settings->email }}</a></p>
                </div>
            </div>
            <iframe 
                src="https://www.google.com/maps/embed?pb={{ urlencode($settings->location) }}" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</body>
</html>
@include('footer')