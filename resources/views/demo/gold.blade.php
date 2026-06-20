<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal KKN Desa Karanganyar — KKN UNDIP 2026</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&family=Lora:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        body { font-family: 'Nunito', sans-serif; }
        .lora { font-family: 'Lora', Georgia, serif; }
    </style>
</head>
<body class="bg-[#f8f5f0] text-stone-800 min-h-screen flex flex-col">

    <!-- Demo Notice -->
    <div class="bg-stone-800 text-stone-300 py-2 px-4 text-center text-[11px] font-semibold">
        Pratinjau Template Gold (Multi-Page & Portal Berita) — <a href="{{ url('/') }}#template" class="text-amber-400 underline">Kembali ke KKN Digital</a>
    </div>

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 bg-stone-900 text-white border-b border-stone-700 shadow-md">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex justify-between items-center h-14">
            <span class="font-black text-white tracking-tight">🌾 Portal KKN Karanganyar</span>
            <div class="hidden md:flex items-center text-xs font-bold text-stone-300">
                <a href="{{ url('/demo/gold?page=home') }}" class="px-4 py-4 hover:text-white {{ $page == 'home' ? 'border-b-2 border-amber-400 text-white' : '' }} transition-colors">Beranda</a>
                <a href="{{ url('/demo/gold?page=profil') }}" class="px-4 py-4 hover:text-white {{ $page == 'profil' ? 'border-b-2 border-amber-400 text-white' : '' }} transition-colors">Profil</a>
                <a href="{{ url('/demo/gold?page=kegiatan') }}" class="px-4 py-4 hover:text-white {{ $page == 'kegiatan' ? 'border-b-2 border-amber-400 text-white' : '' }} transition-colors">Kegiatan</a>
                <a href="{{ url('/demo/gold?page=galeri') }}" class="px-4 py-4 hover:text-white {{ $page == 'galeri' ? 'border-b-2 border-amber-400 text-white' : '' }} transition-colors">Galeri</a>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <main class="flex-grow">

        @if($page == 'home')
        <!-- BERANDA -->
        <section class="bg-amber-50 border-b border-amber-200 py-16 px-4">
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-3">KKN Universitas Diponegoro • Unit 08</p>
                    <h1 class="lora text-3xl sm:text-4xl font-semibold leading-snug text-stone-900 mb-4">
                        Pengabdian & Kemitraan di <em>Desa Karanganyar</em> 2026
                    </h1>
                    <p class="text-stone-600 text-sm leading-relaxed mb-6">
                        Membangun potensi UMKM dan ekosistem pertanian desa berbasis digital, mewujudkan kemandirian ekonomi warga Karanganyar.
                    </p>
                    <a href="{{ url('/demo/gold?page=kegiatan') }}" class="inline-block px-5 py-2.5 bg-stone-800 hover:bg-stone-900 text-white font-bold rounded-lg text-sm transition-all">
                        Lihat Kegiatan Terbaru
                    </a>
                </div>
                <div class="bg-amber-100 border-2 border-dashed border-amber-300 rounded-2xl h-56 flex items-center justify-center">
                    <div class="text-center text-amber-600">
                        <div class="text-4xl mb-2">🌾</div>
                        <p class="text-sm font-semibold">Foto Balai Desa Karanganyar</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kegiatan Terbaru -->
        <section class="py-16 max-w-5xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-1">Terbaru</p>
                    <h2 class="text-2xl font-black text-stone-900">Kegiatan & Berita KKN</h2>
                </div>
                <a href="{{ url('/demo/gold?page=kegiatan') }}" class="text-xs font-bold text-stone-600 hover:text-stone-900 transition-colors">Semua kegiatan →</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden hover:shadow-md transition-all">
                    <div class="h-36 bg-stone-100 border-b border-stone-200 flex items-center justify-center text-stone-400 text-xs font-semibold">
                        📷 Kerja Bakti
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] text-stone-400 font-semibold mb-1">20 Juni 2026</p>
                        <h3 class="font-black text-stone-800 text-sm mb-2">Kerja Bakti & Penghijauan</h3>
                        <p class="text-xs text-stone-500 leading-relaxed">Menanam bibit pohon buah di sepanjang jalan desa bersama pemuda karang taruna.</p>
                    </div>
                </div>
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden hover:shadow-md transition-all">
                    <div class="h-36 bg-stone-100 border-b border-stone-200 flex items-center justify-center text-stone-400 text-xs font-semibold">
                        📷 Pelatihan UMKM
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] text-stone-400 font-semibold mb-1">18 Juni 2026</p>
                        <h3 class="font-black text-stone-800 text-sm mb-2">Sosialisasi Pemasaran Digital</h3>
                        <p class="text-xs text-stone-500 leading-relaxed">Edukasi foto produk dan pembuatan akun toko online untuk ibu-ibu PKK desa.</p>
                    </div>
                </div>
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden hover:shadow-md transition-all">
                    <div class="h-36 bg-stone-100 border-b border-stone-200 flex items-center justify-center text-stone-400 text-xs font-semibold">
                        📷 Pojok Baca
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] text-stone-400 font-semibold mb-1">15 Juni 2026</p>
                        <h3 class="font-black text-stone-800 text-sm mb-2">Peresmian Pojok Baca</h3>
                        <p class="text-xs text-stone-500 leading-relaxed">Rak perpustakaan baru diisi donasi buku dari mahasiswa untuk anak-anak desa.</p>
                    </div>
                </div>
            </div>
        </section>

        @elseif($page == 'profil')
        <!-- PROFIL -->
        <section class="py-16 max-w-3xl mx-auto px-4 sm:px-6">
            <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Tentang Kami</p>
            <h1 class="text-3xl font-black text-stone-900 mb-6">Profil Desa Karanganyar</h1>
            <div class="prose prose-sm prose-stone max-w-none space-y-4 text-sm text-stone-600 leading-relaxed">
                <p>Desa Karanganyar merupakan kawasan pedesaan subur di lereng gunung dengan struktur tanah yang sangat mendukung pertanian holtikultura. Dengan ketinggian sekitar 600 meter di atas permukaan laut, desa ini memiliki iklim yang sejuk dan produktif.</p>
                <p>Visi KKN UNDIP 2026: <strong class="text-stone-800">"Desa Karanganyar Berdaya dan Digital"</strong> — berkolaborasi dengan aparatur desa untuk meningkatkan kapasitas administrasi dan pemanfaatan promosi digital UMKM.</p>
            </div>
            <hr class="border-stone-200 my-10">
            <h2 class="text-xl font-black text-stone-900 mb-5">Program Kerja Strategis</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-white border border-stone-200 rounded-xl p-5">
                    <h4 class="font-black text-stone-800 mb-2 text-sm">Inkubasi UMKM</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Membantu 5 UMKM desa dalam mendaftarkan izin usaha, mendesain kemasan, dan memasarkan produk secara online.</p>
                </div>
                <div class="bg-white border border-stone-200 rounded-xl p-5">
                    <h4 class="font-black text-stone-800 mb-2 text-sm">Website Profil Desa</h4>
                    <p class="text-xs text-stone-500 leading-relaxed">Inisiasi pembangunan situs web desa sebagai media keterbukaan informasi untuk publik.</p>
                </div>
            </div>
        </section>

        @elseif($page == 'kegiatan')
        <!-- KEGIATAN -->
        <section class="py-16 max-w-3xl mx-auto px-4 sm:px-6">
            <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Blog & Berita</p>
            <h1 class="text-3xl font-black text-stone-900 mb-8">Kegiatan & Liputan KKN</h1>
            <div class="space-y-6">
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden flex flex-col sm:flex-row">
                    <div class="sm:w-1/3 min-h-[120px] bg-stone-100 flex items-center justify-center text-stone-400 text-xs font-semibold">📷 Kegiatan</div>
                    <div class="p-5 flex flex-col justify-between">
                        <div>
                            <p class="text-[10px] text-stone-400 font-bold mb-1">20 JUNI 2026</p>
                            <h3 class="font-black text-stone-800 text-base mb-2">Kerja Bakti & Penghijauan Lingkungan</h3>
                            <p class="text-xs text-stone-500 leading-relaxed">Kelompok KKN bersama pemuda karang taruna menanam bibit pohon buah di tepi jalan masuk desa...</p>
                        </div>
                        <span class="text-xs font-black text-amber-600 mt-3 cursor-pointer hover:underline">Baca selengkapnya →</span>
                    </div>
                </div>
                <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden flex flex-col sm:flex-row">
                    <div class="sm:w-1/3 min-h-[120px] bg-stone-100 flex items-center justify-center text-stone-400 text-xs font-semibold">📷 Pelatihan</div>
                    <div class="p-5 flex flex-col justify-between">
                        <div>
                            <p class="text-[10px] text-stone-400 font-bold mb-1">18 JUNI 2026</p>
                            <h3 class="font-black text-stone-800 text-base mb-2">Sosialisasi Pemasaran Digital UMKM</h3>
                            <p class="text-xs text-stone-500 leading-relaxed">Edukasi pembuatan katalog digital dan pendaftaran di Google Maps untuk UMKM Desa...</p>
                        </div>
                        <span class="text-xs font-black text-amber-600 mt-3 cursor-pointer hover:underline">Baca selengkapnya →</span>
                    </div>
                </div>
            </div>
        </section>

        @elseif($page == 'galeri')
        <!-- GALERI -->
        <section class="py-16 max-w-4xl mx-auto px-4 sm:px-6">
            <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Dokumentasi Visual</p>
            <h1 class="text-3xl font-black text-stone-900 mb-8">Galeri Foto Kegiatan</h1>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-5">
                <div class="bg-white p-3 rounded-2xl border border-stone-200 shadow-sm hover:shadow-md transition-all">
                    <div class="aspect-video bg-stone-100 rounded-lg flex items-center justify-center text-stone-400 text-xs font-semibold mb-3">📷</div>
                    <p class="text-xs font-bold text-stone-800 text-center">Pojok Baca</p>
                </div>
                <div class="bg-white p-3 rounded-2xl border border-stone-200 shadow-sm hover:shadow-md transition-all">
                    <div class="aspect-video bg-stone-100 rounded-lg flex items-center justify-center text-stone-400 text-xs font-semibold mb-3">📷</div>
                    <p class="text-xs font-bold text-stone-800 text-center">Pelatihan Kemasan UMKM</p>
                </div>
                <div class="bg-white p-3 rounded-2xl border border-stone-200 shadow-sm hover:shadow-md transition-all">
                    <div class="aspect-video bg-stone-100 rounded-lg flex items-center justify-center text-stone-400 text-xs font-semibold mb-3">📷</div>
                    <p class="text-xs font-bold text-stone-800 text-center">Kesehatan Gratis</p>
                </div>
            </div>
        </section>
        @endif

    </main>

    <!-- Footer -->
    <footer class="bg-stone-900 text-stone-400 text-xs py-6 text-center mt-auto border-t border-stone-800">
        <p>&copy; 2026 KKN Karanganyar UNDIP. Dibuat oleh <a href="{{ url('/') }}" class="text-amber-400 hover:underline">KKN Digital</a>.</p>
    </footer>
</body>
</html>
