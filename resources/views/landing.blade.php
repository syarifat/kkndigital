@extends('layouts.app')

@section('title', 'KKN Digital — Jasa Website KKN Murah, Cepat & Profesional')

@section('content')

<!-- ====== HERO ====== -->
<section class="hero-bg border-b border-stone-200 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 py-20 md:py-28">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <span class="inline-block text-xs font-bold bg-amber-100 text-amber-700 border border-amber-200 px-3 py-1.5 rounded-full mb-5">
                    🌾 Untuk Mahasiswa KKN 2025/2026
                </span>
                <h1 class="text-4xl sm:text-5xl font-black text-stone-900 leading-[1.1] mb-5">
                    Website KKN-mu,<br>
                    <span class="font-serif italic font-semibold text-green-700">dibuat serius</span><br>
                    dengan harga mahasiswa.
                </h1>
                <p class="text-stone-600 text-base leading-relaxed mb-8 max-w-md">
                    Profil desa, program kerja, logbook, galeri — semua terabadikan. Tinggal pilih paket, isi form, dan kami yang kerjakan.
                </p>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ url('/order') }}" class="px-6 py-3 bg-green-700 hover:bg-green-800 text-white font-bold rounded-lg text-sm shadow-md transition-all hover:shadow-lg">
                        Buat Website Sekarang
                    </a>
                    <a href="#template" class="px-6 py-3 bg-white border border-stone-300 hover:border-stone-400 text-stone-700 font-semibold rounded-lg text-sm transition-all">
                        Lihat Contoh Template
                    </a>
                </div>
            </div>

            <!-- Right: Visual cards -->
            <div class="hidden md:flex flex-col gap-4 relative">
                <div class="bg-white rounded-2xl border border-stone-200 p-5 shadow-md ml-8 rotate-1 hover:-rotate-0 transition-transform duration-500">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-700 font-black text-sm">D</div>
                        <div>
                            <p class="font-bold text-stone-800 text-sm">Desa Ngadiharjo</p>
                            <p class="text-xs text-stone-400">KKN UGM 2026 • Sudah Live ✅</p>
                        </div>
                    </div>
                    <div class="h-1.5 bg-stone-100 rounded-full"><div class="h-full bg-green-500 rounded-full" style="width:90%"></div></div>
                </div>
                <div class="bg-green-700 text-white rounded-2xl p-5 shadow-lg -rotate-1 hover:rotate-0 transition-transform duration-500">
                    <p class="text-xs font-bold uppercase tracking-widest text-green-300 mb-2">Paket PRO Terlaris</p>
                    <p class="text-3xl font-black">Rp 750.000</p>
                    <p class="text-green-300 text-xs mt-1">Multi-page + Blog Kegiatan + Status Proker</p>
                </div>
                <div class="bg-amber-50 border border-amber-200 rounded-2xl p-5 shadow-sm -ml-4 rotate-0.5 hover:rotate-0 transition-transform duration-500">
                    <p class="text-xs font-bold text-stone-500 mb-2">⏱ Rata-rata pengerjaan</p>
                    <p class="font-black text-stone-800 text-2xl">3 – 10<span class="text-base font-semibold"> hari kerja</span></p>
                </div>
            </div>
        </div>

        <!-- Trust bar -->
        <div class="mt-16 pt-10 border-t border-stone-200 grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
            <div>
                <p class="text-2xl font-black text-green-700">4 Paket</p>
                <p class="text-xs text-stone-500 mt-0.5">Mulai dari Rp 200.000</p>
            </div>
            <div>
                <p class="text-2xl font-black text-green-700">Mobile</p>
                <p class="text-xs text-stone-500 mt-0.5">Tampilan Responsive</p>
            </div>
            <div>
                <p class="text-2xl font-black text-green-700">Konsultasi</p>
                <p class="text-xs text-stone-500 mt-0.5">Gratis via WhatsApp</p>
            </div>
            <div>
                <p class="text-2xl font-black text-green-700">Kilat</p>
                <p class="text-xs text-stone-500 mt-0.5">Pengerjaan 3-10 Hari</p>
            </div>
        </div>
    </div>
