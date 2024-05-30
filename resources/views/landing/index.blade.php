@extends('layouts.landing')

@section('content')
    <!-- Hero Section -->
    <div id="home" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/image/slide1.jpg') }}" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/image/slide2.jpg') }}" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/image/slide3.jpg') }}" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <div class="carousel-caption d-none d-md-block">
            <h1>Selamat Datang di <strong>Jasa Boga Box</strong></h1>
            <h5>Katering Premium untuk Setiap Acara</h5>
            <p>"Jasa Boga Box, solusi katering yang mengutamakan rasa, kualitas, dan pelayanan terbaik."</p>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
        </div>
    </div>
    

    <!-- Menu Section -->
    <section id="menu">
        <div class="container">
            <h2 class="text-center border-bottom border-2 pb-1">Menu</h2>
            <p class="text-center">Jelajahi menu spesial kami</p>
            <!-- Add menu items here -->
            <div class="row my-4">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Dish 1</h5>
                            <p class="card-text">A delightful blend of flavors in every bite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Dish 2">
                        <div class="card-body">
                            <h5 class="card-title">Dish 2</h5>
                            <p class="card-text">An exquisite dish that will tantalize your taste buds.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Dish 3</h5>
                            <p class="card-text">A perfect harmony of flavors and textures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Dish 4">
                        <div class="card-body">
                            <h5 class="card-title">Dish 4</h5>
                            <p class="card-text">A perfect harmony of flavors and textures.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Dish 1</h5>
                            <p class="card-text">A delightful blend of flavors in every bite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Dish 2">
                        <div class="card-body">
                            <h5 class="card-title">Dish 2</h5>
                            <p class="card-text">An exquisite dish that will tantalize your taste buds.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Dish 3</h5>
                            <p class="card-text">A perfect harmony of flavors and textures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary">lihat lainnya</button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about">
        <div class="container">
            <h2 class="text-center border-bottom border-2 pb-1 mb-5">Tentang Kami</h2>
            <p>Selamat Datang di <strong>Jasa Boga Box</strong>,</p>
            <p>Kami adalah Jasa Boga Box, perusahaan katering yang telah menjadi legenda dalam dunia kuliner. Sejak berdiri, kami telah menghadirkan pengalaman kuliner yang tak terlupakan bagi pelanggan kami. Dengan dedikasi tinggi terhadap kualitas dan inovasi, kami telah menjadi pilihan utama bagi berbagai acara penting dan momen spesial.</p>
            <p>Kami menghadirkan keunikan dalam setiap hidangan kami, menggabungkan cita rasa tradisional dan sentuhan modern yang memikat lidah. Dibawah kepemimpinan yang berpengalaman, tim kami selalu berusaha untuk memberikan yang terbaik dalam setiap sajian.</p>
            <p>Kepercayaan dan kepuasan pelanggan adalah prioritas utama kami. Dukungan dan apresiasi dari pelanggan kami adalah yang mendorong kami untuk terus berkembang dan memberikan yang terbaik. Bersama Jasa Boga Box, nikmati pengalaman kuliner yang istimewa dan jadikan setiap momen berharga Anda menjadi tak terlupakan.</p>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location">
        <div class="container">
            <h2 class="text-center border-bottom border-2 pb-1">Lokasi</h2>
            <p class="text-center">Temukan kami di alamat berikut :</p>
            <div class="d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.981214212385!2d107.610112!3d-6.9206015999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e8866e5%3A0x37be7ac9d575f7ed!2sGedung%20Sate!5e0!3m2!1sen!2sid!4v1716190477735!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen class="rounded-3"></iframe>
            </div>
            <p class="text-center mt-4">Alamat :</p>
            <p class="text-center">Jl. Diponegoro No.22, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center border-bottom border-2 pb-1">Kontak Kami</h2>
            <p class="text-center">Untuk Kerjasama, hubungi kami melalui nomor-nomor berikut:</p>
            <div class="row justify-content-center my-3">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Jane Smith:</strong> +62 813-4567-8901
                        </li>
                        <li class="list-group-item">
                            <strong>Michael Johnson:</strong> +62 814-5678-9012
                        </li>
                        <li class="list-group-item">
                            <strong>Sarah Williams:</strong> +62 815-6789-0123
                        </li>
                    </ul>
                </div>
            </div>
            <p>Kami senang mendengar dari Anda! Untuk respons cepat dan layanan terbaik, kami menyarankan Anda untuk menghubungi kami selama jam kerja. Tim kami siap membantu Anda dengan segala pertanyaan dan kebutuhan Anda pada waktu berikut:</p>
            <p>Jam Kerja:</p>
            <ul>
                <li>Senin - Jumat: 08.00 - 17.00 WIB</li>
                <li>Sabtu: 08.00 - 12.00 WIB</li>
                <li>Minggu dan Hari Libur: Tutup</li>
            </ul>
            <p>Jika Anda menghubungi di luar jam kerja, kami akan merespons secepat mungkin pada hari kerja berikutnya. Terima kasih telah memilih kami, dan kami berharap dapat melayani Anda segera!</p>
        </div>
    </section>
@endsection
