<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
.footer {
    background-color: #2674b7;
    color: white;
    padding: 40px 0;
    text-align: center;
    font-family: Arial, sans-serif;
}

.useful-links {
    max-width: 600px;
    margin: 0 auto;
}

.useful-links h3 {
    margin-bottom: 20px;
    font-size: 24px;
}

.useful-links a {
    color: white;
    font-size: 24px;
    margin: 0 15px;
    text-decoration: none;
    transition: opacity 0.3s;
}

.useful-links a:hover {
    opacity: 0.8;
}
</style>
</head>
<body>

<div class="footer">
<div class="useful-links">
    <h3>Useful Links</h3>
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
        <a href="{{ $socialLinks['location'] }}" target="_blank" aria-label="location">
            <i class="fas fa-map-marker-alt"></i>
        </a>
    @endif
</div>
</div>

</body>
</html>
