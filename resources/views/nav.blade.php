<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Navbar Styles */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #f8f9fa;
      padding: 10px 20px;
    }

    .navbar .nav-links {
      display: flex;
      gap: 20px;
    }

    .navbar .nav-links a {
      text-decoration: none;
      color: #000;
      font-size: 1rem;
      padding: 5px 10px;
    }

    .navbar .nav-links a:hover {
      color: #007bff;
    }

    /* Button Styles */
    .navbar .btn {

      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
    }

    .navbar .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <!-- Logo -->
    <div class="logo"><img src="/logo/pngtree-wolf-logo-png-image_2306634.jpg" alt="" style="width: 5vw;height: 4vw; margin-left: 50px;"></div>
    <!-- Navigation Links -->
    <div class="nav-links">
      <a href="/">Home</a>
      <a href="/department">Department</a>
      <a href="/about">About</a>
      <a href="#">Contact</a>
    </div>
    <!-- Registration Button -->
    <button class="btn" style="margin-right: 50px;">Registration</button>
  </nav>
</body>
</html>
