@extends('layouts.app')
@section('title', 'Form Pemesanan Website KKN | KKN Digital')
@section('content')
<div class="bg-[#faf7f2] min-h-screen py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <div class="mb-8 text-sm text-stone-400">
            <a href="{{ url('/') }}" class="hover:text-stone-700">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-stone-700 font-semibold">Form Pemesanan</span>
        </div>
        <div class="mb-10">
            <p class="text-xs font-bold uppercase tracking-widest text-green-700 mb-2">Langkah awal</p>
            <h1 class="text-3xl font-black text-stone-900 mb-2">Formulir Pemesanan Website</h1>
            <p class="text-stone-500 text-sm leading-relaxed">Isi data kelompok KKN kamu. Setelah submit, kamu akan dapat ringkasan pesanan dan bisa langsung kirim ke WhatsApp kami.</p>
        </div>

        @if ($errors->any())
        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-xl text-sm">
            <p class="font-bold mb-1">Ada yang perlu diperbaiki:</p>
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('order.store') }}" method="POST" id="orderForm" class="space-y-8">
            @csrf

            <!-- ===== SECTION 1: Pilih Paket Development ===== -->
            <div class="bg-white border border-stone-200 rounded-2xl p-7">
                <h2 class="text-lg font-black text-stone-900 mb-1">Pilih Paket Development</h2>
                <p class="text-xs text-stone-400 mb-6">Harga adalah biaya jasa pembuatan website saja.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4" id="packageCards">
                    <!-- Basic -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="basic" class="sr-only peer" {{ $selectedPackage == 'basic' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-stone-700 peer-checked:bg-stone-50 rounded-xl p-4 transition-all hover:border-stone-400">
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-black text-stone-800 text-sm">Paket BASIC</span>
                                <span class="text-[9px] font-black bg-stone-200 text-stone-500 px-2 py-0.5 rounded uppercase">1 Halaman</span>
                            </div>
                            <p class="text-[11px] text-stone-400 mb-3">Landing Page Statis • Profil, Proker, Kontak</p>
                            <p class="font-black text-xl text-stone-900">Rp 200.000</p>
                        </div>
                    </label>
                    <!-- Standard -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="standard" class="sr-only peer" {{ $selectedPackage == 'standard' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-blue-500 peer-checked:bg-blue-50 rounded-xl p-4 transition-all hover:border-blue-300 relative">
                            <span class="absolute top-3 right-3 text-[9px] font-black bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Rek. Dasar</span>
                            <div class="mb-2"><span class="font-black text-stone-800 text-sm">Paket STANDARD</span></div>
                            <p class="text-[11px] text-stone-400 mb-3">Multi-Page • Admin CMS Galeri & Proker</p>
                            <p class="font-black text-xl text-stone-900">Rp 400.000</p>
                        </div>
                    </label>
                    <!-- Pro -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="pro" class="sr-only peer" {{ $selectedPackage == 'pro' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-green-600 peer-checked:bg-green-50 rounded-xl p-4 transition-all hover:border-green-400 relative">
                            <span class="absolute top-3 right-3 text-[9px] font-black bg-amber-400 text-amber-900 px-2 py-0.5 rounded-full">Terlaris ⭐</span>
                            <div class="mb-2"><span class="font-black text-stone-800 text-sm">Paket PRO</span></div>
                            <p class="text-[11px] text-stone-400 mb-3">Multi-Page + Blog • Status Proker Realtime</p>
                            <p class="font-black text-xl text-stone-900">Rp 750.000</p>
                        </div>
                    </label>
                    <!-- Premium -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="premium" class="sr-only peer" {{ $selectedPackage == 'premium' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-amber-500 peer-checked:bg-amber-50 rounded-xl p-4 transition-all hover:border-amber-400 relative">
                            <span class="absolute top-3 right-3 text-[9px] font-black bg-amber-500 text-white px-2 py-0.5 rounded-full">Best Value</span>
                            <div class="mb-2"><span class="font-black text-stone-800 text-sm">Paket PREMIUM</span></div>
                            <p class="text-[11px] text-stone-400 mb-3">Full Features • Logbook + Export PDF + UMKM</p>
                            <p class="font-black text-xl text-stone-900">Rp 1.000.000</p>
                        </div>
                    </label>
                </div>
            </div>

            <!-- ===== SECTION 2: Add-on Domain ===== -->
            <div class="bg-white border border-stone-200 rounded-2xl p-7">
                <h2 class="text-lg font-black text-stone-900 mb-1">Pilih Paket Domain</h2>
                <p class="text-xs text-stone-400 mb-6">Nama domain adalah alamat website-mu di internet. Pilih ekstensi sesuai kebutuhan.</p>

                <div class="space-y-3">
                    <!-- Tanpa Domain -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-stone-200 rounded-xl p-4 hover:border-stone-300 transition-all has-[:checked]:border-stone-600 has-[:checked]:bg-stone-50">
                        <input type="radio" name="domain_package" value="none" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('domain_package', 'none') == 'none' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-700 text-sm">Tanpa Domain (koordinasi via WA)</span>
                            <span class="block text-xs text-stone-400 mt-0.5">Saya akan diskusikan pilihan domain langsung dengan developer.</span>
                        </div>
                        <span class="font-black text-stone-500 text-sm shrink-0">–</span>
                    </label>

                    <!-- Subdomain Gratis -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-stone-200 rounded-xl p-4 hover:border-green-300 transition-all has-[:checked]:border-green-600 has-[:checked]:bg-green-50">
                        <input type="radio" name="domain_package" value="subdomain" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('domain_package') == 'subdomain' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-800 text-sm">Subdomain Gratis <span class="text-[10px] font-black bg-green-100 text-green-700 px-2 py-0.5 rounded-full ml-1">GRATIS</span></span>
                            <code class="block text-xs text-stone-400 mt-0.5 font-mono">namakkn.satcloud.tech</code>
                            <span class="block text-[10px] text-stone-400 mt-0.5">Aktif 6 bulan. Paling hemat.</span>
                        </div>
                        <span class="font-black text-green-700 text-sm shrink-0">Rp 0</span>
                    </label>

                    <!-- Ekstensi Standar -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-stone-200 rounded-xl p-4 hover:border-stone-400 transition-all has-[:checked]:border-stone-700 has-[:checked]:bg-stone-50">
                        <input type="radio" name="domain_package" value="standar" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('domain_package') == 'standar' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-800 text-sm">Ekstensi Standar</span>
                            <span class="block text-xs text-stone-400 mt-0.5">.online, .site, .space — Aktif 1 tahun.</span>
                        </div>
                        <span class="font-black text-stone-700 text-sm shrink-0">Rp 60.000</span>
                    </label>

                    <!-- Ekstensi Kreatif -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-stone-200 rounded-xl p-4 hover:border-stone-400 transition-all has-[:checked]:border-stone-700 has-[:checked]:bg-stone-50">
                        <input type="radio" name="domain_package" value="kreatif" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('domain_package') == 'kreatif' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-800 text-sm">Ekstensi Kreatif</span>
                            <span class="block text-xs text-stone-400 mt-0.5">.blog, .click, .cloud — Aktif 1 tahun. Cocok untuk logbook/berita harian.</span>
                        </div>
                        <span class="font-black text-stone-700 text-sm shrink-0">Rp 85.000</span>
                    </label>

                    <!-- Ekstensi Instansi -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-stone-200 rounded-xl p-4 hover:border-stone-400 transition-all has-[:checked]:border-stone-700 has-[:checked]:bg-stone-50">
                        <input type="radio" name="domain_package" value="instansi" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('domain_package') == 'instansi' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-800 text-sm">Ekstensi Instansi (.org)</span>
                            <span class="block text-xs text-stone-400 mt-0.5">Aktif 1 tahun. Kesan formal & resmi untuk organisasi.</span>
                        </div>
                        <span class="font-black text-stone-700 text-sm shrink-0">Rp 220.000</span>
                    </label>

                    <!-- Ekstensi Premium .com -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-amber-200 bg-amber-50 rounded-xl p-4 hover:border-amber-400 transition-all has-[:checked]:border-amber-500 has-[:checked]:bg-amber-100">
                        <input type="radio" name="domain_package" value="premium_com" class="text-amber-500 border-stone-400 focus:ring-amber-400" {{ old('domain_package') == 'premium_com' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-800 text-sm">Domain Premium (.com) ⭐</span>
                            <span class="block text-xs text-stone-400 mt-0.5">Aktif 1 tahun. Paling populer, profesional, dan tepercaya.</span>
                        </div>
                        <span class="font-black text-amber-700 text-sm shrink-0">Rp 230.000</span>
                    </label>
                </div>
            </div>

            <!-- ===== SECTION 3: Add-on Hosting ===== -->
            <div class="bg-white border border-stone-200 rounded-2xl p-7">
                <h2 class="text-lg font-black text-stone-900 mb-1">Pilih Durasi Hosting</h2>
                <p class="text-xs text-stone-400 mb-6">Server untuk menyimpan file website. Storage besar 20GB — cukup untuk ribuan foto kegiatan.</p>

                <div class="space-y-3">
                    <!-- Tanpa Hosting -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-stone-200 rounded-xl p-4 hover:border-stone-300 transition-all has-[:checked]:border-stone-600 has-[:checked]:bg-stone-50">
                        <input type="radio" name="hosting_package" value="none" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('hosting_package', 'none') == 'none' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-700 text-sm">Tanpa Hosting (koordinasi via WA)</span>
                            <span class="block text-xs text-stone-400 mt-0.5">Saya akan diskusikan kebutuhan hosting langsung dengan developer.</span>
                        </div>
                        <span class="font-black text-stone-500 text-sm shrink-0">–</span>
                    </label>

                    <!-- Hosting 3 Bulan -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-stone-200 rounded-xl p-4 hover:border-stone-400 transition-all has-[:checked]:border-stone-700 has-[:checked]:bg-stone-50">
                        <input type="radio" name="hosting_package" value="3bulan" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('hosting_package') == '3bulan' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-800 text-sm">Hosting 3 Bulan</span>
                            <span class="block text-xs text-stone-400 mt-0.5">Storage 20GB. Pas untuk masa KKN + pelaporan singkat.</span>
                        </div>
                        <span class="font-black text-stone-700 text-sm shrink-0">Rp 60.000</span>
                    </label>

                    <!-- Hosting 6 Bulan -->
                    <label class="flex items-center gap-4 cursor-pointer border-2 border-green-200 bg-green-50 rounded-xl p-4 hover:border-green-400 transition-all has-[:checked]:border-green-600 has-[:checked]:bg-green-100">
                        <input type="radio" name="hosting_package" value="6bulan" class="text-green-600 border-stone-400 focus:ring-green-500" {{ old('hosting_package') == '6bulan' ? 'checked' : '' }}>
                        <div class="flex-grow">
                            <span class="block font-bold text-stone-800 text-sm">Hosting 6 Bulan <span class="text-[10px] font-black bg-green-600 text-white px-2 py-0.5 rounded-full ml-1">Rekomendasi</span></span>
                            <span class="block text-xs text-stone-400 mt-0.5">Storage 20GB. Aman sampai nilai keluar & laporan selesai.</span>
                        </div>
                        <span class="font-black text-green-700 text-sm shrink-0">Rp 120.000</span>
                    </label>
                </div>
            </div>

            <!-- ===== SECTION 4: Estimasi Total ===== -->
            <div class="bg-stone-900 text-white rounded-2xl p-6">
                <h3 class="font-black text-sm text-stone-400 uppercase tracking-widest mb-4">Estimasi Total Harga</h3>
                <div class="space-y-2 text-sm mb-4" id="priceBreakdown">
                    <div class="flex justify-between">
                        <span class="text-stone-300">Jasa Development</span>
                        <span class="font-bold text-white" id="devPriceDisplay">–</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-stone-300">Domain Add-on</span>
                        <span class="font-bold text-white" id="domainPriceDisplay">–</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-stone-300">Hosting Add-on</span>
                        <span class="font-bold text-white" id="hostingPriceDisplay">–</span>
                    </div>
                    <div class="border-t border-stone-700 pt-2 flex justify-between">
                        <span class="font-black text-white">TOTAL</span>
                        <span class="font-black text-amber-400 text-lg" id="totalPriceDisplay">Pilih paket dulu</span>
                    </div>
                </div>
                <p class="text-[11px] text-stone-500">*Estimasi awal. Detail final dikonfirmasi via WhatsApp bersama developer.</p>
            </div>

            <!-- ===== SECTION 5: Data PIC ===== -->
            <div class="bg-white border border-stone-200 rounded-2xl p-7">
                <h2 class="text-lg font-black text-stone-900 mb-1">Data Penanggung Jawab (PIC)</h2>
                <p class="text-xs text-stone-400 mb-6">Data PIC digunakan untuk komunikasi dan dokumen SPK pesanan.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="pic_name" class="block text-xs font-bold text-stone-600 mb-2">Nama Lengkap PIC</label>
                        <input type="text" name="pic_name" id="pic_name" value="{{ old('pic_name') }}" placeholder="cth: Budi Santoso" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                    <div>
                        <label for="pic_university" class="block text-xs font-bold text-stone-600 mb-2">Asal Universitas</label>
                        <input type="text" name="pic_university" id="pic_university" value="{{ old('pic_university') }}" placeholder="cth: Universitas Gadjah Mada" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                    <div>
                        <label for="pic_group_name" class="block text-xs font-bold text-stone-600 mb-2">Nama / Kode Kelompok KKN</label>
                        <input type="text" name="pic_group_name" id="pic_group_name" value="{{ old('pic_group_name') }}" placeholder="cth: KKN Unit 12 Sub-unit A" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                    <div>
                        <label for="pic_whatsapp" class="block text-xs font-bold text-stone-600 mb-2">Nomor WhatsApp PIC</label>
                        <input type="tel" name="pic_whatsapp" id="pic_whatsapp" value="{{ old('pic_whatsapp') }}" placeholder="cth: 087842949212" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="pic_email" class="block text-xs font-bold text-stone-600 mb-2">Alamat Email Aktif</label>
                        <input type="email" name="pic_email" id="pic_email" value="{{ old('pic_email') }}" placeholder="cth: budisantoso@gmail.com" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                </div>
            </div>

            <!-- ===== SECTION 6: Lokasi KKN ===== -->
            <div class="bg-white border border-stone-200 rounded-2xl p-7">
                <h2 class="text-lg font-black text-stone-900 mb-1">Lokasi Pengabdian</h2>
                <p class="text-xs text-stone-400 mb-6">Nama desa, kecamatan, dan kabupaten lokasi KKN kamu.</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                    <div>
                        <label for="kkn_location_village" class="block text-xs font-bold text-stone-600 mb-2">Nama Desa / Kelurahan</label>
                        <input type="text" name="kkn_location_village" id="kkn_location_village" value="{{ old('kkn_location_village') }}" placeholder="cth: Sukamaju" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                    <div>
                        <label for="kkn_location_district" class="block text-xs font-bold text-stone-600 mb-2">Kecamatan</label>
                        <input type="text" name="kkn_location_district" id="kkn_location_district" value="{{ old('kkn_location_district') }}" placeholder="cth: Ngaglik" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                    <div>
                        <label for="kkn_location_regency" class="block text-xs font-bold text-stone-600 mb-2">Kabupaten / Kota</label>
                        <input type="text" name="kkn_location_regency" id="kkn_location_regency" value="{{ old('kkn_location_regency') }}" placeholder="cth: Sleman" required class="w-full border border-stone-300 rounded-lg px-4 py-3 text-sm text-stone-800 bg-white focus:outline-none focus:border-green-500 placeholder:text-stone-300 transition-colors">
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="w-full py-4 bg-green-700 hover:bg-green-800 text-white font-black rounded-xl text-base shadow-lg transition-all hover:shadow-xl">
                Buat Ringkasan Pesanan & Hubungi Developer →
            </button>
        </form>
    </div>
</div>

<script>
// Kalkulasi harga realtime
const devPrices = { basic: 200000, standard: 400000, pro: 750000, premium: 1000000 };
const domainPrices = { none: 0, subdomain: 0, standar: 60000, kreatif: 85000, instansi: 220000, premium_com: 230000 };
const hostingPrices = { none: 0, '3bulan': 60000, '6bulan': 120000 };

function formatRp(n) {
    if (n === 0) return 'Rp 0';
    return 'Rp ' + n.toLocaleString('id-ID');
}

function updateTotal() {
    const pkg = document.querySelector('input[name="package_name"]:checked');
    const dom = document.querySelector('input[name="domain_package"]:checked');
    const hst = document.querySelector('input[name="hosting_package"]:checked');

    const dev = pkg ? devPrices[pkg.value] : 0;
    const dom_val = dom ? domainPrices[dom.value] : 0;
    const hst_val = hst ? hostingPrices[hst.value] : 0;

    document.getElementById('devPriceDisplay').textContent = pkg ? formatRp(dev) : '–';
    document.getElementById('domainPriceDisplay').textContent = dom ? (dom_val === 0 && dom.value !== 'none' ? 'Gratis' : (dom.value === 'none' ? '–' : formatRp(dom_val))) : '–';
    document.getElementById('hostingPriceDisplay').textContent = hst ? (hst.value === 'none' ? '–' : formatRp(hst_val)) : '–';

    if (pkg) {
        document.getElementById('totalPriceDisplay').textContent = formatRp(dev + dom_val + hst_val);
    } else {
        document.getElementById('totalPriceDisplay').textContent = 'Pilih paket dulu';
    }
}

document.querySelectorAll('input[name="package_name"], input[name="domain_package"], input[name="hosting_package"]')
    .forEach(el => el.addEventListener('change', updateTotal));

// Inisialisasi awal
updateTotal();
</script>
@endsection
