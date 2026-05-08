@extends('layouts.app')

@section('content')
<div class="dashboard-title">
    <h1>Ringkasan keuangan</h1>
    <h1>selamat datang disini</h1>
    <p>Selamat datang kembali, mari pantau aset kamu hari ini.</p>
</div>

<div class="grid-stats">
    <div class="card">
        <span class="card-label">Total Saldo</span>
        <span class="card-value">Rp 45.000.000</span>
        <small style="color: var(--accent-green)">+12% Bulan ini</small>
    </div>

    <div class="card">
        <span class="card-label text-income">Pemasukan (Mei)</span>
        <span class="card-value" style="color: var(--accent-green)">Rp 12.500.000</span>
        <small style="color: var(--text-gray)">8 Transaksi</small>
    </div>

    <div class="card">
        <span class="card-label">Pengeluaran (Mei)</span>
        <span class="card-value" style="color: var(--accent-red)">Rp 3.200.000</span>
        <small style="color: var(--text-gray)">5 Transaksi</small>
    </div>
</div>

<div class="table-container">
    <h3 style="margin-bottom: 20px; padding-left: 10px;">Transaksi Terakhir</h3>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th style="text-align: right;">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>08 Mei 2026</td>
                <td>Gaji Project Layar Karya</td>
                <td>Development</td>
                <td style="text-align: right;" class="status-income">+ Rp 10.000.000</td>
            </tr>
            <tr>
                <td>07 Mei 2026</td>
                <td>Bayar Hosting & Domain</td>
                <td>Server</td>
                <td style="text-align: right;" class="status-expense">- Rp 1.500.000</td>
            </tr>
            <tr>
                <td>06 Mei 2026</td>
                <td>Top Up Saldo E-Wallet</td>
                <td>Lainnya</td>
                <td style="text-align: right;" class="status-expense">- Rp 200.000</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
