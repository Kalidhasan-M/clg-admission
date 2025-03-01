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
        border-color: #667EEA;
        box-shadow: 0 0 8px rgba(102, 126, 234, 0.5);
    }
    .btn-custom {
        background: #667EEA;
        color: white;
        border-radius: 8px;
        padding: 10px;
        transition: 0.3s;
    }
    .btn-custom:hover {
        background: #764BA2;
    }
</style>
<body>
    <div class="container d-flex justify-content-center align-items-center mt-14 bg-white"styl>
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
                <button type="submit" class="btn btn-custom w-100 fw-bold">Send Message</button>
            </form>
        </div>
        <div class="mt-6 pr-16">
            <div>
                <div class="shadow-md rounded-lg">
                    <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                    <p class="text-black"><strong> Address:</strong> 123 Street, City, Country</p>
                    <p class="text-black mt-1"><strong>:telephone_receiver: Phone:</strong> +1 234 567 890</p>
                    <p class="text-black mt-1"><strong>:email: Email:</strong> contact@example.com</p>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6491.268956464189!2d77.87880571378419!3d9.398612984683504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cbacf490bfa1%3A0x7b266d32f3fa3835!2sSri%20Krishnasamy%20Arts%20and%20Science%20College%2CSattur!5e1!3m2!1sen!2sin!4v1740467708823!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
</html>
@include('footer')