@extends('frontend.layouts.app')

@section('title', 'Lacak Kiriman')

@push('styles')
<style>
    .tracking-page {
        min-height: 100vh;
        padding-top: 130px;
    }

    .tracking-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .tracking-header h1 {
        font-family: var(--f-display);
        font-size: 48px;
        margin-top: 15px;
    }

    .tracking-header p {
        color: var(--c-muted);
    }

    .search-card {
        max-width: 800px;
        margin: auto;
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: var(--radius);
        padding: 25px;
    }

    .search-form {
        display: flex;
        gap: 10px;
    }

    .search-input {
        flex: 1;
        padding: 14px;
        border-radius: 10px;
        border: 1px solid var(--c-border);
        background: var(--c-surface2);
        color: white;
    }

    .search-input:focus {
        outline: none;
        border-color: var(--c-primary);
    }

    .search-btn {
        padding: 14px 25px;
        border: none;
        border-radius: 10px;
        background: var(--c-primary);
        color: #000;
        font-weight: 700;
        cursor: pointer;
    }

    .result-card {
        margin-top: 30px;
        background: var(--c-surface);
        border: 1px solid var(--c-border);
        border-radius: var(--radius);
        overflow: hidden;
    }

    .result-header {
        padding: 20px;
        border-bottom: 1px solid var(--c-border);
    }

    .result-body {
        padding: 25px;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .info-item {
        background: var(--c-surface2);
        padding: 15px;
        border-radius: 10px;
    }

    .info-item small {
        display: block;
        color: var(--c-muted);
        margin-bottom: 5px;
    }

    .progress-box {
        margin-top: 25px;
    }

    .progress-bar-bg {
        height: 10px;
        background: #1f2937;
        border-radius: 20px;
        overflow: hidden;
    }

    .progress-bar-fill {
        height: 100%;
        width: 0%;
        background: var(--c-primary);
        transition: .5s;
    }

    .timeline {
        margin-top: 40px;
    }

    .timeline-item {
        position: relative;
        padding-left: 35px;
        margin-bottom: 30px;
        border-left: 2px solid var(--c-primary);
    }

    .timeline-dot {
        position: absolute;
        left: -9px;
        top: 0;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #666;
    }

    .timeline-dot.done {
        background: #22c55e;
    }

    .timeline-dot.current {
        background: var(--c-primary);
        box-shadow: 0 0 15px var(--c-primary);
    }

    .timeline-time {
        font-size: 12px;
        color: var(--c-muted);
    }

    .timeline-location {
        color: var(--c-primary);
        font-size: 13px;
        margin-top: 4px;
    }

    .not-found {
        display: none;
        margin-top: 25px;
        padding: 15px;
        border-radius: 10px;
        background: rgba(239, 68, 68, .15);
        color: #fca5a5;
    }

    .hidden {
        display: none;
    }

    @media(max-width:768px) {

        .search-form {
            flex-direction: column;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .tracking-header h1 {
            font-size: 36px;
        }

    }
</style>
@endpush

@section('content')

<section class="tracking-page">

    <div class="container">

        <div class="tracking-header">

            <div class="chip">
                <span class="badge-dot"></span>
                TRACKING SYSTEM
            </div>

            <h1>Lacak Pengiriman</h1>

            <p>
                Pantau status pengiriman secara real-time menggunakan nomor resi.
            </p>

        </div>

        <div class="search-card">

            <div class="search-form">

                <input type="text" id="resi" class="search-input" placeholder="Masukkan nomor resi">

                <button class="search-btn" onclick="cariResi()">

                    🔍 Lacak

                </button>

            </div>

            <div id="not-found" class="not-found"></div>

            <div id="hasil" class="hidden">

                <div class="result-card">

                    <div class="result-header">

                        <h3 id="resi-text"></h3>

                        <div id="tujuan-text"></div>

                    </div>

                    <div class="result-body">

                        <div class="info-grid">

                            <div class="info-item">
                                <small>Status</small>
                                <strong id="status"></strong>
                            </div>

                            <div class="info-item">
                                <small>Jenis Barang</small>
                                <strong id="barang"></strong>
                            </div>

                            <div class="info-item">
                                <small>Jumlah Koli</small>
                                <strong id="koli"></strong>
                            </div>

                            <div class="info-item">
                                <small>Berat</small>
                                <strong id="berat"></strong>
                            </div>

                            <div class="info-item">
                                <small>Estimasi Tiba</small>
                                <strong id="estimasi"></strong>
                            </div>

                            <div class="info-item">
                                <small>Tarif</small>
                                <strong id="tarif"></strong>
                            </div>

                        </div>

                        <div class="progress-box">

                            <div style="display:flex;justify-content:space-between;margin-bottom:8px">
                                <span>Status Pengiriman</span>
                                <strong id="progress-text"></strong>
                            </div>

                            <div class="progress-bar-bg">
                                <div class="progress-bar-fill" id="progress-bar"></div>
                            </div>

                        </div>

                        <div class="timeline">

                            <h3>Riwayat Tracking</h3>

                            <div id="timeline"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection

@push('scripts')
<script>
    function cariResi() {

        let resi = document.getElementById('resi').value.trim();

        if (!resi) {
            showToast('Masukkan nomor resi', 'error');
            return;
        }

        fetch(`/tracking/cari?resi=${resi}`)
            .then(res => res.json())
            .then(data => {

                let hasil = document.getElementById('hasil');
                let error = document.getElementById('not-found');

                if (!data.ditemukan) {

                    hasil.classList.add('hidden');

                    error.style.display = 'block';
                    error.innerHTML = data.pesan;

                    return;
                }

                error.style.display = 'none';

                hasil.classList.remove('hidden');

                let p = data.pengiriman;

                document.getElementById('resi-text').innerText =
                    'Resi : ' + p.resi;

                document.getElementById('tujuan-text').innerText =
                    p.kota_tujuan + ' (' + p.pulau_tujuan + ')';

                document.getElementById('status').innerText =
                    p.status_label;

                document.getElementById('barang').innerText =
                    p.jenis_barang;

                document.getElementById('koli').innerText =
                    p.jumlah_koli;

                document.getElementById('berat').innerText =
                    p.berat_kg + ' Kg';

                document.getElementById('estimasi').innerText =
                    p.estimasi_tiba ?? '-';

                document.getElementById('tarif').innerText =
                    p.tarif_format;

                document.getElementById('progress-text').innerText =
                    p.progress + '%';

                document.getElementById('progress-bar').style.width =
                    p.progress + '%';

                let html = '';

                data.history.forEach(h => {

                    html += `
        <div class="timeline-item">

            <div class="timeline-dot ${
                h.is_current
                ? 'current'
                : (h.is_done ? 'done' : '')
            }"></div>

            <div class="timeline-time">
                ${h.waktu}
            </div>

            <div>
                ${h.keterangan}
            </div>

            <div class="timeline-location">
                ${h.lokasi ?? ''}
            </div>

        </div>
        `;
                });

                document.getElementById('timeline').innerHTML = html;

            })
            .catch(err => {
                console.log(err);
            });

    }
</script>
@endpush