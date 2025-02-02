@include("nav")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <style>
        .department-card {
            transition: transform 0.3s ease-in-out;
        }
        .department-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-8" style="margin-bottom: 100px; margin-top: 100px;">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach ($departments as $department)
                <div class="department-card bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset($department->image) }}" alt="{{ $department->name }} Department" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-medium">{{ $department->department }} - {{ $department->name }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
@include("footer")