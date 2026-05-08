<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keuangan Pro - Heri Silalahi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <a href="/" class="logo">💰 KEUANGAN<span style="color: #3b82f6;">PRO</span></a>
        <div class="nav-links">
            <a href="/">Dashboard</a>
            <a href="/transactions">Laporan</a>
            <a href="/transactions/create" class="btn-add">+ Transaksi</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

</body>
</html>