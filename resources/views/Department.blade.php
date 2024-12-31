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
    <!-- Main container with max-width and center alignment -->
    <div class="max-w-7xl mx-auto px-4 py-8 " style="margin-bottom: 100px;margin-top: 100px;">
        <!-- Grid container with fixed 3-column layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto" style="display: ruby; ">
            <!-- B.A Economics -->
            <div class="department-card bg-white rounded-lg shadow-md overflow-hidden " style="margin-left: 142px; margin-right: 100px;margin-bottom: 50px;">
                <div class="h-48 overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Economics Department" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center" style="text-align: center;">
                    <h3 class="text-lg font-medium">B.A Economics</h3>
                </div>
            </div>

            <!-- B.A English -->
            <div class="department-card bg-white rounded-lg shadow-md overflow-hidden" style="margin-left: 100px; margin-right: 100px;margin-bottom: 50px;">
                <div class="h-48 overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="English Department" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center" style="text-align: center;">
                    <h3 class="text-lg font-medium">B.A English</h3>
                </div>
            </div>

            <!-- B.A Tamil -->
            <div class="department-card bg-white rounded-lg shadow-md overflow-hidden" style="margin-left: 100px; margin-right: 100px;margin-bottom: 50px;">
                <div class="h-48 overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Tamil Department" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center" style="text-align: center;">
                    <h3 class="text-lg font-medium">B.A Tamil</h3>
                </div>
            </div>

            <!-- Second Row -->
            <!-- B.Sc Forensic Science -->
            <div class="department-card bg-white rounded-lg shadow-md overflow-hidden" style="margin-left:  142px; margin-right: 100px;margin-bottom: 50px;">
                <div class="h-48 overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Forensic Science Department" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center" style="text-align: center;">
                    <h3 class="text-lg font-medium">B.Sc Forensic Science</h3>
                </div>
            </div>

            <!-- B.Sc Costume Design -->
            <div class="department-card bg-white rounded-lg shadow-md overflow-hidden" style="margin-left: 100px; margin-right: 100px;margin-bottom: 50px;">
                <div class="h-48 overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Costume Design Department" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center" style="text-align: center;">
                    <h3 class="text-lg font-medium">B.Sc Costume Design & Fashion Technology</h3>
                </div>
            </div>

            <!-- B.Com with Computer Applications -->
            <div class="department-card bg-white rounded-lg shadow-md overflow-hidden" style="margin-left: 100px; margin-right: 100px;margin-bottom: 50px;">
                <div class="h-48 overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Computer Applications Department" class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-center" style="text-align: center;">
                    <h3 class="text-lg font-medium">B.Com with Computer Applications</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@include("footer")
