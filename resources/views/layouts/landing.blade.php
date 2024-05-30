<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Boga Box</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">Jasa Boga Box<i class="fas fa-utensils"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#location">Lokasi</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <!-- Social Media Links -->
            <div class="mb-4">
                <a href="https://facebook.com" class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" role="button">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com" class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://linkedin.com" class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" role="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
    
            <!-- Additional Information -->
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Tentang Kami</h5>
                    <p>
                        Jasa Boga Box adalah perusahaan katering terkemuka yang menyediakan layanan katering berkualitas tinggi untuk semua jenis acara. Kami berkomitmen untuk memberikan pengalaman kuliner terbaik kepada pelanggan kami.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Informasi Tambahan</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <p><i class="fas fa-home"></i> Alamat Cabang: Jl. Pahlawan No.123, Jakarta, Indonesia</p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i> Email: info@jasabogabox.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!-- Copyright -->
        <div class="text-center p-3 bg-dark text-white">
            © 2024 Jasa Boga Box. All rights reserved.
        </div>
    </footer>
    

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>