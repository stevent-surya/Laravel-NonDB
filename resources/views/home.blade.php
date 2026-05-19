@extends('layouts.app')

@section('content')
<section id="hero" class="d-flex align-items-center text-center" style="min-height: calc(100vh - 150px);">
    <div class="container">
        <h1 class="display-3 fw-bold">Halo, saya Stevent Surya Candra</h1>
        <h2 class="display-6">Seorang <span class="text-cyan">IT Enthusiast</span></h2>
        <a href="{{ url('/projects') }}" class="btn btn-outline-cyan btn-lg mt-4">Lihat Karya Saya</a>
    </div>
</section>
@endsection