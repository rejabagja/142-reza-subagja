<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>{{ isset($title) ? $title . ' - Jasa Boga Box' : 'Jasa Boga Box' }}</title>
</head>
<body>
    {{-- HEADER SECTION --}}
    <header>
        <nav class="navbar">
            <div class="container">
              <a class="navbar-brand" href="#">Jasa Boga Box</a>
              <ul class="navbar-items">
                <li class="nav-item"><a class="nav-link {{ request()->path() == '/' ? 'active' : '' }}" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->path() == 'menu' ? 'active' : '' }}" href="/menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->path() == 'pesanan' ? 'active' : '' }}" href="/pesanan">Pesanan</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->path() == 'profile' ? 'active' : '' }}" href="/profile">Profile</a></li>
              </ul>
              <a href="" class="nav-link">logout</a>
              <div class="burger-menu">
                &#9776;
              </div>
            </div>
          </nav>
    </header>
    
    {{-- CONTENT SECTION --}}
    <div class="content">
        @yield('content')
    </div>

    {{-- FOOTER SECTION--}}
    {{-- <footer>
        <div class="footer-section">
            <h3>Sosial Media</h3>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Lokasi</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0869046322874!2d-122.41941518468108!3d37.77492977975998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c5a4d5e6d%3A0x8b3e73d0e5c244f7!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1621620746901!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="footer-section">
            <h3>Kontak</h3>
            <ul>
                <li>Alamat: 123 Jalan ABC, Kota XYZ</li>
                <li>Telepon: (123) 456-7890</li>
                <li>Email: info@example.com</li>
            </ul>
        </div>
    </footer> --}}
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>