</section>

<!-- ====== PRICING (4 PAKET) ====== -->
<section id="paket" class="py-20 bg-white border-b border-stone-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center max-w-xl mx-auto mb-14">
            <p class="text-xs font-bold uppercase tracking-widest text-green-700 mb-2">Pilihan Paket Development</p>
            <h2 class="text-3xl font-black text-stone-900">Harga jasa sudah jelas, domain & hosting pilih sendiri.</h2>
            <p class="text-stone-400 text-sm mt-2">Harga di bawah adalah <strong>biaya jasa development saja</strong>. Domain & Hosting pilih sebagai add-on terpisah di bawah.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Paket BASIC -->
            <div class="bg-[#faf7f2] border border-stone-200 rounded-2xl p-6 flex flex-col justify-between hover:border-stone-300 transition-all">
                <div>
                    <span class="inline-block text-[10px] font-black uppercase tracking-widest bg-stone-200 text-stone-500 px-2.5 py-1 rounded-md mb-4">BASIC</span>
                    <p class="text-stone-600 text-xs mb-4 leading-relaxed">Paling hemat. Cocok untuk memenuhi syarat publikasi minimal.</p>
                    <p class="text-3xl font-black text-stone-900 mb-0.5">Rp 200k</p>
                    <p class="text-[11px] text-stone-400 mb-5">Jasa development saja</p>
                    <ul class="space-y-2 text-xs text-stone-600 mb-6">
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Single Page (Landing Page)</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Profil Kelompok & DPL</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Daftar Anggota</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Profil Desa & Peta Lokasi</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Daftar Proker (teks statis)</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Kontak & Media Sosial</li>
                        <li class="flex gap-2 items-start"><span class="text-stone-300 font-bold shrink-0">✗</span> <span class="text-stone-400">Panel Admin / CMS</span></li>
                    </ul>
                </div>
                <a href="{{ url('/order?package=basic') }}" class="block text-center py-2.5 border-2 border-stone-700 text-stone-700 font-bold rounded-xl hover:bg-stone-700 hover:text-white transition-all text-xs">
                    Pilih Paket Basic
                </a>
            </div>

            <!-- Paket STANDARD -->
            <div class="bg-[#faf7f2] border border-stone-200 rounded-2xl p-6 flex flex-col justify-between hover:border-stone-300 transition-all">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-block text-[10px] font-black uppercase tracking-widest bg-blue-100 text-blue-600 px-2.5 py-1 rounded-md">STANDARD</span>
                        <span class="text-[9px] font-black bg-blue-500 text-white px-2 py-0.5 rounded-full uppercase tracking-wide">Rekomendasi Dasar</span>
                    </div>
                    <p class="text-stone-600 text-xs mb-4 leading-relaxed">Tampilan lebih rapi dengan panel admin untuk update foto & proker.</p>
                    <p class="text-3xl font-black text-stone-900 mb-0.5">Rp 400k</p>
                    <p class="text-[11px] text-stone-400 mb-5">Jasa development saja</p>
                    <ul class="space-y-2 text-xs text-stone-600 mb-6">
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> <strong>Semua fitur Basic</strong></li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Multi-Page (beberapa halaman)</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> Dashboard Admin + Login</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> CMS Galeri Dokumentasi</li>
                        <li class="flex gap-2 items-start"><span class="text-green-600 font-bold shrink-0">✓</span> CMS Detail Proker & Progres</li>
                        <li class="flex gap-2 items-start"><span class="text-stone-300 font-bold shrink-0">✗</span> <span class="text-stone-400">Blog/Portal Berita</span></li>
                    </ul>
                </div>
                <a href="{{ url('/order?package=standard') }}" class="block text-center py-2.5 border-2 border-stone-700 text-stone-700 font-bold rounded-xl hover:bg-stone-700 hover:text-white transition-all text-xs">
                    Pilih Paket Standard
                </a>
            </div>

            <!-- Paket PRO -->
            <div class="bg-green-700 text-white border-2 border-green-700 rounded-2xl p-6 flex flex-col justify-between shadow-xl shadow-green-700/20">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-block text-[10px] font-black uppercase tracking-widest bg-green-600 text-green-100 px-2.5 py-1 rounded-md">PRO</span>
                        <span class="text-[9px] font-black bg-amber-400 text-amber-900 px-2 py-0.5 rounded-full uppercase tracking-wide">Terlaris ⭐</span>
                    </div>
                    <p class="text-green-200 text-xs mb-4 leading-relaxed">Publikasi kegiatan harian agar laporan KKN terlihat aktif & profesional.</p>
                    <p class="text-3xl font-black text-white mb-0.5">Rp 750k</p>
                    <p class="text-[11px] text-green-300 mb-5">Jasa development saja</p>
                    <ul class="space-y-2 text-xs text-green-100 mb-6">
                        <li class="flex gap-2 items-start"><span class="text-amber-300 font-bold shrink-0">✓</span> <strong>Semua fitur Standard</strong></li>
                        <li class="flex gap-2 items-start"><span class="text-amber-300 font-bold shrink-0">✓</span> Multi-Page + Sistem Blog/Berita</li>
                        <li class="flex gap-2 items-start"><span class="text-amber-300 font-bold shrink-0">✓</span> CMS Portal Berita & Artikel</li>
                        <li class="flex gap-2 items-start"><span class="text-amber-300 font-bold shrink-0">✓</span> Manajemen Status Proker</li>
                        <li class="flex gap-2 items-start"><span class="text-amber-300 font-bold shrink-0">✓</span> Kategori Berita per Divisi</li>
                    </ul>
                </div>
                <a href="{{ url('/order?package=pro') }}" class="block text-center py-2.5 bg-amber-400 hover:bg-amber-300 text-amber-900 font-black rounded-xl transition-all text-xs shadow">
                    Pilih Paket Pro
                </a>
            </div>

            <!-- Paket PREMIUM -->
            <div class="bg-stone-900 text-white border-2 border-stone-900 rounded-2xl p-6 flex flex-col justify-between shadow-xl">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-block text-[10px] font-black uppercase tracking-widest bg-amber-500 text-amber-900 px-2.5 py-1 rounded-md">PREMIUM</span>
                        <span class="text-[9px] font-black bg-white/10 text-white px-2 py-0.5 rounded-full uppercase tracking-wide">Best Value</span>
                    </div>
                    <p class="text-stone-300 text-xs mb-4 leading-relaxed">Paling lengkap. Nilai tambah besar bagi desa + tools akademik mahasiswa.</p>
                    <p class="text-3xl font-black text-white mb-0.5">Rp 1.000k</p>
                    <p class="text-[11px] text-stone-400 mb-5">Jasa development saja</p>
                    <ul class="space-y-2 text-xs text-stone-300 mb-6">
                        <li class="flex gap-2 items-start"><span class="text-amber-400 font-bold shrink-0">✓</span> <strong class="text-white">Semua fitur Pro</strong></li>
                        <li class="flex gap-2 items-start"><span class="text-amber-400 font-bold shrink-0">✓</span> Katalog Potensi Desa / UMKM</li>
                        <li class="flex gap-2 items-start"><span class="text-amber-400 font-bold shrink-0">✓</span> Logbook Digital KKN Harian</li>
                        <li class="flex gap-2 items-start"><span class="text-amber-400 font-bold shrink-0">✓</span> Export PDF Logbook (1-klik)</li>
                        <li class="flex gap-2 items-start"><span class="text-amber-400 font-bold shrink-0">✓</span> Infografis Statistik Desa</li>
                        <li class="flex gap-2 items-start"><span class="text-amber-400 font-bold shrink-0">✓</span> Multi-Role Akses (Ketua/Anggota)</li>
                    </ul>
                </div>
                <a href="{{ url('/order?package=premium') }}" class="block text-center py-2.5 bg-amber-500 hover:bg-amber-400 text-stone-900 font-black rounded-xl transition-all text-xs">
                    Pilih Paket Premium
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ====== ADD-ON DOMAIN & HOSTING ====== -->
<section id="addon" class="py-20 bg-[#faf7f2] border-b border-stone-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center max-w-xl mx-auto mb-14">
            <p class="text-xs font-bold uppercase tracking-widest text-green-700 mb-2">Add-On Domain & Hosting</p>
            <h2 class="text-3xl font-black text-stone-900">Pilih nama domain & durasi server-mu.</h2>
            <p class="text-stone-400 text-sm mt-2">Tambahkan ke paket development pilihanmu saat checkout. Hosting 20GB — cukup untuk ribuan foto.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Domain -->
            <div>
                <h3 class="font-black text-stone-800 mb-5 flex items-center gap-2"><span class="text-xl">🌐</span> Pilihan Domain (Aktif 1 Tahun)</h3>
                <div class="space-y-3">
                    <div class="bg-white border border-stone-200 rounded-xl p-4 flex justify-between items-center hover:border-stone-300 transition-all">
                        <div>
                            <span class="font-black text-stone-800 text-sm">Subdomain Gratis</span>
                            <p class="text-xs text-stone-400 mt-0.5"><code class="bg-stone-100 px-1.5 py-0.5 rounded text-[10px]">namakkn.satcloud.tech</code> — Aktif 6 bulan</p>
                        </div>
                        <span class="font-black text-green-700 text-sm shrink-0">GRATIS</span>
                    </div>
                    <div class="bg-white border border-stone-200 rounded-xl p-4 flex justify-between items-center hover:border-stone-300 transition-all">
                        <div>
                            <span class="font-black text-stone-800 text-sm">Ekstensi Standar</span>
                            <p class="text-xs text-stone-400 mt-0.5">.online, .site, .space — Aktif 1 tahun</p>
                        </div>
                        <span class="font-black text-stone-700 text-sm shrink-0">Rp 60.000</span>
                    </div>
                    <div class="bg-white border border-stone-200 rounded-xl p-4 flex justify-between items-center hover:border-stone-300 transition-all">
                        <div>
                            <span class="font-black text-stone-800 text-sm">Ekstensi Kreatif</span>
                            <p class="text-xs text-stone-400 mt-0.5">.blog, .click, .cloud — Aktif 1 tahun</p>
                        </div>
                        <span class="font-black text-stone-700 text-sm shrink-0">Rp 85.000</span>
                    </div>
                    <div class="bg-white border border-stone-200 rounded-xl p-4 flex justify-between items-center hover:border-stone-300 transition-all">
                        <div>
                            <span class="font-black text-stone-800 text-sm">Ekstensi Instansi</span>
                            <p class="text-xs text-stone-400 mt-0.5">.org — Aktif 1 tahun. Kesan formal & resmi.</p>
                        </div>
                        <span class="font-black text-stone-700 text-sm shrink-0">Rp 220.000</span>
                    </div>
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex justify-between items-center hover:border-amber-300 transition-all">
                        <div>
                            <span class="font-black text-stone-800 text-sm">Ekstensi Premium ⭐</span>
                            <p class="text-xs text-stone-400 mt-0.5">.com — Aktif 1 tahun. Paling populer & profesional.</p>
                        </div>
                        <span class="font-black text-amber-700 text-sm shrink-0">Rp 230.000</span>
                    </div>
                </div>
            </div>

            <!-- Hosting -->
            <div>
                <h3 class="font-black text-stone-800 mb-5 flex items-center gap-2"><span class="text-xl">🖥️</span> Paket Hosting (Storage 20GB)</h3>
                <p class="text-xs text-stone-400 mb-4 leading-relaxed">Mahasiswa KKN aktif 1–2 bulan di lapangan, tapi website perlu tetap aktif sampai nilai keluar & laporan selesai.</p>
                <div class="space-y-3">
                    <div class="bg-white border border-stone-200 rounded-xl p-5 hover:border-stone-300 transition-all">
                        <div class="flex justify-between items-start mb-2">
                            <span class="font-black text-stone-800">Hosting 3 Bulan</span>
                            <span class="font-black text-stone-700 text-lg">Rp 60.000</span>
                        </div>
                        <p class="text-xs text-stone-400">Pas untuk masa KKN + pelaporan singkat. Storage 20GB.</p>
                    </div>
                    <div class="bg-green-50 border-2 border-green-300 rounded-xl p-5 hover:border-green-400 transition-all">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <span class="font-black text-stone-800">Hosting 6 Bulan</span>
                                <span class="ml-2 text-[9px] font-black bg-green-600 text-white px-2 py-0.5 rounded-full">Rekomendasi Aman</span>
                            </div>
                            <span class="font-black text-green-700 text-lg">Rp 120.000</span>
                        </div>
                        <p class="text-xs text-stone-500">Cukup sampai wisuda + nilai keluar. Storage 20GB.</p>
                    </div>
                </div>
                <div class="mt-6 bg-stone-100 rounded-xl p-4 border border-stone-200">
                    <p class="text-xs font-black text-stone-600 mb-1">💡 Contoh estimasi total biaya:</p>
                    <p class="text-xs text-stone-500 leading-relaxed">Paket PRO (Rp 750k) + .com (Rp 230k) + Hosting 6 Bln (Rp 120k) = <strong class="text-stone-800">Rp 1.100.000</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== BUNDLING ====== -->
