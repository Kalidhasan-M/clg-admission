<!DOCTYPE html>
<html>
<head>
    <title>Admission Confirmation</title>
</head>
<body>
    <h2>Dear {{ $student->name }},</h2>
    <p>Thank you for your application for the {{ $student->course }} course.</p>

    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>

    @if($student->document_path)
    <p><strong>Uploaded Document:</strong> {{ asset('storage/' . $student->document_path) }}</p>
    @endif

    <p>We will review your application and get back to you soon.</p>

    <p>Best regards,<br>Admissions Team</p>
</body>
</html>
