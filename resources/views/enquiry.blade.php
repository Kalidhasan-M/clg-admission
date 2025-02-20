@include("nav")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College Enquiry Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            background: url('/logo/Enquiry.jpg') no-repeat center center/cover;
        }
        .enquiry-form {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, -0.2);
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .enquiry-form label {
            color:rgb(255, 98, 7);
            font-weight: bold;
        }
        .enquiry-form h4 {
            color:rgb(255, 65, 7);
            font-weight: bold;
        }
        .enquiry-form .form-control {
            background-color: rgba(255, 255, 255, 0.6);
            color: rgb(0, 51, 102);
            border: 1px solid rgba(255, 98, 7, 0.7);
            font-weight: bold;
        }
        .enquiry-form .form-control::placeholder {
            color: rgba(0, 51, 102, 0.5);
        }
        .enquiry-form .form-control:focus {
            background-color: rgba(255, 255, 255, 0.8);
            border-color: rgb(255, 65, 7);
            box-shadow: 0 0 5px rgba(255, 65, 7, 0.5);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="enquiry-form">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h4 class="text-center mb-4">College Enquiry Form</h4>
        <form action="{{ route('enquiry.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Full Name *</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address *</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number *</label>
                <input type="tel" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Course Interested In *</label>
                <select name="course" class="form-select" required>
                    <option selected disabled>Select a course</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="BA">BA</option>
                    <option value="B.Com">B.Com</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Message</label>
                <textarea name="message" class="form-control" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary">Submit Enquiry</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@include("footer")