<section id="bundling" class="py-20 bg-white border-b border-stone-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center max-w-xl mx-auto mb-14">
            <p class="text-xs font-bold uppercase tracking-widest text-green-700 mb-2">Paket Bundling</p>
            <h2 class="text-3xl font-black text-stone-900">Hemat lebih banyak dengan bundling.</h2>
            <p class="text-stone-400 text-sm mt-2">Paket all-in-one sudah termasuk jasa development + domain + hosting.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Bundle Starter -->
            <div class="border border-stone-200 rounded-2xl p-5 flex flex-col justify-between hover:shadow-md transition-all bg-[#faf7f2]">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-stone-400 mb-3">Bundle Starter</p>
                    <h3 class="font-black text-stone-900 text-base mb-2">Basic + Subdomain</h3>
                    <p class="text-xs text-stone-500 mb-4 leading-relaxed">Cepat tayang tanpa biaya domain. Cocok untuk kelompok yang butuh web minimal.</p>
                    <div class="space-y-1 text-[11px] text-stone-500 mb-4">
                        <p>✓ Paket Basic (Rp 200k)</p>
                        <p>✓ Subdomain GRATIS (6 bln)</p>
                        <p>✓ Hosting 3 Bulan (Rp 60k)</p>
                    </div>
                    <div class="flex items-baseline gap-2 mb-1">
                        <span class="text-2xl font-black text-stone-900">Rp 260k</span>
                    </div>
                    <p class="text-[10px] text-stone-400">all-in-one, langsung tayang</p>
                </div>
                <a href="{{ url('/order?package=basic') }}" class="block text-center py-2.5 mt-5 border border-stone-300 text-stone-600 font-bold rounded-xl hover:bg-stone-100 transition-all text-xs">
                    Pesan Bundle Ini
                </a>
            </div>

            <!-- Bundle Popular -->
            <div class="border border-blue-300 bg-blue-50 rounded-2xl p-5 flex flex-col justify-between hover:shadow-md transition-all">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-blue-600 mb-3">Bundle Popular</p>
                    <h3 class="font-black text-stone-900 text-base mb-2">Standard + .online</h3>
                    <p class="text-xs text-stone-500 mb-4 leading-relaxed">Multi-page + admin panel. Domain keren, harga pas di kantong.</p>
                    <div class="space-y-1 text-[11px] text-stone-500 mb-4">
                        <p>✓ Paket Standard (Rp 400k)</p>
                        <p>✓ Domain .online (Rp 60k)</p>
                        <p>✓ Hosting 6 Bulan (Rp 120k)</p>
                    </div>
                    <div class="flex items-baseline gap-2 mb-1">
                        <span class="text-2xl font-black text-stone-900">Rp 580k</span>
                    </div>
                    <p class="text-[10px] text-stone-400">all-in-one, langsung tayang</p>
                </div>
                <a href="{{ url('/order?package=standard') }}" class="block text-center py-2.5 mt-5 border border-blue-400 text-blue-700 font-bold rounded-xl hover:bg-blue-100 transition-all text-xs">
                    Pesan Bundle Ini
                </a>
            </div>

            <!-- Bundle Pro (Highlighted) -->
            <div class="bg-green-700 text-white rounded-2xl p-5 flex flex-col justify-between shadow-xl shadow-green-700/20">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-green-300 mb-3">Bundle Terlaris ⭐</p>
                    <h3 class="font-black text-white text-base mb-2">Pro + .blog</h3>
                    <p class="text-xs text-green-200 mb-4 leading-relaxed">Blog kegiatan + domain kreatif. Paling cocok untuk kelompok yang aktif update.</p>
                    <div class="space-y-1 text-[11px] text-green-200 mb-4">
                        <p>✓ Paket Pro (Rp 750k)</p>
                        <p>✓ Domain .blog (Rp 85k)</p>
                        <p>✓ Hosting 6 Bulan (Rp 120k)</p>
                    </div>
                    <div class="flex items-baseline gap-2 mb-1">
                        <span class="text-2xl font-black text-white">Rp 955k</span>
                    </div>
                    <p class="text-[10px] text-green-300">all-in-one, langsung tayang</p>
                </div>
                <a href="{{ url('/order?package=pro') }}" class="block text-center py-2.5 mt-5 bg-amber-400 hover:bg-amber-300 text-amber-900 font-black rounded-xl transition-all text-xs">
                    Pesan Bundle Ini
                </a>
            </div>

            <!-- Bundle Premium -->
            <div class="bg-stone-900 text-white rounded-2xl p-5 flex flex-col justify-between shadow-xl">
                <div>
                    <p class="text-[10px] font-black uppercase tracking-widest text-amber-400 mb-3">Bundle Best Value</p>
                    <h3 class="font-black text-white text-base mb-2">Premium + .com</h3>
                    <p class="text-xs text-stone-300 mb-4 leading-relaxed">Fitur terlengkap + domain paling prestisius. Untuk kelompok yang serius.</p>
                    <div class="space-y-1 text-[11px] text-stone-300 mb-4">
                        <p>✓ Paket Premium (Rp 1.000k)</p>
                        <p>✓ Domain .com (Rp 230k)</p>
                        <p>✓ Hosting 6 Bulan (Rp 120k)</p>
                    </div>
                    <div class="flex items-baseline gap-2 mb-1">
                        <span class="text-2xl font-black text-white">Rp 1.350k</span>
                    </div>
                    <p class="text-[10px] text-stone-400">all-in-one, langsung tayang</p>
                </div>
                <a href="{{ url('/order?package=premium') }}" class="block text-center py-2.5 mt-5 bg-amber-500 hover:bg-amber-400 text-stone-900 font-black rounded-xl transition-all text-xs">
                    Pesan Bundle Ini
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ====== TEMPLATE DEMO ====== -->
<section id="template" class="py-20 bg-[#faf7f2] border-b border-stone-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="text-center max-w-xl mx-auto mb-14">
            <p class="text-xs font-bold uppercase tracking-widest text-green-700 mb-2">Contoh Template</p>
            <h2 class="text-3xl font-black text-stone-900">Sebelum pesan, lihat dulu hasilnya.</h2>
            <p class="text-stone-500 text-sm mt-3">Klik tombol demo untuk membuka simulasi langsung website KKN dengan data dummy.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <!-- Basic Demo -->
            <div class="border border-stone-200 rounded-2xl overflow-hidden hover:shadow-md transition-all bg-white">
                <div class="h-36 bg-stone-100 border-b border-stone-200 flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 bg-stone-200/80 p-1.5 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>
                        <span class="ml-1 text-[9px] text-stone-500">kkn-sukamaju.satcloud.tech</span>
                    </div>
                    <div class="mt-6 text-center">
                        <div class="w-7 h-7 rounded-full bg-stone-200 flex items-center justify-center text-stone-600 font-black text-xs mx-auto mb-1">B</div>
                        <p class="text-[10px] font-bold text-stone-700">KKN Desa Sukamaju</p>
                        <p class="text-[9px] text-stone-400">1 Page • Static</p>
                    </div>
                </div>
                <div class="p-4">
                    <span class="text-[9px] font-black uppercase tracking-widest text-stone-400">Template Basic</span>
                    <h3 class="font-black text-stone-800 text-sm mt-1 mb-2">Landing Page Statis</h3>
                    <p class="text-[11px] text-stone-500 leading-relaxed mb-4">Profil kelompok, desa, proker list, dan kontak dalam satu halaman bersih.</p>
                    <a href="{{ url('/demo/basic') }}" target="_blank" class="block w-full text-center py-2 border border-stone-300 hover:border-stone-500 text-stone-600 text-[11px] font-bold rounded-lg transition-all">
                        Buka Demo Basic
                    </a>
                </div>
            </div>

            <!-- Standard Demo -->
            <div class="border border-blue-200 rounded-2xl overflow-hidden hover:shadow-md transition-all bg-white">
                <div class="h-36 bg-blue-900 flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 bg-blue-800/80 p-1.5 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>
                        <span class="ml-1 text-[9px] text-blue-300">kkn-ngadiharjo.online</span>
                    </div>
                    <div class="mt-6 text-center">
                        <div class="w-7 h-7 rounded-full bg-blue-400 flex items-center justify-center text-blue-900 font-black text-xs mx-auto mb-1">S</div>
                        <p class="text-[10px] font-bold text-white">KKN Desa Ngadiharjo</p>
                        <p class="text-[9px] text-blue-300">Multi-Page + Admin</p>
                    </div>
                </div>
                <div class="p-4">
                    <span class="text-[9px] font-black uppercase tracking-widest text-blue-500">Template Standard</span>
                    <h3 class="font-black text-stone-800 text-sm mt-1 mb-2">Multi-Page + Galeri CMS</h3>
                    <p class="text-[11px] text-stone-500 leading-relaxed mb-4">Admin bisa upload foto galeri & update detail proker secara mandiri.</p>
                    <a href="{{ url('/demo/standard') }}" target="_blank" class="block w-full text-center py-2 bg-blue-700 hover:bg-blue-800 text-white text-[11px] font-bold rounded-lg transition-all">
                        Buka Demo Standard
                    </a>
                </div>
            </div>

            <!-- Pro Demo -->
            <div class="border-2 border-green-600 rounded-2xl overflow-hidden hover:shadow-md transition-all bg-white">
                <div class="h-36 bg-green-800 flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 bg-green-700/80 p-1.5 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>
                        <span class="ml-1 text-[9px] text-green-300">kkn-karanganyar.blog</span>
                    </div>
                    <div class="mt-6 text-center">
                        <div class="w-7 h-7 rounded-full bg-amber-400 flex items-center justify-center text-amber-900 font-black text-xs mx-auto mb-1">P</div>
                        <p class="text-[10px] font-bold text-white">KKN Desa Karanganyar</p>
                        <p class="text-[9px] text-green-300">Multi-Page + Blog ⭐</p>
                    </div>
                </div>
                <div class="p-4">
                    <span class="text-[9px] font-black uppercase tracking-widest text-green-600">Template Pro ⭐</span>
                    <h3 class="font-black text-stone-800 text-sm mt-1 mb-2">Multi-Page + Portal Berita</h3>
                    <p class="text-[11px] text-stone-500 leading-relaxed mb-4">Tulis & publikasi berita kegiatan, status proker berubah realtime.</p>
                    <a href="{{ url('/demo/pro') }}" target="_blank" class="block w-full text-center py-2 bg-green-700 hover:bg-green-800 text-white text-[11px] font-bold rounded-lg transition-all">
                        Buka Demo Pro
                    </a>
                </div>
            </div>

            <!-- Premium Demo -->
            <div class="border border-amber-300 rounded-2xl overflow-hidden hover:shadow-md transition-all bg-white">
                <div class="h-36 bg-stone-900 flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 bg-stone-800/80 p-1.5 flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-red-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400"></span>
                        <span class="ml-1 text-[9px] text-stone-400">desasariharjo.com</span>
                    </div>
                    <div class="mt-6 text-center">
                        <div class="w-7 h-7 rounded-full bg-amber-500 flex items-center justify-center text-amber-900 font-black text-xs mx-auto mb-1">★</div>
                        <p class="text-[10px] font-bold text-white">Portal Desa Sariharjo</p>
                        <p class="text-[9px] text-amber-400">Full Features • .com</p>
                    </div>
                </div>
                <div class="p-4">
                    <span class="text-[9px] font-black uppercase tracking-widest text-amber-600">Template Premium</span>
                    <h3 class="font-black text-stone-800 text-sm mt-1 mb-2">Full Features + Logbook</h3>
                    <p class="text-[11px] text-stone-500 leading-relaxed mb-4">Logbook digital, UMKM katalog, infografis statistik, export PDF.</p>
                    <a href="{{ url('/demo/premium') }}" target="_blank" class="block w-full text-center py-2 bg-amber-500 hover:bg-amber-600 text-white text-[11px] font-bold rounded-lg transition-all">
                        Buka Demo Premium
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== FAQ ====== -->
<section class="py-20 bg-white">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-12">
            <p class="text-xs font-bold uppercase tracking-widest text-green-700 mb-2">FAQ</p>
            <h2 class="text-3xl font-black text-stone-900">Pertanyaan yang sering ditanyakan</h2>
        </div>

        <div class="space-y-4">
            <div class="bg-[#faf7f2] border border-stone-200 rounded-xl p-6">
                <h4 class="font-black text-stone-800 mb-2">Harga di paket sudah termasuk domain dan hosting?</h4>
                <p class="text-sm text-stone-500 leading-relaxed">Belum. Harga yang tertera di masing-masing paket adalah <strong>biaya jasa development saja</strong>. Domain dan hosting adalah add-on yang kamu pilih sendiri sesuai kebutuhan dan durasi KKN-mu.</p>
            </div>
            <div class="bg-[#faf7f2] border border-stone-200 rounded-xl p-6">
                <h4 class="font-black text-stone-800 mb-2">Berapa lama proses pengerjaannya?</h4>
                <p class="text-sm text-stone-500 leading-relaxed">Rata-rata 3–10 hari kerja setelah semua bahan (foto, profil, data desa, konten proker) dikirimkan ke kami via WhatsApp.</p>
            </div>
            <div class="bg-[#faf7f2] border border-stone-200 rounded-xl p-6">
                <h4 class="font-black text-stone-800 mb-2">Saya tidak paham koding, bisa update konten sendiri?</h4>
                <p class="text-sm text-stone-500 leading-relaxed">Bisa! Paket Standard ke atas dilengkapi panel admin yang mudah digunakan — tidak perlu paham koding. Tinggal login, klik, dan simpan.</p>
            </div>
            <div class="bg-[#faf7f2] border border-stone-200 rounded-xl p-6">
                <h4 class="font-black text-stone-800 mb-2">Bagaimana cara pemesanan dan pembayaran?</h4>
                <p class="text-sm text-stone-500 leading-relaxed">Isi form pemesanan di halaman order, lalu sistem akan meneruskan detailnya ke WhatsApp developer. Pembayaran bisa via transfer bank, QRIS, atau e-wallet.</p>
            </div>
        </div>

        <!-- CTA Bottom -->
        <div class="mt-12 text-center bg-green-700 text-white rounded-2xl p-8">
            <p class="text-xs font-bold uppercase tracking-widest text-green-300 mb-2">Siap mulai?</p>
            <h3 class="text-2xl font-black mb-3">Isi form hanya ~5 menit.</h3>
            <p class="text-green-200 text-sm mb-6">Tim kami akan segera menghubungi untuk konfirmasi bahan konten dan pembayaran.</p>
            <a href="{{ url('/order') }}" class="inline-block px-8 py-3 bg-amber-400 hover:bg-amber-300 text-amber-900 font-black rounded-xl text-sm transition-all">
                Buat Website KKN Sekarang →
            </a>
        </div>
    </div>
</section>

@endsection
