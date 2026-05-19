@extends('layouts.app')

@section('content')
<section id="about" class="py-5 bg-dark-subtle">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tentang Saya</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <img src="{{ asset('asset/img/profile.png') }}" class="img-fluid rounded-circle" alt="Foto Profil" style="width: 150px; height: 150px; object-fit: cover;">
                </div>
                <h3 class="fw-bold">Stevent Surya Candra</h3>
                <p>Saya bekerja secara freelance dibidang UI/UX Website Development, IOT Development, dan Mobile Apps dengan dasar yang sudah diberikan oleh Politeknik ATMI Surakarta sebagai tempat edukasi saya sebelum saya bekerja sebagai freelancer.</p>
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Skill Saya</h3>
                <span>Internet Of Things</span>
                <div class="progress mb-3" role="progressbar" aria-valuenow="95">
                    <div class="progress-bar bg-cyan" style="width: 95%">95%</div>
                </div>
                <span>Website Development</span>
                <div class="progress mb-3" role="progressbar" aria-valuenow="80">
                    <div class="progress-bar bg-cyan" style="width: 80%">80%</div>
                </div>
                <span>Bahasa Python</span>
                <div class="progress mb-3" role="progressbar" aria-valuenow="75">
                    <div class="progress-bar bg-cyan" style="width: 75%">75%</div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-6 mb-4">
                <div class="card project-card p-4">
                    <h4 class="fw-bold mb-3 text-center">Proyek yang Diselesaikan</h4>
                    <canvas id="projectChart" width="400" height="400"></canvas>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card project-card p-4">
                    <h4 class="fw-bold mb-3 text-center">Tingkat Kepuasan Klien</h4>
                    <canvas id="satisfactionChart" width="400" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Chart 1: Proyek yang Diselesaikan (Bar Chart)
        const projectCtx = document.getElementById('projectChart').getContext('2d');
        new Chart(projectCtx, {
            type: 'bar',
            data: {
                labels: ['IOT Projects', 'Web Development', 'UI/UX Design', 'Python Scripts', 'Mobile Apps'],
                datasets: [{
                    label: 'Jumlah Proyek',
                    data: [19, 10, 8, 2, 5],
                    backgroundColor: ['rgba(0, 188, 212, 0.8)', 'rgba(0, 188, 212, 0.7)', 'rgba(0, 188, 212, 0.6)', 'rgba(0, 188, 212, 0.5)', 'rgba(0, 188, 212, 0.4)'],
                    borderColor: '#00bcd4',
                    borderWidth: 1
                }]
            },
            options: { responsive: true, plugins: { legend: { labels: { color: '#fff' } } }, scales: { y: { beginAtZero: true, ticks: { color: '#fff' }, grid: { color: '#333' } }, x: { ticks: { color: '#fff' }, grid: { color: '#333' } } } }
        });

        // Chart 2: Tingkat Kepuasan Klien (Doughnut Chart)
        const satisfactionCtx = document.getElementById('satisfactionChart').getContext('2d');
        new Chart(satisfactionCtx, {
            type: 'doughnut',
            data: {
                labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas'],
                datasets: [{
                    data: [39, 4, 1, 0],
                    backgroundColor: ['#34eb4c', '#26c6da', '#ebdc34', '#eb4034'],
                    borderColor: '#1e1e1e',
                    borderWidth: 2
                }]
            },
            options: { responsive: true, plugins: { legend: { position: 'bottom', labels: { color: '#fff', padding: 20 } } } }
        });
    });
</script>
@endpush