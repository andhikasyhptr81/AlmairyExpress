@extends('frontend.layouts.app')

@section('title', 'Almairy Express')

@section('content')

<section id="tentang" style="padding-top:140px;">
    <div class="container">

        <div class="chip">
            <span class="badge-dot"></span>
            ALMAIRY EXPRESS
        </div>

        <h1 style="
            font-family:var(--f-display);
            font-size:64px;
            margin-top:20px;
            line-height:1.1;
            max-width:700px;
        ">
            Solusi Pengiriman
            Cepat & Terpercaya
            Untuk Seluruh Indonesia
        </h1>

        <p style="
            margin-top:25px;
            max-width:650px;
            color:var(--c-muted);
            font-size:18px;
        ">
            Sistem manajemen transportasi modern yang
            memungkinkan pelanggan melakukan tracking
            pengiriman secara real-time.
        </p>

        <div style="
            display:flex;
            gap:15px;
            margin-top:35px;
            flex-wrap:wrap;
        ">

            <a href="/cek-resi" style="
                    background:var(--c-primary);
                    color:#000;
                    padding:14px 30px;
                    border-radius:10px;
                    font-weight:700;
                ">
                🔍 Lacak Resi
            </a>

            <a href="#layanan" style="
                    border:1px solid var(--c-border);
                    padding:14px 30px;
                    border-radius:10px;
                ">
                Layanan Kami
            </a>

        </div>

    </div>
</section>

<section id="layanan">

    <div class="container">

        <h2 style="
            font-family:var(--f-display);
            font-size:42px;
            margin-bottom:50px;
        ">
            Layanan Kami
        </h2>

        <div style="
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
        ">

            <div class="service-card">
                <h3>🚚 Pengiriman Darat</h3>
                <p>Pengiriman cepat antar kota dan provinsi.</p>
            </div>

            <div class="service-card">
                <h3>🚢 Pengiriman Laut</h3>
                <p>Pengiriman antar pulau dengan biaya efisien.</p>
            </div>

            <div class="service-card">
                <h3>✈ Pengiriman Udara</h3>
                <p>Prioritas pengiriman dengan estimasi tercepat.</p>
            </div>

            <div class="service-card">
                <h3>📦 Tracking Real Time</h3>
                <p>Pantau posisi barang secara langsung.</p>
            </div>

        </div>

    </div>

</section>

<section id="jangkauan">

    <div class="container">

        <h2 style="
            font-family:var(--f-display);
            font-size:42px;
            margin-bottom:30px;
        ">
            Area Jangkauan
        </h2>

        <p style="
            color:var(--c-muted);
            max-width:700px;
        ">
            Almairy Express melayani pengiriman ke seluruh
            wilayah Indonesia dengan jaringan distribusi
            yang luas dan terintegrasi.
        </p>

    </div>
</section>

<section id="kontak">

    <div class="container">

        <h2 style="
            font-family:var(--f-display);
            font-size:42px;
            margin-bottom:30px;
        ">
            Hubungi Kami
        </h2>

        <p>Email : admin@almairyexpress.com</p>
        <p>WhatsApp : 08xxxxxxxxxx</p>
        <p>Alamat : Indonesia</p>

    </div>
</section>

<style>
    .service-card {
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: 16px;
        padding: 30px;
        transition: .3s;
    }

    .service-card:hover {
        transform: translateY(-5px);
        border-color: var(--c-primary);
    }

    .service-card h3 {
        margin-bottom: 15px;
    }

    .service-card p {
        color: var(--c-muted);
    }
</style>

@endsection