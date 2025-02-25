<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Footer Design</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .footer {
            background: linear-gradient(45deg, #4b6cb7, #182848);
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .footer a {
            color: white;
            margin: 0 12px;
            font-size: 22px;
            transition: 0.3s ease;
        }
        .footer a:hover {
            color: #f8c146;
            transform: scale(1.2);
        }
        .footer h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        .footer .social-icons {
            margin-top: 10px;
        }
        .footer .copyright {
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.8;
        }
    </style>
</head>
<body>

<footer class="footer">
    <div class="container">
        <h3>Useful Links</h3>
        <div class="social-icons">
            @if(!empty($socialLinks['insta']))
                <a href="{{ $socialLinks['insta'] }}" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            @endif
            @if(!empty($socialLinks['ytube']))
                <a href="{{ $socialLinks['ytube'] }}" target="_blank" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            @endif
            @if(!empty($socialLinks['fb']))
                <a href="{{ $socialLinks['fb'] }}" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
            @endif
            @if(!empty($socialLinks['twitter']))
                <a href="{{ $socialLinks['twitter'] }}" target="_blank" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            @endif
            @if(!empty($socialLinks['location']))
                <a href="{{ $socialLinks['location'] }}" target="_blank" aria-label="Location">
                    <i class="fas fa-map-marker-alt"></i>
                </a>
            @endif
        </div>
        <div class="copyright">
            &copy; {{ date('Y') }} Developed & Maintained by: SKAASC – Dept.of B.com
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
