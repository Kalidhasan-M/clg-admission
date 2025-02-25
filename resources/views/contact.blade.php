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
        background: linear-gradient(135deg, #273da1, #764ba2);
        height: 100vh;
    }
    .contact-container {
        max-width: 600px;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        transition: 0.3s;
    }
    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 8px rgba(102, 126, 234, 0.5);
    }
    .btn-custom {
        background: #667eea;
        color: white;
        border-radius: 8px;
        padding: 10px;
        transition: 0.3s;
    }
    .btn-custom:hover {
        background: #764ba2;
    }
</style>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="contact-container">
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
                    <label class="form-label fw-semibold">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter your name">
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter your email">
                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Phone number</label>
                    <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}" placeholder="Enter your number">
                    @error('number') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Message</label>
                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5" placeholder="Type your message...">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100 fw-bold">Send Message</button>
            </form>
        </div>
    </div>

</body>
</html>
@include('footer')
