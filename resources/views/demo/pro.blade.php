<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal KKN Desa Karanganyar — Blog Kegiatan (Demo Pro)</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Lora:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style> body { font-family: 'Nunito', sans-serif; } .lora { font-family: 'Lora', Georgia, serif; } </style>
</head>
<body class="bg-[#f8f5f0] text-stone-800 min-h-screen flex flex-col">

    <!-- Demo Bar -->
    <div class="bg-green-900 text-green-200 py-2 px-4 text-center text-[11px] font-semibold">
        👁 Pratinjau Template <strong>PRO</strong> (Multi-Page + Blog + Status Proker) — <a href="{{ url('/') }}#template" class="text-amber-400 underline">Kembali ke KKN Digital</a>
    </div>
    @if(request()->query('admin'))
    <div class="bg-green-700 text-white text-xs py-2 px-4 flex items-center justify-between">
        <span>🔐 Mode Admin — CMS Lanjutan Paket Pro</span>
        <a href="{{ url('/demo/pro') }}" class="underline font-bold">Keluar Admin</a>
    </div>
    @endif

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 bg-stone-900 text-white border-b border-stone-700 shadow-md">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex justify-between items-center h-14">
            <span class="font-black text-white tracking-tight">🌾 KKN Karanganyar</span>
            <div class="hidden md:flex items-center text-xs font-bold text-stone-300">
                @php $page = request()->query('page', 'home'); $isAdmin = request()->query('admin'); @endphp
                <a href="{{ url('/demo/pro') }}" class="px-4 py-4 hover:text-white {{ $page == 'home' && !$isAdmin ? 'border-b-2 border-amber-400 text-white' : '' }}">Beranda</a>
                <a href="{{ url('/demo/pro?page=berita') }}" class="px-4 py-4 hover:text-white {{ $page == 'berita' ? 'border-b-2 border-amber-400 text-white' : '' }}">Blog Kegiatan</a>
                <a href="{{ url('/demo/pro?page=proker') }}" class="px-4 py-4 hover:text-white {{ $page == 'proker' ? 'border-b-2 border-amber-400 text-white' : '' }}">Status Proker</a>
                <a href="{{ url('/demo/pro?page=galeri') }}" class="px-4 py-4 hover:text-white {{ $page == 'galeri' ? 'border-b-2 border-amber-400 text-white' : '' }}">Galeri</a>
                <a href="{{ url('/demo/pro?admin=1') }}" class="ml-3 px-3 py-1.5 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors font-bold text-[10px] uppercase tracking-wide">Panel Admin</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">

    @if($isAdmin)
    <!-- ADMIN DASHBOARD PRO (CMS Lanjutan) -->
    <section class="py-12 max-w-5xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-1">Dashboard Admin</p>
        <h1 class="text-2xl font-black text-stone-900 mb-6">Panel CMS Lanjutan — Paket Pro</h1>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
            <div class="bg-green-50 border border-green-200 rounded-xl p-4"><p class="text-xs text-green-600 font-semibold mb-1">Artikel Diterbitkan</p><p class="text-3xl font-black text-green-800">12</p></div>
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4"><p class="text-xs text-amber-600 font-semibold mb-1">Draft Artikel</p><p class="text-3xl font-black text-amber-800">3</p></div>
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4"><p class="text-xs text-blue-600 font-semibold mb-1">Total Proker</p><p class="text-3xl font-black text-blue-800">8</p></div>
            <div class="bg-stone-50 border border-stone-200 rounded-xl p-4"><p class="text-xs text-stone-500 font-semibold mb-1">Proker Selesai</p><p class="text-3xl font-black text-stone-800">5</p></div>
        </div>

        <!-- CMS Berita -->
        <div class="bg-white border border-stone-200 rounded-2xl p-6 mb-5">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-black text-stone-800">Kelola Artikel / Blog Kegiatan</h3>
                <button onclick="alert('Demo: Editor artikel (WYSIWYG) akan terbuka untuk menulis liputan kegiatan baru!')" class="px-4 py-2 bg-green-700 text-white text-xs font-bold rounded-lg hover:bg-green-800">+ Tulis Artikel</button>
            </div>
            <table class="w-full text-xs text-stone-700">
                <thead class="bg-stone-50 text-[10px] uppercase tracking-widest text-stone-400 border-b border-stone-200">
                    <tr><th class="py-2 px-3 text-left">Judul Artikel</th><th class="py-2 px-3 text-left">Kategori</th><th class="py-2 px-3 text-left">Status</th><th class="py-2 px-3 text-left">Aksi</th></tr>
                </thead>
                <tbody class="divide-y divide-stone-100">
                    @foreach([['Kerja Bakti Lingkungan','Fisik','Terbit'],['Sosialisasi Pemasaran Digital','Non-Fisik','Terbit'],['Pojok Baca Dusun Timur','Keilmuan','Draft']] as [$title, $cat, $status])
                    <tr>
                        <td class="py-2 px-3 font-semibold">{{ $title }}</td>
                        <td class="py-2 px-3 text-stone-400">{{ $cat }}</td>
                        <td class="py-2 px-3"><span class="px-2 py-0.5 rounded-full text-[9px] font-black {{ $status == 'Terbit' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">{{ $status }}</span></td>
                        <td class="py-2 px-3"><button onclick="alert('Demo: Edit artikel ini!')" class="text-blue-600 font-bold hover:underline mr-2">Edit</button><button onclick="alert('Demo: Hapus artikel!')" class="text-red-500 font-bold hover:underline">Hapus</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Status Proker (Fitur Pro) -->
        <div class="bg-white border border-stone-200 rounded-2xl p-6">
            <h3 class="font-black text-stone-800 mb-4">Update Status Program Kerja (Drag & Drop / Pilih Status)</h3>
            <div class="space-y-3">
                @foreach([['Pemetaan GIS Desa','selesai'],['Pelatihan Foto Produk UMKM','selesai'],['Digitalisasi Posyandu','berjalan'],['Bimbel Sore Anak','berjalan'],['Pojok Baca Dusun','belum']] as [$proker, $status])
                <div class="flex items-center justify-between border border-stone-200 rounded-xl p-3">
                    <span class="text-sm font-semibold text-stone-700">{{ $proker }}</span>
                    <select onchange="alert('Demo: Status proker {{ $proker }} berubah ke: ' + this.value + '!')" class="text-xs border border-stone-300 rounded-lg px-2 py-1 text-stone-700 bg-white focus:outline-none focus:border-green-500">
                        <option value="belum" {{ $status == 'belum' ? 'selected' : '' }}>Belum Terlaksana</option>
                        <option value="berjalan" {{ $status == 'berjalan' ? 'selected' : '' }}>Sedang Berjalan</option>
                        <option value="selesai" {{ $status == 'selesai' ? 'selected' : '' }}>Selesai ✓</option>
                    </select>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @elseif($page == 'home')
    <section class="bg-green-800 text-white py-14 px-4">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-green-300 mb-3">KKN UNDIP 2026 • Unit 08</p>
                <h1 class="lora text-3xl sm:text-4xl font-semibold leading-snug mb-4">Blog Kegiatan & Pengabdian <em>Desa Karanganyar</em></h1>
                <p class="text-green-200 text-sm leading-relaxed mb-5">Kec. Bergas, Kab. Semarang. Rekam jejak pengabdian harian kami terpublikasi di sini.</p>
                <a href="{{ url('/demo/pro?page=berita') }}" class="inline-block px-5 py-2.5 bg-amber-400 hover:bg-amber-300 text-amber-900 font-bold rounded-lg text-sm transition-all">Baca Blog Kegiatan</a>
            </div>
            <div class="bg-green-700/40 border border-green-600 rounded-2xl h-48 flex items-center justify-center text-center text-green-300">
                <div><div class="text-4xl mb-2">🌾</div><p class="text-sm font-semibold">Foto Desa Karanganyar</p></div>
            </div>
        </div>
    </section>
    <section class="py-14 max-w-5xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-end mb-6"><h2 class="text-2xl font-black text-stone-900">Artikel Terbaru</h2><a href="{{ url('/demo/pro?page=berita') }}" class="text-xs font-bold text-green-700 hover:underline">Semua artikel →</a></div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            @foreach([['Kerja Bakti Lingkungan','Menanam pohon buah di tepi jalan desa bersama karang taruna.','20 Jun','Fisik'],['Sosialisasi Digital UMKM','Edukasi buka toko online untuk ibu-ibu PKK Karanganyar.','18 Jun','Non-Fisik'],['Peresmian Pojok Baca','Donasi buku dari mahasiswa untuk anak-anak desa.','15 Jun','Non-Fisik']] as [$title, $desc, $date, $cat])
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden hover:shadow-md transition-all">
                <div class="h-28 bg-stone-100 flex items-center justify-center text-stone-400 text-xs font-semibold border-b border-stone-200">📷 {{ $cat }}</div>
                <div class="p-4"><p class="text-[10px] text-stone-400 font-semibold mb-1">{{ $date }} Jun 2026</p><h3 class="font-black text-stone-800 text-sm mb-1">{{ $title }}</h3><p class="text-xs text-stone-500">{{ $desc }}</p></div>
            </div>
            @endforeach
        </div>
    </section>

    @elseif($page == 'berita')
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Blog Kegiatan</p>
        <h1 class="text-3xl font-black text-stone-900 mb-3">Liputan Harian KKN</h1>
        <!-- Kategori Filter -->
        <div class="flex gap-2 mb-8 flex-wrap">
            @foreach(['Semua','Fisik','Non-Fisik','Keilmuan'] as $cat)
            <button onclick="alert('Demo: Filter artikel berdasarkan kategori {{ $cat }}')" class="px-3 py-1.5 text-xs font-bold rounded-full border border-stone-300 text-stone-600 hover:bg-stone-100 transition-all">{{ $cat }}</button>
            @endforeach
        </div>
        <div class="space-y-5">
            @foreach([['Kerja Bakti & Penghijauan Lingkungan','Kelompok KKN bersama pemuda karang taruna menanam 50 bibit pohon buah di sepanjang jalan masuk desa. Kegiatan ini merupakan program kerja fisik dengan sasaran penghijauan dan memperindah lingkungan desa.','20 Jun','Fisik'],['Sosialisasi Pemasaran Digital UMKM','Edukasi pembuatan katalog digital dan pendaftaran di Google Maps untuk 12 UMKM kuliner di Desa Karanganyar. Peserta antusias mempelajari cara memotret produk menggunakan HP.','18 Jun','Non-Fisik']] as [$title, $content, $date, $cat])
            <div class="bg-white border border-stone-200 rounded-2xl p-6 flex gap-5">
                <div class="w-28 h-28 bg-stone-100 rounded-xl flex items-center justify-center shrink-0 text-stone-400 text-xs font-semibold">📷</div>
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <p class="text-[10px] text-stone-400 font-semibold">{{ $date }} Jun 2026</p>
                        <span class="text-[9px] font-black px-2 py-0.5 rounded-full {{ $cat == 'Fisik' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">{{ $cat }}</span>
                    </div>
                    <h3 class="font-black text-stone-800 mb-2">{{ $title }}</h3>
                    <p class="text-xs text-stone-500 leading-relaxed">{{ $content }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @elseif($page == 'proker')
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Program Kerja</p>
        <h1 class="text-3xl font-black text-stone-900 mb-8">Status Realtime Program Kerja</h1>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <div class="bg-green-50 border border-green-200 rounded-xl p-4 text-center"><p class="text-2xl font-black text-green-700">5</p><p class="text-xs text-stone-400">Selesai</p></div>
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 text-center"><p class="text-2xl font-black text-amber-600">2</p><p class="text-xs text-stone-400">Sedang Berjalan</p></div>
            <div class="bg-stone-50 border border-stone-200 rounded-xl p-4 text-center"><p class="text-2xl font-black text-stone-500">1</p><p class="text-xs text-stone-400">Belum Terlaksana</p></div>
        </div>
        <div class="space-y-4">
            @foreach([['Pemetaan GIS Desa','selesai','Fisik'],['Pelatihan Foto Produk UMKM','selesai','Non-Fisik'],['Digitalisasi Posyandu','berjalan','Keilmuan'],['Bimbel Sore','berjalan','Non-Fisik'],['Pojok Baca','belum','Fisik']] as [$title, $status, $cat])
            @php $colors = ['selesai' => 'bg-green-100 text-green-700 border-green-200', 'berjalan' => 'bg-amber-100 text-amber-700 border-amber-200', 'belum' => 'bg-stone-100 text-stone-500 border-stone-200']; $labels = ['selesai' => '✓ Selesai', 'berjalan' => '▶ Sedang Berjalan', 'belum' => '○ Belum Terlaksana']; @endphp
            <div class="bg-white border border-stone-200 rounded-xl p-4 flex items-center justify-between">
                <div><h3 class="font-black text-stone-800 text-sm">{{ $title }}</h3><p class="text-xs text-stone-400">Kategori: {{ $cat }}</p></div>
                <span class="text-[10px] font-black px-3 py-1.5 rounded-full border {{ $colors[$status] }}">{{ $labels[$status] }}</span>
            </div>
            @endforeach
        </div>
    </section>

    @elseif($page == 'galeri')
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-green-700 mb-2">Galeri</p>
        <h1 class="text-3xl font-black text-stone-900 mb-8">Foto & Dokumentasi</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
            @for($i=0; $i<6; $i++)<div class="aspect-video bg-stone-100 border border-stone-200 rounded-xl flex items-center justify-center text-stone-400 text-xs font-semibold">📷</div>@endfor
        </div>
    </section>
    @endif

    </main>

    <footer class="bg-stone-900 text-stone-400 text-xs py-5 text-center mt-auto">
        &copy; 2026 KKN Karanganyar UNDIP. Dibuat oleh <a href="{{ url('/') }}" class="text-amber-400 hover:underline">KKN Digital</a>.
    </footer>
</body>
</html>
