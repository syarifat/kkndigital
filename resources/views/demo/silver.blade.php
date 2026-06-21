<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKN Desa Surya Mukti — Website Resmi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&family=Lora:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        body { font-family: 'Nunito', sans-serif; }
        .lora { font-family: 'Lora', Georgia, serif; }
    </style>
</head>
<body class="bg-[#f8f5f0] text-stone-800 min-h-screen">

    <!-- Demo Notice Bar -->
    <div class="bg-stone-800 text-stone-300 py-2 px-4 text-center text-[11px] font-semibold">
        Ini adalah pratinjau Template Silver — <a href="{{ url('/') }}#template" class="text-amber-400 underline">Kembali ke KKN Digital</a> untuk memesan
    </div>

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 bg-white border-b border-stone-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex justify-between items-center h-14">
            <span class="font-black text-green-800 text-base tracking-tight">🌾 KKN Surya Mukti</span>
            <div class="hidden md:flex items-center gap-6 text-xs font-bold text-stone-500">
                <a href="#profil" class="hover:text-green-700 transition-colors">Profil</a>
                <a href="#proker" class="hover:text-green-700 transition-colors">Program Kerja</a>
                <a href="#galeri" class="hover:text-green-700 transition-colors">Galeri</a>
                <a href="#struktur" class="hover:text-green-700 transition-colors">Kelompok</a>
                <a href="https://wa.me/6287859017087" target="_blank" class="px-3 py-1.5 bg-green-700 text-white rounded-lg hover:bg-green-800 transition-colors">Hubungi</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative bg-green-800 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'3\'/%3E%3Ccircle cx=\'13\' cy=\'13\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E'); background-size: 20px;"></div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-20 relative z-10">
            <p class="text-xs font-bold uppercase tracking-widest text-green-300 mb-3">KKN PPM UGM Tahun 2026 • Unit 12</p>
            <h1 class="lora text-4xl sm:text-5xl font-semibold leading-tight mb-4 max-w-2xl">
                Pengabdian Masyarakat di <em>Desa Surya Mukti</em>
            </h1>
            <p class="text-green-200 text-sm leading-relaxed max-w-lg mb-8">
                Bersama-sama meningkatkan potensi pertanian desa dan memperkenalkan digitalisasi administrasi posyandu kepada warga Desa Surya Mukti, Kec. Ngaglik, Kab. Sleman.
            </p>
            <div class="flex flex-wrap gap-3">
                <a href="#proker" class="px-5 py-2.5 bg-amber-400 hover:bg-amber-300 text-amber-900 font-bold rounded-lg text-sm transition-all">
                    Lihat Program Kerja
                </a>
                <a href="https://wa.me/6287859017087" target="_blank" class="px-5 py-2.5 border border-green-500 text-green-100 hover:bg-green-700 font-semibold rounded-lg text-sm transition-all">
                    Hubungi Kami
                </a>
            </div>
        </div>
        <!-- Decorative wave -->
        <div class="h-8 bg-[#f8f5f0]" style="clip-path: ellipse(55% 100% at 50% 100%)"></div>
    </section>

    <!-- Stat Bar -->
    <section class="bg-amber-50 border-y border-amber-200 py-4">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 grid grid-cols-3 gap-4 text-center">
            <div>
                <p class="text-xl font-black text-green-800">1.250</p>
                <p class="text-[11px] text-stone-500 font-semibold uppercase tracking-wide">Jiwa Penduduk</p>
            </div>
            <div>
                <p class="text-xl font-black text-green-800">4</p>
                <p class="text-[11px] text-stone-500 font-semibold uppercase tracking-wide">Dusun</p>
            </div>
            <div>
                <p class="text-xl font-black text-green-800">8</p>
                <p class="text-[11px] text-stone-500 font-semibold uppercase tracking-wide">Program Kerja</p>
            </div>
        </div>
    </section>

    <!-- Profil Desa -->
    <section id="profil" class="py-16 max-w-5xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Mengenal Desa Kami</p>
                <h2 class="text-2xl font-black text-stone-900 mb-4 leading-snug">Sekilas tentang Desa Surya Mukti</h2>
                <p class="text-stone-600 text-sm leading-relaxed mb-4">
                    Desa Surya Mukti berada di dataran tinggi yang sejuk dengan mayoritas warga berprofesi sebagai petani teh dan sayuran. Desa ini kaya akan kearifan lokal dan tradisi gotong royong yang masih kuat dijalankan.
                </p>
                <p class="text-stone-600 text-sm leading-relaxed">
                    KKN UGM hadir untuk mendampingi warga dalam meningkatkan kapasitas digital, mulai dari digitalisasi posyandu hingga penguatan UMKM lokal melalui pemasaran online.
                </p>
            </div>
            <div class="bg-green-100 border-2 border-dashed border-green-300 rounded-2xl h-60 flex items-center justify-center">
                <div class="text-center text-green-600">
                    <div class="text-5xl mb-2">🌄</div>
                    <p class="text-sm font-semibold">Foto Panorama Desa</p>
                    <p class="text-xs text-green-500">(akan diisi foto asli)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja -->
    <section id="proker" class="py-16 bg-white border-y border-stone-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="mb-10">
                <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Aksi Nyata</p>
                <h2 class="text-2xl font-black text-stone-900">Program Kerja Kelompok KKN</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="bg-stone-50 border border-stone-200 rounded-2xl p-6">
                    <span class="text-3xl mb-4 block">🗺️</span>
                    <h3 class="font-black text-stone-800 mb-2">Peta Digital Desa</h3>
                    <p class="text-xs text-stone-500 leading-relaxed">Pembuatan peta batas administratif desa berbasis GIS untuk mempermudah arsip spasial kantor desa.</p>
                    <span class="inline-block mt-3 text-[10px] font-black uppercase tracking-widest bg-green-100 text-green-700 px-2 py-0.5 rounded">Fisik</span>
                </div>
                <div class="bg-stone-50 border border-stone-200 rounded-2xl p-6">
                    <span class="text-3xl mb-4 block">📋</span>
                    <h3 class="font-black text-stone-800 mb-2">Digitalisasi Posyandu</h3>
                    <p class="text-xs text-stone-500 leading-relaxed">Sistem digital sederhana berbasis spreadsheet untuk mempercepat monitoring tumbuh kembang balita.</p>
                    <span class="inline-block mt-3 text-[10px] font-black uppercase tracking-widest bg-amber-100 text-amber-700 px-2 py-0.5 rounded">Keilmuan</span>
                </div>
                <div class="bg-stone-50 border border-stone-200 rounded-2xl p-6">
                    <span class="text-3xl mb-4 block">📚</span>
                    <h3 class="font-black text-stone-800 mb-2">Bimbel Bahasa Inggris</h3>
                    <p class="text-xs text-stone-500 leading-relaxed">Bimbingan belajar menyenangkan bagi anak SD dan SMP di balai dusun, setiap sore hari.</p>
                    <span class="inline-block mt-3 text-[10px] font-black uppercase tracking-widest bg-blue-100 text-blue-700 px-2 py-0.5 rounded">Non-Fisik</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="py-16 max-w-5xl mx-auto px-4 sm:px-6">
        <div class="mb-10">
            <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Dokumentasi</p>
            <h2 class="text-2xl font-black text-stone-900">Galeri Kegiatan</h2>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            <div class="aspect-square bg-stone-200 rounded-xl flex flex-col items-center justify-center text-stone-400 text-xs font-semibold gap-1 border border-stone-300 border-dashed">
                <span class="text-2xl">📸</span> Sosialisasi GIS
            </div>
            <div class="aspect-square bg-stone-200 rounded-xl flex flex-col items-center justify-center text-stone-400 text-xs font-semibold gap-1 border border-stone-300 border-dashed">
                <span class="text-2xl">📸</span> Bimbel Anak
            </div>
            <div class="aspect-square bg-stone-200 rounded-xl flex flex-col items-center justify-center text-stone-400 text-xs font-semibold gap-1 border border-stone-300 border-dashed">
                <span class="text-2xl">📸</span> Kerja Bakti
            </div>
            <div class="aspect-square bg-stone-200 rounded-xl flex flex-col items-center justify-center text-stone-400 text-xs font-semibold gap-1 border border-stone-300 border-dashed">
                <span class="text-2xl">📸</span> Festival Budaya
            </div>
        </div>
    </section>

    <!-- Struktur Kelompok -->
    <section id="struktur" class="py-16 bg-white border-t border-stone-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="mb-10">
                <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Tim Kami</p>
                <h2 class="text-2xl font-black text-stone-900">Struktur Kelompok KKN</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-2xl">
                <div class="text-center">
                    <div class="w-20 h-20 bg-green-100 border-2 border-green-400 rounded-full mx-auto mb-3 flex items-center justify-center text-2xl">😊</div>
                    <h4 class="font-black text-stone-800 text-sm">Budi Santoso</h4>
                    <p class="text-[11px] text-green-700 font-semibold mt-0.5">Ketua Unit</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-amber-100 border-2 border-amber-400 rounded-full mx-auto mb-3 flex items-center justify-center text-2xl">😊</div>
                    <h4 class="font-black text-stone-800 text-sm">Siti Rahmawati</h4>
                    <p class="text-[11px] text-green-700 font-semibold mt-0.5">Sekretaris</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-stone-100 border-2 border-stone-300 rounded-full mx-auto mb-3 flex items-center justify-center text-2xl">😊</div>
                    <h4 class="font-black text-stone-800 text-sm">Rahmat Hidayat</h4>
                    <p class="text-[11px] text-green-700 font-semibold mt-0.5">Bendahara</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-16 bg-green-800 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-[10px] font-black uppercase tracking-widest text-green-300 mb-2">Sekretariat</p>
                <h3 class="text-2xl font-black mb-3">Hubungi Kami</h3>
                <p class="text-green-200 text-sm leading-relaxed mb-6">
                    Kantor Kepala Desa Surya Mukti, Dusun Kaliurip RT 02/01, Kec. Ngaglik, Kab. Sleman, D.I. Yogyakarta.
                </p>
                <a href="https://wa.me/6287859017087" target="_blank" class="inline-flex items-center gap-2 px-5 py-3 bg-amber-400 hover:bg-amber-300 text-amber-900 font-black rounded-xl text-sm transition-all">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24z"/></svg>
                    WhatsApp KKN
                </a>
            </div>
            <div class="bg-green-700/50 border border-green-600 rounded-2xl h-48 flex items-center justify-center">
                <div class="text-center text-green-300">
                    <div class="text-4xl mb-2">🗺️</div>
                    <p class="text-sm font-semibold">Embed Google Maps</p>
                    <p class="text-xs text-green-400">(akan diisi peta asli)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-stone-900 text-stone-400 text-xs py-6 text-center">
        <p>&copy; 2026 KKN Surya Mukti UGM. Dibuat oleh <a href="{{ url('/') }}" class="text-amber-400 hover:underline">KKN Digital</a>.</p>
    </footer>

</body>
</html>
