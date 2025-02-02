<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Admission Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">College Admission Form</h2>
    <form action="{{ route('admission.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Select Course</label>
            <select name="course" class="form-control" required>
                <option value="">Choose Course</option>
                <option value="B.Tech">B.Sc</option>
                <option value="BA">BA</option>
                <option value="B.Com">B.Com</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload Documents</label>
            <input type="file" name="documents" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Application</button>
    </form>
</div>

</body>
</html>