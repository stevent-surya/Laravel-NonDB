@extends('layouts.app')

@section('content')
<section id="projects" class="py-5" style="min-height: calc(100vh - 150px);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Proyek Saya</h2>
            <p>Beberapa proyek yang pernah saya kerjakan.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100">
                    <img src="{{ asset('asset/img/project1.jpg') }}" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Smart Home Dengan Arduino Mega</h5>
                        <p class="card-text">Mengubah rumah konsumen biasa menjadi rumah pintar dan terkoneksi dengan internet secara waktu nyata.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100">
                    <img src="{{ asset('asset/img/project2.png') }}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Kontrol IOT berbasis HTML, CSS, dan JS</h5>
                        <p class="card-text">Menggunakan bantuan dari ESP32 untuk membuat AC non-Smart menjadi AC Smart.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card project-card h-100">
                    <img src="{{ asset('asset/img/project3.jpg') }}" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Kontrol AC Dengan Nextion</h5>
                        <p class="card-text">Dapat menambah esensi futuristik untuk diletakkan di depan meja komputer yang siap menemani Anda 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection