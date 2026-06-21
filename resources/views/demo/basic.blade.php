<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKN Desa Sukamaju — Website Resmi (Demo Basic)</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Lora:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style> body { font-family: 'Nunito', sans-serif; } .lora { font-family: 'Lora', Georgia, serif; } </style>
</head>
<body class="bg-[#f8f5f0] text-stone-800">

    <!-- Demo Bar -->
    <div class="bg-stone-700 text-stone-200 py-2 px-4 text-center text-[11px] font-semibold">
        👁 Pratinjau Template <strong>BASIC</strong> (1-Page Static) — <a href="{{ url('/') }}#template" class="text-amber-400 underline">Kembali ke KKN Digital</a> untuk memesan
    </div>

    <!-- Navbar (static, no CMS) -->
    <nav class="sticky top-0 z-40 bg-white border-b border-stone-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex justify-between items-center h-14">
            <span class="font-black text-green-800 tracking-tight">🌾 KKN Desa Sukamaju</span>
            <div class="hidden sm:flex items-center gap-5 text-xs font-bold text-stone-500">
                <a href="#profil" class="hover:text-green-700 transition-colors">Profil</a>
                <a href="#anggota" class="hover:text-green-700 transition-colors">Anggota</a>
                <a href="#proker" class="hover:text-green-700 transition-colors">Proker</a>
                <a href="#kontak" class="hover:text-green-700 transition-colors">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="bg-green-800 text-white py-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-widest text-green-300 mb-3">KKN UGM 2026 • Unit 12 • Sub-Unit B</p>
            <h1 class="lora text-3xl sm:text-5xl font-semibold leading-snug mb-4">Pengabdian Masyarakat<br><em>Desa Sukamaju</em></h1>
            <p class="text-green-200 text-sm leading-relaxed max-w-lg mx-auto">Kec. Ngaglik, Kab. Sleman, D.I. Yogyakarta.</p>
        </div>
    </section>

    <!-- Profil Desa -->
    <section id="profil" class="py-14 max-w-5xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Profil Desa</p>
                <h2 class="text-2xl font-black text-stone-900 mb-4">Sekilas Desa Sukamaju</h2>
                <p class="text-sm text-stone-600 leading-relaxed mb-3">Desa Sukamaju merupakan desa agraris dengan potensi pertanian padi dan sayuran yang cukup tinggi. Mayoritas penduduk bermata pencaharian sebagai petani dengan semangat gotong royong yang masih kental.</p>
                <div class="grid grid-cols-2 gap-3 mt-4 text-sm">
                    <div class="bg-green-50 rounded-xl p-3 border border-green-200"><strong class="block text-green-800">2.100 Jiwa</strong><span class="text-stone-400 text-xs">Jumlah Penduduk</span></div>
                    <div class="bg-green-50 rounded-xl p-3 border border-green-200"><strong class="block text-green-800">5 Dusun</strong><span class="text-stone-400 text-xs">Wilayah</span></div>
                </div>
            </div>
            <div class="bg-green-100 border-2 border-dashed border-green-300 rounded-2xl h-52 flex items-center justify-center">
                <div class="text-center text-green-600"><div class="text-4xl mb-2">🌄</div><p class="text-sm font-semibold">Foto Panorama Desa</p></div>
            </div>
        </div>
    </section>

    <!-- Profil Kelompok & DPL -->
    <section class="py-10 bg-white border-y border-stone-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Profil Kelompok</p>
            <h2 class="text-2xl font-black text-stone-900 mb-6">Identitas KKN</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 text-sm">
                <div class="bg-[#faf7f2] rounded-xl p-5 border border-stone-200">
                    <p class="text-xs text-stone-400 mb-1">Nama Kelompok</p>
                    <p class="font-black text-stone-800">KKN Unit 12 Sub-Unit B</p>
                </div>
                <div class="bg-[#faf7f2] rounded-xl p-5 border border-stone-200">
                    <p class="text-xs text-stone-400 mb-1">Dosen Pembimbing Lapangan</p>
                    <p class="font-black text-stone-800">Dr. Ir. Agus Prasetyo, M.T.</p>
                </div>
                <div class="bg-[#faf7f2] rounded-xl p-5 border border-stone-200">
                    <p class="text-xs text-stone-400 mb-1">Universitas</p>
                    <p class="font-black text-stone-800">Universitas Gadjah Mada</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Daftar Anggota -->
    <section id="anggota" class="py-14 max-w-5xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Tim Kami</p>
        <h2 class="text-2xl font-black text-stone-900 mb-8">Daftar Anggota Kelompok</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-5">
            @foreach([['Budi Santoso','Ketua','bg-green-100 border-green-400'],['Siti Rahmawati','Sekretaris','bg-amber-100 border-amber-400'],['Rahmat Hidayat','Bendahara','bg-blue-100 border-blue-400'],['Dewi Lestari','Anggota','bg-stone-100 border-stone-300'],['Fajar Nugroho','Anggota','bg-stone-100 border-stone-300'],['Anisa Putri','Anggota','bg-stone-100 border-stone-300'],['Rizky Pratama','Anggota','bg-stone-100 border-stone-300'],['Maya Sari','Anggota','bg-stone-100 border-stone-300']] as [$name, $role, $bg])
            <div class="text-center">
                <div class="w-16 h-16 rounded-full {{ $bg }} border-2 mx-auto mb-2 flex items-center justify-center font-black text-lg text-stone-600">{{ substr($name, 0, 1) }}</div>
                <p class="font-bold text-stone-800 text-xs">{{ $name }}</p>
                <p class="text-[10px] text-green-700 font-semibold">{{ $role }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Program Kerja (Statis — teks list) -->
    <section id="proker" class="py-14 bg-white border-y border-stone-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Aksi Nyata</p>
            <h2 class="text-2xl font-black text-stone-900 mb-8">Daftar Program Kerja</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach([['Pemetaan Digital Batas Desa','Membuat peta administratif desa berbasis GIS','Fisik','bg-green-100 text-green-700'],['Digitalisasi Arsip Posyandu','Pengelolaan data balita secara digital berbasis spreadsheet','Keilmuan','bg-blue-100 text-blue-700'],['Bimbingan Belajar SD/SMP','Bimbel sore hari di balai dusun oleh anggota KKN','Non-Fisik','bg-amber-100 text-amber-700'],['Pelatihan Media Sosial UMKM','Edukasi pembuatan konten dan promosi online untuk pelaku UMKM','Non-Fisik','bg-amber-100 text-amber-700']] as [$title, $desc, $type, $typeColor])
                <div class="bg-[#faf7f2] border border-stone-200 rounded-xl p-5">
                    <div class="flex items-start justify-between gap-3 mb-2">
                        <h3 class="font-black text-stone-800 text-sm">{{ $title }}</h3>
                        <span class="shrink-0 text-[9px] font-black px-2 py-0.5 rounded-full {{ $typeColor }}">{{ $type }}</span>
                    </div>
                    <p class="text-xs text-stone-500 leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Peta & Kontak -->
    <section id="kontak" class="py-14 max-w-5xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <div>
                <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Lokasi & Kontak</p>
                <h2 class="text-2xl font-black text-stone-900 mb-4">Sekretariat KKN</h2>
                <p class="text-sm text-stone-600 leading-relaxed mb-5">Balai Desa Sukamaju, Dusun Kaliurang RT 01/01, Kec. Ngaglik, Kab. Sleman, D.I. Yogyakarta.</p>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 text-sm text-stone-600"><span class="text-lg">📱</span><span>Instagram: <strong>@kknugm_sukamaju</strong></span></div>
                    <div class="flex items-center gap-3 text-sm text-stone-600"><span class="text-lg">✉️</span><span>Email: <strong>kknunit12@ugm.ac.id</strong></span></div>
                    <a href="https://wa.me/6287859017087" target="_blank" class="inline-flex items-center gap-2 mt-2 px-5 py-2.5 bg-green-700 hover:bg-green-800 text-white font-bold rounded-xl text-sm transition-all">WhatsApp KKN</a>
                </div>
            </div>
            <div class="bg-stone-100 border border-stone-200 rounded-2xl h-52 flex items-center justify-center">
                <div class="text-center text-stone-400"><div class="text-4xl mb-2">🗺️</div><p class="text-sm font-semibold">Embed Google Maps</p><p class="text-xs text-stone-300">(peta lokasi desa)</p></div>
            </div>
        </div>
    </section>

    <footer class="bg-stone-900 text-stone-400 text-xs py-5 text-center">
        &copy; 2026 KKN Sukamaju UGM. Dibuat oleh <a href="{{ url('/') }}" class="text-amber-400 hover:underline">KKN Digital</a>.
    </footer>
</body>
</html>
