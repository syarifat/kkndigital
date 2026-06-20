<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKN Desa Ngadiharjo — Portal Resmi (Demo Standard)</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Lora:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style> body { font-family: 'Nunito', sans-serif; } .lora { font-family: 'Lora', Georgia, serif; } </style>
</head>
<body class="bg-[#f8f5f0] text-stone-800 min-h-screen flex flex-col">

    <!-- Demo Bar -->
    <div class="bg-blue-900 text-blue-200 py-2 px-4 text-center text-[11px] font-semibold">
        👁 Pratinjau Template <strong>STANDARD</strong> (Multi-Page + CMS Admin) — <a href="{{ url('/') }}#template" class="text-amber-400 underline">Kembali ke KKN Digital</a>
    </div>

    <!-- Sidebar Admin Indicator -->
    @if(request()->query('admin'))
    <div class="bg-blue-700 text-white text-xs py-2 px-4 flex items-center justify-between">
        <span>🔐 Anda sedang melihat halaman <strong>Dashboard Admin</strong> (Paket Standard)</span>
        <a href="{{ url('/demo/standard') }}" class="underline font-bold">Keluar Admin</a>
    </div>
    @endif

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 bg-white border-b border-stone-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex justify-between items-center h-14">
            <span class="font-black text-blue-800 tracking-tight">📌 KKN Ngadiharjo</span>
            <div class="hidden md:flex items-center gap-0 text-xs font-bold text-stone-500">
                <a href="{{ url('/demo/standard') }}" class="px-4 py-4 hover:text-blue-700 {{ !request()->query('page') ? 'border-b-2 border-blue-600 text-blue-700' : '' }} transition-colors">Beranda</a>
                <a href="{{ url('/demo/standard?page=profil') }}" class="px-4 py-4 hover:text-blue-700 {{ request()->query('page') == 'profil' ? 'border-b-2 border-blue-600 text-blue-700' : '' }} transition-colors">Profil</a>
                <a href="{{ url('/demo/standard?page=proker') }}" class="px-4 py-4 hover:text-blue-700 {{ request()->query('page') == 'proker' ? 'border-b-2 border-blue-600 text-blue-700' : '' }} transition-colors">Program Kerja</a>
                <a href="{{ url('/demo/standard?page=galeri') }}" class="px-4 py-4 hover:text-blue-700 {{ request()->query('page') == 'galeri' ? 'border-b-2 border-blue-600 text-blue-700' : '' }} transition-colors">Galeri</a>
                <a href="{{ url('/demo/standard?admin=1') }}" class="ml-3 px-3 py-1.5 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-colors font-bold text-[10px] uppercase tracking-wide">Panel Admin</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
    @php $page = request()->query('page', 'home'); $isAdmin = request()->query('admin'); @endphp

    @if($isAdmin)
    <!-- ADMIN DASHBOARD (Standard CMS) -->
    <section class="py-12 max-w-5xl mx-auto px-4 sm:px-6">
        <div class="mb-8">
            <p class="text-[10px] font-black uppercase tracking-widest text-blue-600 mb-1">Dashboard Admin</p>
            <h1 class="text-2xl font-black text-stone-900">Panel Kelola Website KKN</h1>
            <p class="text-xs text-stone-400 mt-1">Paket Standard memungkinkan kamu upload galeri dan update detail program kerja secara mandiri.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-5">
                <p class="text-xs text-blue-600 font-semibold mb-1">Total Foto Galeri</p>
                <p class="text-3xl font-black text-blue-800">24</p>
            </div>
            <div class="bg-green-50 border border-green-200 rounded-xl p-5">
                <p class="text-xs text-green-600 font-semibold mb-1">Program Kerja</p>
                <p class="text-3xl font-black text-green-800">6</p>
            </div>
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-5">
                <p class="text-xs text-amber-600 font-semibold mb-1">Proker Selesai</p>
                <p class="text-3xl font-black text-amber-800">3</p>
            </div>
        </div>
        <!-- CMS Galeri -->
        <div class="bg-white border border-stone-200 rounded-2xl p-6 mb-5">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-black text-stone-800">Kelola Galeri Dokumentasi</h3>
                <button onclick="alert('Demo: Form upload foto akan muncul di sini pada website asli!')" class="px-4 py-2 bg-blue-700 text-white text-xs font-bold rounded-lg hover:bg-blue-800 transition-all">+ Upload Foto</button>
            </div>
            <div class="grid grid-cols-4 gap-3">
                @for($i=0; $i<4; $i++)
                <div class="aspect-square bg-stone-100 rounded-lg flex items-center justify-center relative group">
                    <span class="text-stone-400 text-xs">📷</span>
                    <button onclick="alert('Demo: Foto akan dihapus!')" class="absolute inset-0 bg-red-500/80 text-white text-[10px] font-bold rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">Hapus</button>
                </div>
                @endfor
            </div>
        </div>
        <!-- CMS Proker -->
        <div class="bg-white border border-stone-200 rounded-2xl p-6">
            <h3 class="font-black text-stone-800 mb-4">Update Detail Program Kerja</h3>
            <div class="space-y-3">
                @foreach(['Pemetaan GIS Desa','Digitalisasi Posyandu','Bimbel Bahasa Inggris'] as $proker)
                <div class="flex items-center justify-between border border-stone-200 rounded-xl p-3">
                    <span class="text-sm font-semibold text-stone-700">{{ $proker }}</span>
                    <button onclick="alert('Demo: Form edit detail proker akan terbuka!')" class="text-xs font-bold text-blue-600 hover:text-blue-800 transition-colors">Edit Detail</button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @elseif($page == 'home')
    <!-- BERANDA -->
    <section class="bg-slate-800 text-white py-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">KKN UNDIP 2026 • Unit 08</p>
            <h1 class="lora text-3xl sm:text-4xl font-semibold leading-snug mb-4"><em>Desa Ngadiharjo</em> Bangkit & Berdaya</h1>
            <p class="text-slate-300 text-sm leading-relaxed max-w-md mx-auto mb-6">Kec. Bergas, Kab. Semarang. Mendampingi UMKM kuliner tradisional menuju pasar digital.</p>
            <a href="{{ url('/demo/standard?page=proker') }}" class="inline-block px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg text-sm transition-all">Lihat Program Kerja</a>
        </div>
    </section>
    <section class="py-14 max-w-5xl mx-auto px-4 sm:px-6">
        <h2 class="text-2xl font-black text-stone-900 mb-6">Update Terbaru</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            @foreach([['Kerja Bakti Lingkungan','Bersih-bersih saluran irigasi bersama warga','20 Jun'],['Pendampingan UMKM','Pelatihan foto produk untuk ibu-ibu PKK','18 Jun'],['Sosialisasi Posyandu','Digitalisasi kartu KIA di Posyandu Dahlia','15 Jun']] as [$title, $desc, $date])
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden hover:shadow-md transition-all">
                <div class="h-28 bg-stone-100 flex items-center justify-center text-stone-400 text-xs font-semibold border-b border-stone-200">📷 Foto Kegiatan</div>
                <div class="p-4">
                    <p class="text-[10px] text-stone-400 font-semibold mb-1">{{ $date }} Jun 2026</p>
                    <h3 class="font-black text-stone-800 text-sm mb-1">{{ $title }}</h3>
                    <p class="text-xs text-stone-500">{{ $desc }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @elseif($page == 'profil')
    <!-- PROFIL -->
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-blue-600 mb-2">Tentang Kami</p>
        <h1 class="text-3xl font-black text-stone-900 mb-6">Profil Kelompok & Desa</h1>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <div class="bg-white border border-stone-200 rounded-xl p-4"><p class="text-xs text-stone-400 mb-1">Kelompok</p><p class="font-black text-stone-800">KKN Unit 08</p></div>
            <div class="bg-white border border-stone-200 rounded-xl p-4"><p class="text-xs text-stone-400 mb-1">DPL</p><p class="font-black text-stone-800">Prof. Dr. Haryanto, M.Si.</p></div>
            <div class="bg-white border border-stone-200 rounded-xl p-4"><p class="text-xs text-stone-400 mb-1">Universitas</p><p class="font-black text-stone-800">Universitas Diponegoro</p></div>
        </div>
        <p class="text-sm text-stone-600 leading-relaxed">Desa Ngadiharjo terkenal dengan produksi tempe dan tahu tradisional berkualitas. KKN UNDIP hadir untuk mendampingi UMKM lokal memanfaatkan marketplace digital dan memperkuat identitas produk melalui kemasan yang menarik.</p>
    </section>

    @elseif($page == 'proker')
    <!-- PROKER (dengan progres — fitur CMS Standard) -->
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-blue-600 mb-2">Program Kerja</p>
        <h1 class="text-3xl font-black text-stone-900 mb-8">Rencana & Progres Proker</h1>
        <div class="space-y-4">
            @foreach([['Pemetaan Digital Desa','Pembuatan peta GIS batas administratif desa',85,'Fisik'],['Pelatihan Fotografi Produk UMKM','Edukasi foto produk menggunakan HP untuk ibu-ibu PKK',100,'Non-Fisik'],['Digitalisasi Posyandu','Implementasi kartu digital balita di semua posyandu desa',60,'Keilmuan'],['Bimbel Sore Anak SD/SMP','Bimbingan belajar setiap sore di 3 dusun berbeda',70,'Non-Fisik']] as [$title, $desc, $pct, $type])
            <div class="bg-white border border-stone-200 rounded-xl p-5">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <h3 class="font-black text-stone-800 text-sm">{{ $title }}</h3>
                        <p class="text-xs text-stone-400 mt-0.5">{{ $desc }}</p>
                    </div>
                    <span class="shrink-0 text-[9px] font-black px-2 py-0.5 rounded-full {{ $type == 'Fisik' ? 'bg-green-100 text-green-700' : ($type == 'Keilmuan' ? 'bg-blue-100 text-blue-700' : 'bg-amber-100 text-amber-700') }}">{{ $type }}</span>
                </div>
                <div class="flex items-center gap-3 mt-3">
                    <div class="flex-grow h-1.5 bg-stone-100 rounded-full"><div class="h-full bg-blue-500 rounded-full" style="width:{{ $pct }}%"></div></div>
                    <span class="text-xs font-bold text-stone-600 shrink-0">{{ $pct }}%</span>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @elseif($page == 'galeri')
    <!-- GALERI (CMS Upload — fitur Standard) -->
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-blue-600 mb-2">Dokumentasi</p>
        <h1 class="text-3xl font-black text-stone-900 mb-8">Galeri Foto Kegiatan</h1>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @for($i=0; $i<8; $i++)
            <div class="aspect-square bg-stone-100 border border-stone-200 rounded-xl flex items-center justify-center text-stone-400 text-xs font-semibold">📷</div>
            @endfor
        </div>
        <p class="text-xs text-blue-600 font-semibold mt-5 text-center">✓ Admin kelompok bisa upload & hapus foto ini kapan saja via panel admin</p>
    </section>
    @endif
    </main>

    <footer class="bg-stone-900 text-stone-400 text-xs py-5 text-center mt-auto">
        &copy; 2026 KKN Ngadiharjo UNDIP. Dibuat oleh <a href="{{ url('/') }}" class="text-amber-400 hover:underline">KKN Digital</a>.
    </footer>
</body>
</html>
