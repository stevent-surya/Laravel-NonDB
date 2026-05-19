@extends('layouts.app')

@section('content')
<section id="contact" class="py-5" style="min-height: calc(100vh - 150px);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hubungi Saya</h2>
            <p>Punya pertanyaan atau ingin bekerja sama? Hubungi saya!</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="{{ url('/contact') }}" method="POST">
                    @csrf <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-cyan w-100">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection