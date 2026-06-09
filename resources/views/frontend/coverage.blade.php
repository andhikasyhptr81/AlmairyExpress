@extends('frontend.layouts.app')

@section('title', 'Jangkauan Pengiriman')

@push('styles')

<style>
    .coverage-page {
        padding-top: 130px;
        min-height: 100vh;
    }

    .coverage-hero {
        text-align: center;
        margin-bottom: 70px;
    }

    .coverage-hero h1 {
        font-family: var(--f-display);
        font-size: 60px;
        margin-top: 15px;
    }

    .coverage-hero p {
        color: var(--c-muted);
        max-width: 700px;
        margin: 20px auto 0;
    }

    .coverage-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .coverage-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 20px;
        padding: 35px;
        transition: .3s;
    }

    .coverage-card:hover {
        transform: translateY(-5px);
        border-color: var(--c-primary);
    }

    .coverage-card h3 {
        color: var(--c-primary);
        margin-bottom: 15px;
    }

    .coverage-card p {
        color: var(--c-muted);
    }

    .stats-area {
        margin-top: 80px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .stat-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 16px;
        text-align: center;
        padding: 25px;
    }

    .stat-card h2 {
        color: var(--c-primary);
        font-family: var(--f-display);
        font-size: 42px;
    }

    .stat-card p {
        color: var(--c-muted);
    }

    @media(max-width:992px) {

        .coverage-grid {
            grid-template-columns: 1fr 1fr;
        }

        .stats-grid {
            grid-template-columns: 1fr 1fr;
        }

    }

    @media(max-width:768px) {

        .coverage-grid,
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .coverage-hero h1 {
            font-size: 42px;
        }

    }
</style>

@endpush

@section('content')

<section class="coverage-page">

    <div class="container">

        <div class="coverage-hero">

            <div class="chip">
                <span class="badge-dot"></span>
                AREA JANGKAUAN
            </div>

            <h1>Jangkauan Pengiriman Nasional</h1>

            <p>
                PT Khaidardeeva melayani pengiriman ke berbagai wilayah Indonesia
                dengan jaringan distribusi yang luas dan terintegrasi.
            </p>

        </div>

        <div class="coverage-grid">

            <div class="coverage-card">
                <h3>📍 Pulau Jawa</h3>
                <p>
                    Jakarta, Bandung, Semarang, Yogyakarta, Surabaya dan seluruh kota di Pulau Jawa.
                </p>
            </div>

            <div class="coverage-card">
                <h3>📍 Sumatera</h3>
                <p>
                    Medan, Pekanbaru, Padang, Palembang, Lampung dan kota lainnya.
                </p>
            </div>

            <div class="coverage-card">
                <h3>📍 Kalimantan</h3>
                <p>
                    Balikpapan, Samarinda, Pontianak, Banjarmasin dan sekitarnya.
                </p>
            </div>

            <div class="coverage-card">
                <h3>📍 Sulawesi</h3>
                <p>
                    Makassar, Manado, Kendari, Gorontalo dan berbagai kota lainnya.
                </p>
            </div>

            <div class="coverage-card">
                <h3>📍 Bali & NTB</h3>
                <p>
                    Denpasar, Mataram dan wilayah kepulauan sekitarnya.
                </p>
            </div>

            <div class="coverage-card">
                <h3>📍 Papua & Maluku</h3>
                <p>
                    Jayapura, Sorong, Ambon dan area distribusi Indonesia Timur.
                </p>
            </div>

        </div>

        <div class="stats-area">

            <div class="stats-grid">

                <div class="stat-card">
                    <h2>280+</h2>
                    <p>Kota Tujuan</p>
                </div>

                <div class="stat-card">
                    <h2>34</h2>
                    <p>Provinsi</p>
                </div>

                <div class="stat-card">
                    <h2>100%</h2>
                    <p>Cakupan Nasional</p>
                </div>

                <div class="stat-card">
                    <h2>24/7</h2>
                    <p>Layanan Tracking</p>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection