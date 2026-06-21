<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jasa pembuatan website KKN yang terjangkau, cepat, dan profesional. Abadikan program kerja pengabdian desa Anda secara digital.">
    <title>@yield('title', 'KKN Digital — Jasa Website KKN Terjangkau & Profesional')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&family=Lora:ital,wght@0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Nunito', sans-serif; }
        .font-serif { font-family: 'Lora', Georgia, serif; }
        .hero-bg {
            background-color: #faf7f2;
            background-image: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c9b99a' fill-opacity='0.12'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="bg-[#faf7f2] text-stone-800 antialiased min-h-screen flex flex-col overflow-x-hidden selection:bg-amber-300 selection:text-stone-900">

    <!-- Header Navbar -->
    <header class="sticky top-0 z-50 bg-[#faf7f2]/90 backdrop-blur-sm border-b border-stone-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center gap-2.5 group">
                    <img src="{{ asset('favicon.png') }}" alt="KKN Digital" class="w-8 h-8 rounded-xl object-cover">
                    <span class="text-base font-black text-stone-800 tracking-tight">KKN<span class="text-green-700">Digital</span></span>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center gap-7 text-sm font-semibold text-stone-500">
                    <a href="{{ url('/') }}#paket" class="hover:text-stone-900 transition-colors">Paket Harga</a>
                    <a href="{{ url('/') }}#template" class="hover:text-stone-900 transition-colors">Contoh Template</a>
                    <a href="{{ url('/admin/orders') }}" class="hover:text-stone-900 transition-colors">Pesanan</a>
                </nav>

                <!-- CTA -->
                <a href="{{ url('/order') }}" class="px-4 py-2 bg-green-700 hover:bg-green-800 text-white text-sm font-bold rounded-lg transition-colors shadow-sm">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-stone-900 text-stone-400 pt-14 pb-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('favicon.png') }}" alt="KKN Digital" class="w-7 h-7 rounded-lg object-cover">
                        <span class="text-base font-black text-white">KKN<span class="text-green-400">Digital</span></span>
                    </div>
                    <p class="text-sm text-stone-400 max-w-xs leading-relaxed mb-5">
                        Bantu kelompok KKN kamu tampil profesional di dunia digital. Murah, cepat, dan tepat sasaran.
                    </p>
                    <a href="https://wa.me/6287859017087" target="_blank" class="inline-flex items-center gap-2 text-xs font-semibold text-green-400 hover:text-green-300 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.835-4.577c1.611.956 3.197 1.467 4.905 1.468 5.582 0 10.133-4.55 10.136-10.13.002-2.701-1.047-5.242-2.952-7.149C17.076 1.704 14.546.654 11.834.654 6.252.654 1.7 5.205 1.697 10.787a10.098 10.098 0 001.405 5.048l-.404 1.48 4.194-1.1c1.558.85 3.253 1.3 4.995 1.301z"/></svg>
                        WhatsApp Kami
                    </a>
                </div>

                <div>
                    <h4 class="text-xs font-bold text-stone-300 uppercase tracking-widest mb-4">Pilihan Paket</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ url('/') }}#paket" class="hover:text-stone-200 transition-colors">Paket Basic</a></li>
                        <li><a href="{{ url('/') }}#paket" class="hover:text-stone-200 transition-colors">Paket Standard</a></li>
                        <li><a href="{{ url('/') }}#paket" class="hover:text-stone-200 transition-colors">Paket Pro</a></li>
                        <li><a href="{{ url('/') }}#paket" class="hover:text-stone-200 transition-colors">Paket Premium</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold text-stone-300 uppercase tracking-widest mb-4">Navigasi</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-stone-200 transition-colors">Beranda</a></li>
                        <li><a href="{{ url('/order') }}" class="hover:text-stone-200 transition-colors">Form Pemesanan</a></li>
                        <li><a href="{{ url('/admin/orders') }}" class="hover:text-stone-200 transition-colors">Daftar Pesanan</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-stone-800 pt-6 flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-stone-600">
                <p>&copy; {{ date('Y') }} KKN Digital. Dibuat dengan ❤️ untuk para pejuang pengabdian.</p>
                <a href="#" class="flex items-center gap-1.5 hover:text-stone-400 transition-colors">
                    <span class="text-stone-500">Powered by</span>
                    <img src="{{ asset('favicon.png') }}" alt="SAT Project" class="w-4 h-4 rounded object-cover opacity-80">
                    <strong class="text-stone-400">SAT Project</strong>
                </a>
            </div>
        </div>
    </footer>

</body>
</html>
