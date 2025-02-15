@include("nav")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Admission Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 600px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        body {
            background: url('/logo/manage.png') no-repeat center center/cover;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100; background-image: url('https://your-image-url.com/college-management.jpg'); background-size: cover; background-position: center;">
            <div class="card-body bg-light bg-opacity-75 p-4 rounded">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <h2 class="text-center mb-4">College Admission Form</h2>
                <form action="{{ route('admission.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Full Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email *</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Phone Number *</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Select Course *</label>
                        <select name="course" class="form-select" required>
                            <option value="">Choose Course</option>
                            <option value="B.Sc">B.Sc</option>
                            <option value="BA">BA</option>
                            <option value="B.Com">B.Com</option>
                            <option value="BCA">BCA</option>
                            <option value="BBA">BBA</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Upload Documents (PDF, JPG, PNG) *</label>
                        <input type="file" name="documents" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@include("footer")