<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Desa Sariharjo — KKN UI 2026</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&family=Lora:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        body { font-family: 'Nunito', sans-serif; }
        .lora { font-family: 'Lora', Georgia, serif; }
    </style>
</head>
<body class="bg-white text-stone-800 min-h-screen flex flex-col">

    <!-- Demo Notice -->
    <div class="bg-amber-500 text-amber-900 py-2 px-4 text-center text-[11px] font-bold">
        Pratinjau Template Platinum (Full Features) — <a href="{{ url('/') }}#template" class="underline">Kembali ke KKN Digital</a>
    </div>

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 bg-white border-b border-stone-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex justify-between items-center h-14">
            <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full bg-amber-500 flex items-center justify-center text-white font-black text-sm">S</div>
                <span class="font-black text-stone-900 tracking-tight text-sm">Portal Desa Sariharjo</span>
            </div>
            <div class="hidden md:flex items-center gap-5 text-xs font-bold text-stone-500">
                <a href="#hero" class="hover:text-stone-800 transition-colors">Beranda</a>
                <a href="#potensi" class="hover:text-stone-800 transition-colors">Potensi</a>
                <a href="#downloads" class="hover:text-stone-800 transition-colors">Dokumen</a>
                <a href="#aduan" class="px-3 py-1.5 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition-colors font-bold">Kotak Saran</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">

        <!-- Hero -->
        <section id="hero" class="bg-stone-900 text-white py-20 px-4 relative overflow-hidden">
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            <div class="max-w-5xl mx-auto relative z-10 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <span class="inline-block text-[10px] font-black uppercase tracking-widest bg-amber-500/20 border border-amber-500/30 text-amber-300 px-3 py-1.5 rounded-full mb-4">KKN Universitas Indonesia • Unit 04 • 2026</span>
                    <h1 class="lora text-3xl sm:text-4xl font-semibold leading-snug text-white mb-4">
                        Digitalisasi Administrasi & Pariwisata <em>Desa Sariharjo</em>
                    </h1>
                    <p class="text-stone-300 text-sm leading-relaxed mb-6">
                        Platform terpadu untuk penyebaran informasi desa, publikasi program kerja, dan saluran aspirasi warga secara digital.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#potensi" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-400 text-white font-bold rounded-lg text-sm transition-all">Jelajahi Desa</a>
                        <a href="#aduan" class="px-5 py-2.5 border border-stone-600 text-stone-300 hover:border-stone-400 font-semibold rounded-lg text-sm transition-all">Sampaikan Aspirasi</a>
                    </div>
                </div>
                <div class="bg-stone-800 border border-stone-700 rounded-2xl h-56 flex items-center justify-center">
                    <div class="text-center text-stone-400">
                        <div class="text-5xl mb-2">🏛️</div>
                        <p class="text-sm font-semibold">Foto Balai Desa Sariharjo</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Potensi Desa -->
        <section id="potensi" class="py-16 bg-[#faf7f2] border-b border-stone-200">
            <div class="max-w-5xl mx-auto px-4 sm:px-6">
                <div class="mb-10">
                    <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Profil & Potensi</p>
                    <h2 class="text-2xl font-black text-stone-900">Mengenal Desa Sariharjo</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white border border-stone-200 rounded-2xl p-6 hover:shadow-md transition-all">
                        <div class="text-3xl mb-4">🍲</div>
                        <h3 class="font-black text-stone-800 mb-2">Sentra Kuliner Tradisional</h3>
                        <p class="text-xs text-stone-500 leading-relaxed mb-3">Sariharjo terkenal dengan produksi makanan tradisional berkualitas tinggi. KKN UI membantu memetakan lokasi produsen ke sistem peta online.</p>
                        <span class="text-xs font-bold text-amber-600 cursor-pointer hover:underline">Lihat Pemetaan →</span>
                    </div>
                    <div class="bg-white border border-stone-200 rounded-2xl p-6 hover:shadow-md transition-all">
                        <div class="text-3xl mb-4">🏯</div>
                        <h3 class="font-black text-stone-800 mb-2">Cagar Budaya & Pariwisata</h3>
                        <p class="text-xs text-stone-500 leading-relaxed mb-3">Situs bersejarah bernilai tinggi kini dilengkapi e-brochure digital yang bisa diunduh bebas oleh wisatawan dari seluruh penjuru.</p>
                        <span class="text-xs font-bold text-amber-600 cursor-pointer hover:underline">Buka Peta Wisata →</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Downloadable Documents -->
        <section id="downloads" class="py-16 bg-white border-b border-stone-100">
            <div class="max-w-5xl mx-auto px-4 sm:px-6">
                <div class="mb-10">
                    <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Pusat Unduhan</p>
                    <h2 class="text-2xl font-black text-stone-900">Dokumen & Laporan Publik</h2>
                    <p class="text-sm text-stone-400 mt-1">Semua dokumen berikut dapat diunduh secara bebas oleh masyarakat umum.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    <div class="border border-stone-200 rounded-2xl p-6 flex flex-col justify-between hover:shadow-md transition-all">
                        <div>
                            <span class="text-4xl block mb-3">📄</span>
                            <h4 class="font-black text-stone-800 text-sm mb-1">Laporan Akhir KKN</h4>
                            <p class="text-xs text-stone-400">PDF • 5.4 MB</p>
                        </div>
                        <button onclick="alert('Demo: Mengunduh Laporan Akhir KKN UI Desa Sariharjo 2026!')"
                            class="mt-5 w-full py-2.5 bg-stone-900 hover:bg-stone-700 text-white font-bold text-xs rounded-xl transition-all">
                            Unduh PDF
                        </button>
                    </div>
                    <div class="border border-stone-200 rounded-2xl p-6 flex flex-col justify-between hover:shadow-md transition-all">
                        <div>
                            <span class="text-4xl block mb-3">🗺️</span>
                            <h4 class="font-black text-stone-800 text-sm mb-1">E-Brochure Wisata</h4>
                            <p class="text-xs text-stone-400">PDF • 3.2 MB</p>
                        </div>
                        <button onclick="alert('Demo: Mengunduh E-Brochure Wisata Kuliner & Budaya Sariharjo!')"
                            class="mt-5 w-full py-2.5 bg-stone-900 hover:bg-stone-700 text-white font-bold text-xs rounded-xl transition-all">
                            Unduh PDF
                        </button>
                    </div>
                    <div class="border-2 border-amber-300 bg-amber-50 rounded-2xl p-6 flex flex-col justify-between hover:shadow-md transition-all">
                        <div>
                            <span class="text-4xl block mb-3">📘</span>
                            <h4 class="font-black text-stone-800 text-sm mb-1">Modul UMKM Digital</h4>
                            <p class="text-xs text-stone-400">PDF • 1.8 MB</p>
                        </div>
                        <button onclick="alert('Demo: Mengunduh Modul Inkubasi UMKM Desa!')"
                            class="mt-5 w-full py-2.5 bg-amber-500 hover:bg-amber-600 text-white font-bold text-xs rounded-xl transition-all">
                            Unduh PDF
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kotak Aduan/Saran -->
        <section id="aduan" class="py-16 bg-[#faf7f2]">
            <div class="max-w-2xl mx-auto px-4 sm:px-6">
                <div class="mb-8">
                    <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Interaktif Warga</p>
                    <h2 class="text-2xl font-black text-stone-900">Kotak Saran & Pengaduan</h2>
                    <p class="text-sm text-stone-400 mt-1">Sampaikan masukan, kritik, atau aduan untuk desa. Pesan akan direkap oleh tim KKN.</p>
                </div>

                <div class="bg-white border border-stone-200 rounded-2xl p-7 shadow-sm">
                    <form onsubmit="event.preventDefault(); alert('Demo Sukses! Pesan Anda telah terkirim ke admin KKN Sariharjo.'); this.reset();">
                        <div class="space-y-5">
                            <div>
                                <label class="block text-xs font-bold text-stone-600 mb-2">Nama Pengirim</label>
                                <input type="text" placeholder="cth: Pak Slamet, Warga Dusun Sari" required class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm text-stone-800 focus:outline-none focus:border-amber-500 placeholder:text-stone-300 transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-stone-600 mb-2">Dusun / RT</label>
                                <input type="text" placeholder="cth: Dusun Sari RT 03" required class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm text-stone-800 focus:outline-none focus:border-amber-500 placeholder:text-stone-300 transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-stone-600 mb-2">Isi Aduan / Saran</label>
                                <textarea rows="4" placeholder="Tulis keluhan atau saran pengembangan desa..." required class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm text-stone-800 focus:outline-none focus:border-amber-500 placeholder:text-stone-300 transition-colors resize-none"></textarea>
                            </div>
                            <button type="submit" class="w-full py-3 bg-amber-500 hover:bg-amber-600 text-white font-black rounded-xl text-sm transition-all shadow-md">
                                Kirim Aduan / Saran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-stone-900 text-stone-400 text-xs py-6 text-center border-t border-stone-800">
        <p>&copy; 2026 KKN Sariharjo Universitas Indonesia. Dibuat oleh <a href="{{ url('/') }}" class="text-amber-400 hover:underline">KKN Digital</a>.</p>
    </footer>

</body>
</html>
