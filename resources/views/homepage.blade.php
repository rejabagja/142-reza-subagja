@extends('partials.layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Selamat Datang di Jasa Boga Box</h1>
            <p class="hero-subtitle">Nikmati makanan lezat dari dapur kami</p>
            <button class="hero-button">Pesan Sekarang</button>
        </div>
        <div class="hero-slider">
            <img class="hero-slide active" src="{{ asset('assets/image/slide1.jpg') }}" alt="Slide 1">
            <img class="hero-slide" src="{{ asset('assets/image/slide2.jpg') }}" alt="Slide 2">
            <img class="hero-slide" src="{{ asset('assets/image/slide3.jpg') }}" alt="Slide 3">
        </div>
    </section>
@endsection
