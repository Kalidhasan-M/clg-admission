<!DOCTYPE html>
<html>
<head>
    <title>New Admission Application</title>
</head>
<body>
    <h2>New Admission Application</h2>

    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Course:</strong> {{ $student->course }}</p>

    @if($student->document_path)
    <p><strong>Document:</strong> Uploaded ({{ $student->document_path }})</p>
    @endif

    <p>Please login to the admin panel to review this application.</p>
</body>
</html>
