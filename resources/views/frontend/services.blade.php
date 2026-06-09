@extends('frontend.layouts.app')

@section('title', 'Layanan Kami')

@push('styles')

<style>
    .services-page {
        padding-top: 130px;
        min-height: 100vh;
    }

    .services-hero {
        text-align: center;
        margin-bottom: 70px;
    }

    .services-hero h1 {
        font-family: var(--f-display);
        font-size: 60px;
        margin-top: 15px;
    }

    .services-hero p {
        color: var(--c-muted);
        max-width: 700px;
        margin: 20px auto 0;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .service-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 20px;
        padding: 35px;
        transition: .3s;
    }

    .service-card:hover {
        transform: translateY(-6px);
        border-color: var(--c-primary);
    }

    .service-icon {
        font-size: 42px;
        margin-bottom: 15px;
    }

    .service-card h3 {
        margin-bottom: 15px;
        font-family: var(--f-display);
    }

    .service-card p {
        color: var(--c-muted);
    }

    .process-section {
        margin-top: 90px;
    }

    .process-section h2 {
        text-align: center;
        margin-bottom: 40px;
        font-family: var(--f-display);
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .process-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 16px;
        padding: 25px;
        text-align: center;
    }

    .process-number {
        width: 50px;
        height: 50px;
        background: var(--c-primary);
        color: #000;
        margin: auto;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .process-card p {
        color: var(--c-muted);
    }

    @media(max-width:992px) {

        .services-grid {
            grid-template-columns: 1fr 1fr;
        }

        .process-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width:768px) {

        .services-grid,
        .process-grid {
            grid-template-columns: 1fr;
        }

        .services-hero h1 {
            font-size: 42px;
        }
    }
</style>

@endpush

@section('content')

<section class="services-page">

    <div class="container">

        <div class="services-hero">

            <div class="chip">
                <span class="badge-dot"></span>
                LAYANAN KAMI
            </div>

            <h1>Solusi Logistik Lengkap</h1>

            <p>
                PT Khaidardeeva menyediakan berbagai layanan pengiriman
                untuk memenuhi kebutuhan distribusi barang bisnis maupun individu.
            </p>

        </div>

        <div class="services-grid">

            <div class="service-card">
                <div class="service-icon">📦</div>
                <h3>Pengiriman Reguler</h3>
                <p>
                    Layanan pengiriman standar dengan biaya ekonomis dan jangkauan luas.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Pengiriman Express</h3>
                <p>
                    Pengiriman prioritas dengan estimasi waktu lebih cepat.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">🚛</div>
                <h3>Cargo</h3>
                <p>
                    Pengiriman barang dalam jumlah besar dengan tarif kompetitif.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">🏠</div>
                <h3>Door To Door</h3>
                <p>
                    Barang dijemput dan diantar langsung ke alamat tujuan.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">💳</div>
                <h3>Cash On Delivery</h3>
                <p>
                    Mendukung transaksi pembayaran saat barang diterima.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">📍</div>
                <h3>Tracking Real-Time</h3>
                <p>
                    Pantau posisi barang secara langsung melalui nomor resi.
                </p>
            </div>

        </div>

        <div class="process-section">

            <h2>Alur Pengiriman</h2>

            <div class="process-grid">

                <div class="process-card">
                    <div class="process-number">1</div>
                    <h4>Input Data</h4>
                    <p>Data pengiriman dicatat ke sistem.</p>
                </div>

                <div class="process-card">
                    <div class="process-number">2</div>
                    <h4>Proses Gudang</h4>
                    <p>Barang diverifikasi dan diproses.</p>
                </div>

                <div class="process-card">
                    <div class="process-number">3</div>
                    <h4>Pengiriman</h4>
                    <p>Barang dikirim menuju lokasi tujuan.</p>
                </div>

                <div class="process-card">
                    <div class="process-number">4</div>
                    <h4>Delivered</h4>
                    <p>Barang diterima oleh penerima.</p>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection