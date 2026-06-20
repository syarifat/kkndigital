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

        <form action="{{ route('order.store') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Section 1: Pilih Paket -->
            <div class="bg-white border border-stone-200 rounded-2xl p-7">
                <h2 class="text-lg font-black text-stone-900 mb-1">Pilih Paket Development</h2>
                <p class="text-xs text-stone-400 mb-6">Harga adalah biaya jasa development saja. Domain & hosting dikoordinasikan terpisah bersama developer.</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Basic -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="basic" class="sr-only peer" {{ $selectedPackage == 'basic' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-stone-700 peer-checked:bg-stone-50 rounded-xl p-4 transition-all hover:border-stone-400">
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-black text-stone-800 text-sm">Paket BASIC</span>
                                <span class="text-[9px] font-black bg-stone-200 text-stone-500 px-2 py-0.5 rounded uppercase">Static</span>
                            </div>
                            <p class="text-[11px] text-stone-400 mb-3">1-Page Landing • Profil, Proker, Kontak</p>
                            <p class="font-black text-xl text-stone-900">Rp 200.000</p>
                        </div>
                    </label>

                    <!-- Standard -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="standard" class="sr-only peer" {{ $selectedPackage == 'standard' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-blue-500 peer-checked:bg-blue-50 rounded-xl p-4 transition-all hover:border-blue-300 relative">
                            <span class="absolute top-3 right-3 text-[9px] font-black bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Rek. Dasar</span>
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-black text-stone-800 text-sm">Paket STANDARD</span>
                            </div>
                            <p class="text-[11px] text-stone-400 mb-3">Multi-Page • CMS Galeri & Proker</p>
                            <p class="font-black text-xl text-stone-900">Rp 400.000</p>
                        </div>
                    </label>

                    <!-- Pro -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="pro" class="sr-only peer" {{ $selectedPackage == 'pro' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-green-600 peer-checked:bg-green-50 rounded-xl p-4 transition-all hover:border-green-400 relative">
                            <span class="absolute top-3 right-3 text-[9px] font-black bg-amber-400 text-amber-900 px-2 py-0.5 rounded-full">Terlaris ⭐</span>
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-black text-stone-800 text-sm">Paket PRO</span>
                            </div>
                            <p class="text-[11px] text-stone-400 mb-3">Multi-Page + Blog • Status Proker Realtime</p>
                            <p class="font-black text-xl text-stone-900">Rp 750.000</p>
                        </div>
                    </label>

                    <!-- Premium -->
                    <label class="block cursor-pointer">
                        <input type="radio" name="package_name" value="premium" class="sr-only peer" {{ $selectedPackage == 'premium' ? 'checked' : '' }}>
                        <div class="border-2 border-stone-200 peer-checked:border-amber-500 peer-checked:bg-amber-50 rounded-xl p-4 transition-all hover:border-amber-400 relative">
                            <span class="absolute top-3 right-3 text-[9px] font-black bg-amber-500 text-white px-2 py-0.5 rounded-full">Best Value</span>
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-black text-stone-800 text-sm">Paket PREMIUM</span>
                            </div>
                            <p class="text-[11px] text-stone-400 mb-3">Full Features • Logbook + Export PDF + UMKM</p>
                            <p class="font-black text-xl text-stone-900">Rp 1.000.000</p>
                        </div>
                    </label>
                </div>
                <div class="mt-4 bg-amber-50 border border-amber-200 rounded-xl p-4">
                    <p class="text-xs text-amber-700 font-semibold">💡 Domain & Hosting belum termasuk — akan dikoordinasikan oleh developer setelah pesanan masuk. Lihat <a href="{{ url('/') }}#addon" class="underline font-black">pilihan add-on domain & hosting</a> di halaman utama.</p>
                </div>
            </div>

            <!-- Section 2: Data PIC -->
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

            <!-- Section 3: Lokasi -->
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

            <!-- Section 4: Fitur Tambahan -->
            <div class="bg-white border border-stone-200 rounded-2xl p-7">
                <h2 class="text-lg font-black text-stone-900 mb-1">Konten & Fitur Prioritas</h2>
                <p class="text-xs text-stone-400 mb-6">Centang konten yang kamu butuhkan (digunakan sebagai referensi awal, bisa disesuaikan lebih lanjut via WA).</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @php
                    $features = [
                        ['value' => 'Profil Kelompok & DPL', 'desc' => 'Nama kelompok, DPL, dan identitas KKN.', 'checked' => true],
                        ['value' => 'Daftar Anggota Kelompok', 'desc' => 'Foto dan data lengkap anggota tim.', 'checked' => true],
                        ['value' => 'Profil Desa & Peta Lokasi', 'desc' => 'Deskripsi desa dan embed Google Maps.', 'checked' => true],
                        ['value' => 'Daftar Program Kerja', 'desc' => 'List proker lengkap beserta kategori dan progres.', 'checked' => true],
                        ['value' => 'Galeri Dokumentasi Kegiatan', 'desc' => 'Foto-foto kegiatan KKN yang bisa diupdate.', 'checked' => false],
                        ['value' => 'Blog / Portal Berita Kegiatan', 'desc' => 'Artikel dan liputan kegiatan harian (Paket Pro+).', 'checked' => false],
                        ['value' => 'Logbook Digital Harian', 'desc' => 'Jurnal kegiatan harian, export PDF (Paket Premium).', 'checked' => false],
                        ['value' => 'Katalog UMKM / Potensi Desa', 'desc' => 'Showcase produk UMKM warga desa (Paket Premium).', 'checked' => false],
                    ];
                    @endphp
                    @foreach($features as $feature)
                    <label class="flex items-start gap-3 border border-stone-200 rounded-xl p-4 cursor-pointer hover:bg-stone-50 transition-colors">
                        <input type="checkbox" name="additional_features[]" value="{{ $feature['value'] }}" {{ $feature['checked'] ? 'checked' : '' }} class="mt-0.5 text-green-600 border-stone-400 rounded focus:ring-green-500">
                        <div>
                            <span class="block text-sm font-bold text-stone-800">{{ $feature['value'] }}</span>
                            <span class="block text-xs text-stone-400 mt-0.5">{{ $feature['desc'] }}</span>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="w-full py-4 bg-green-700 hover:bg-green-800 text-white font-black rounded-xl text-base shadow-lg transition-all hover:shadow-xl">
                Buat Ringkasan Pesanan & Hubungi Developer →
            </button>
        </form>
    </div>
</div>
@endsection
