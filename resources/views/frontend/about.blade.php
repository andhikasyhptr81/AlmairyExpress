@extends('frontend.layouts.app')

@section('title', 'Tentang Kami')

@push('styles')

<style>
    .about-page {
        padding-top: 130px;
        min-height: 100vh;
    }

    .about-hero {
        text-align: center;
        margin-bottom: 80px;
    }

    .about-hero h1 {
        font-family: var(--f-display);
        font-size: 60px;
        margin-top: 15px;
    }

    .about-hero p {
        max-width: 750px;
        margin: auto;
        color: var(--c-muted);
        margin-top: 20px;
    }

    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .about-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 20px;
        padding: 35px;
    }

    .about-card h2 {
        font-family: var(--f-display);
        margin-bottom: 20px;
    }

    .about-card p {
        color: var(--c-muted);
        line-height: 1.8;
    }

    .vision-mission {
        margin-top: 80px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .vm-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 20px;
        padding: 35px;
    }

    .vm-card h3 {
        color: var(--c-primary);
        margin-bottom: 20px;
    }

    .vm-card ul {
        padding-left: 20px;
        color: var(--c-muted);
    }

    .vm-card li {
        margin-bottom: 10px;
    }

    .values {
        margin-top: 80px;
    }

    .values h2 {
        text-align: center;
        font-family: var(--f-display);
        margin-bottom: 40px;
    }

    .value-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .value-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 16px;
        padding: 25px;
        text-align: center;
    }

    .value-card h4 {
        color: var(--c-primary);
        margin-bottom: 10px;
    }

    .value-card p {
        color: var(--c-muted);
        font-size: 14px;
    }

    @media(max-width:768px) {

        .about-grid,
        .vision-mission,
        .value-grid {
            grid-template-columns: 1fr;
        }

        .about-hero h1 {
            font-size: 42px;
        }
    }
</style>

@endpush

@section('content')

<section class="about-page">

    <div class="container">

        <div class="about-hero">

            <div class="chip">
                <span class="badge-dot"></span>
                TENTANG PERUSAHAAN
            </div>

            <h1>PT Khaidardeeva</h1>

            <p>
                PT Khaidardeeva adalah perusahaan jasa ekspedisi dan logistik
                yang berkomitmen memberikan layanan pengiriman yang cepat,
                aman, transparan, dan terpercaya ke seluruh wilayah Indonesia.
            </p>

        </div>

        <div class="about-grid">

            <div class="about-card">

                <h2>Profil Perusahaan</h2>

                <p>
                    Sejak berdiri, PT Khaidardeeva terus berkembang sebagai
                    mitra logistik yang mendukung kebutuhan distribusi barang
                    antar kota, antar provinsi, hingga antar pulau.

                    Dengan dukungan teknologi tracking real-time dan sistem
                    manajemen transportasi modern, kami berupaya memberikan
                    pengalaman pengiriman terbaik bagi pelanggan.

                </p>

            </div>

            <div class="about-card">

                <h2>Mengapa Memilih Kami?</h2>

                <p>
                    ✓ Tracking Real-Time<br>
                    ✓ Pengiriman Tepat Waktu<br>
                    ✓ Jangkauan Nasional<br>
                    ✓ Harga Kompetitif<br>
                    ✓ Tim Profesional<br>
                    ✓ Dukungan Pelanggan Responsif
                </p>

            </div>

        </div>

        <div class="vision-mission">

            <div class="vm-card">

                <h3>Visi</h3>

                <p>
                    Menjadi perusahaan logistik terpercaya yang mampu
                    menghubungkan seluruh wilayah Indonesia dengan layanan
                    pengiriman yang cepat, aman, dan efisien.
                </p>

            </div>

            <div class="vm-card">

                <h3>Misi</h3>

                <ul>
                    <li>Memberikan pelayanan terbaik kepada pelanggan.</li>
                    <li>Meningkatkan efisiensi distribusi barang.</li>
                    <li>Mengembangkan teknologi tracking modern.</li>
                    <li>Menjaga keamanan dan ketepatan pengiriman.</li>
                </ul>

            </div>

        </div>

        <div class="values">

            <h2>Nilai Perusahaan</h2>

            <div class="value-grid">

                <div class="value-card">
                    <h4>Integritas</h4>
                    <p>Menjalankan bisnis dengan jujur dan profesional.</p>
                </div>

                <div class="value-card">
                    <h4>Kecepatan</h4>
                    <p>Memberikan layanan pengiriman yang efisien.</p>
                </div>

                <div class="value-card">
                    <h4>Keamanan</h4>
                    <p>Menjaga barang pelanggan selama proses pengiriman.</p>
                </div>

                <div class="value-card">
                    <h4>Inovasi</h4>
                    <p>Mengembangkan solusi logistik berbasis teknologi.</p>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection