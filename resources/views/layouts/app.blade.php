<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEUANGAN-PRO | Heri Silalahi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #0f172a; }
    </style>
</head>
<body class="text-slate-200">

    <nav class="fixed top-4 left-0 right-0 z-50 px-4">
        <div class="container mx-auto">
            <div class="bg-slate-900/60 backdrop-blur-xl border border-white/10 px-6 py-4 rounded-3xl flex justify-between items-center shadow-2xl">
                <div class="flex items-center gap-2">
                    <div class="bg-blue-600 p-2 rounded-xl">
                        <span class="text-xl">💰</span>
                    </div>
                    <span class="text-xl font-extrabold tracking-tighter text-white">KEUANGAN<span class="text-blue-500">PRO</span></span>
                </div>

                <div class="hidden md:flex items-center gap-8 font-semibold text-sm tracking-wide">
                    <a href="/" class="text-blue-400 hover:text-white transition">Dashboard</a>
                    <a href="/transactions" class="text-slate-400 hover:text-white transition">Laporan</a>
                    <a href="#" class="text-slate-400 hover:text-white transition">Kategori</a>
                    <a href="#" class="text-slate-400 hover:text-white transition">Pengaturan</a>
                </div>

                <div class="flex items-center gap-4">
                    <a href="/transactions/create" class="hidden sm:block bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white px-5 py-2.5 rounded-2xl font-bold text-sm shadow-lg shadow-blue-500/20 transition-all active:scale-95">
                        + Transaksi
                    </a>
                    <div class="w-10 h-10 rounded-2xl bg-slate-800 border border-white/10 flex items-center justify-center font-bold text-blue-400">
                        HS
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto pt-32 pb-12 px-4">
        @yield('content')
    </main>

</body>
</html>