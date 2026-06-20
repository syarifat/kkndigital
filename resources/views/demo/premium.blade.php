<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Desa Sariharjo — Full Features (Demo Premium)</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Lora:ital,wght@0,600;1,500&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style> body { font-family: 'Nunito', sans-serif; } .lora { font-family: 'Lora', Georgia, serif; } </style>
</head>
<body class="bg-white text-stone-800 min-h-screen flex flex-col">

    <!-- Demo Bar -->
    <div class="bg-amber-500 text-amber-900 py-2 px-4 text-center text-[11px] font-bold">
        👁 Pratinjau Template <strong>PREMIUM</strong> (Full Features: Logbook + UMKM + Infografis + Multi-Role) — <a href="{{ url('/') }}#template" class="underline">Kembali ke KKN Digital</a>
    </div>
    @if(request()->query('admin'))
    <div class="bg-stone-800 text-amber-300 text-xs py-2 px-4 flex items-center justify-between">
        <span>🔐 Mode Admin Premium — Logbook, UMKM, Infografis, Multi-Role Akses</span>
        <a href="{{ url('/demo/premium') }}" class="underline font-bold text-white">Keluar Admin</a>
    </div>
    @endif

    <!-- Navbar -->
    <nav class="sticky top-0 z-40 bg-white border-b border-stone-200 shadow-sm">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex justify-between items-center h-14">
            <div class="flex items-center gap-2">
                <div class="w-7 h-7 rounded-full bg-amber-500 flex items-center justify-center text-white font-black text-sm">★</div>
                <span class="font-black text-stone-900 tracking-tight text-sm">Portal Desa Sariharjo</span>
            </div>
            @php $page = request()->query('page', 'home'); $isAdmin = request()->query('admin'); @endphp
            <div class="hidden md:flex items-center gap-4 text-xs font-bold text-stone-500">
                <a href="{{ url('/demo/premium') }}" class="hover:text-stone-800 {{ !$page || ($page == 'home' && !$isAdmin) ? 'text-stone-900 underline underline-offset-4 decoration-amber-500' : '' }}">Beranda</a>
                <a href="{{ url('/demo/premium?page=umkm') }}" class="hover:text-stone-800 {{ $page == 'umkm' ? 'text-stone-900 underline underline-offset-4 decoration-amber-500' : '' }}">Katalog UMKM</a>
                <a href="{{ url('/demo/premium?page=statistik') }}" class="hover:text-stone-800 {{ $page == 'statistik' ? 'text-stone-900 underline underline-offset-4 decoration-amber-500' : '' }}">Statistik Desa</a>
                <a href="{{ url('/demo/premium?page=logbook') }}" class="hover:text-stone-800 {{ $page == 'logbook' ? 'text-stone-900 underline underline-offset-4 decoration-amber-500' : '' }}">Logbook</a>
                <a href="{{ url('/demo/premium?page=aduan') }}" class="hover:text-stone-800 {{ $page == 'aduan' ? 'text-stone-900 underline underline-offset-4 decoration-amber-500' : '' }}">Kotak Saran</a>
                <a href="{{ url('/demo/premium?admin=1') }}" class="px-3 py-1.5 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition-colors font-bold text-[10px] uppercase tracking-wide">Panel Admin</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">

    @if($isAdmin)
    <!-- ADMIN PREMIUM DASHBOARD -->
    <section class="py-12 max-w-5xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-start mb-8">
            <div>
                <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-1">Admin Premium</p>
                <h1 class="text-2xl font-black text-stone-900">Panel Multi-Role Dashboard</h1>
            </div>
            <!-- Multi-Role Selector (Fitur Premium) -->
            <select onchange="alert('Demo: Beralih ke mode akses: ' + this.value)" class="text-xs border border-stone-300 rounded-lg px-3 py-2 text-stone-700 bg-white focus:outline-none focus:border-amber-500">
                <option>Ketua (Full Access)</option>
                <option>Anggota (Tulis Berita & Logbook)</option>
            </select>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4"><p class="text-xs text-amber-600 font-semibold mb-1">Artikel Terbit</p><p class="text-3xl font-black text-amber-800">18</p></div>
            <div class="bg-green-50 border border-green-200 rounded-xl p-4"><p class="text-xs text-green-600 font-semibold mb-1">UMKM Terdaftar</p><p class="text-3xl font-black text-green-800">8</p></div>
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4"><p class="text-xs text-blue-600 font-semibold mb-1">Entri Logbook</p><p class="text-3xl font-black text-blue-800">42</p></div>
            <div class="bg-stone-50 border border-stone-200 rounded-xl p-4"><p class="text-xs text-stone-500 font-semibold mb-1">Aduan Warga</p><p class="text-3xl font-black text-stone-800">6</p></div>
        </div>

        <!-- Logbook CMS -->
        <div class="bg-white border border-stone-200 rounded-2xl p-6 mb-5">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h3 class="font-black text-stone-800">Logbook Digital KKN</h3>
                    <p class="text-xs text-stone-400 mt-0.5">Pencatatan jurnal kegiatan harian oleh semua anggota</p>
                </div>
                <div class="flex gap-2">
                    <button onclick="alert('Demo: Form tambah entri logbook hari ini akan terbuka!')" class="px-4 py-2 bg-blue-700 text-white text-xs font-bold rounded-lg hover:bg-blue-800">+ Tambah Entri</button>
                    <button onclick="alert('Demo: Mengunduh seluruh 42 entri logbook sebagai file PDF yang siap cetak dan diserahkan ke DPL / kampus!')" class="px-4 py-2 bg-amber-500 text-white text-xs font-bold rounded-lg hover:bg-amber-600 flex items-center gap-1.5">
                        📄 Export PDF
                    </button>
                </div>
            </div>
            <div class="space-y-3">
                @foreach([['Budi Santoso','20 Jun 2026','Koordinasi pemasangan papan nama gang bersama RT 02'],['Siti Rahmawati','20 Jun 2026','Pendampingan ibu PKK dalam pembuatan akun Shopee'],['Rahmat Hidayat','19 Jun 2026','Survey lokasi rencana pembuatan taman baca dusun']] as [$name, $date, $activity])
                <div class="flex items-start gap-3 bg-stone-50 rounded-xl p-3 border border-stone-100">
                    <div class="w-7 h-7 rounded-full bg-amber-200 flex items-center justify-center text-amber-800 font-black text-xs shrink-0">{{ substr($name,0,1) }}</div>
                    <div>
                        <div class="flex items-center gap-2 mb-0.5">
                            <span class="text-xs font-black text-stone-800">{{ $name }}</span>
                            <span class="text-[10px] text-stone-400">{{ $date }}</span>
                        </div>
                        <p class="text-xs text-stone-600">{{ $activity }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- UMKM CMS -->
        <div class="bg-white border border-stone-200 rounded-2xl p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="font-black text-stone-800">Kelola Katalog UMKM</h3>
                <button onclick="alert('Demo: Form tambah UMKM baru dengan foto, deskripsi, harga, dan nomor WA penjual!')" class="px-4 py-2 bg-green-700 text-white text-xs font-bold rounded-lg hover:bg-green-800">+ Tambah UMKM</button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach([['Tempe Bu Wati','Rp 5.000/bungkus','0812xxxx'],['Keripik Singkong Pak Slamet','Rp 15.000/pack','0857xxxx'],['Batik Tulis Mbak Retno','Rp 150.000/lembar','0823xxxx']] as [$name, $price, $wa])
                <div class="border border-stone-200 rounded-xl p-4">
                    <div class="h-16 bg-stone-100 rounded-lg flex items-center justify-center text-stone-400 text-xs mb-3">📷 Produk</div>
                    <p class="font-black text-stone-800 text-xs mb-1">{{ $name }}</p>
                    <p class="text-xs text-green-700 font-semibold mb-2">{{ $price }}</p>
                    <button onclick="alert('Edit UMKM!')" class="text-[10px] font-bold text-blue-600 hover:underline mr-2">Edit</button>
                    <button onclick="alert('Hapus UMKM!')" class="text-[10px] font-bold text-red-500 hover:underline">Hapus</button>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @elseif($page == 'home')
    <section class="bg-stone-900 text-white py-14 px-4">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <span class="inline-block text-[10px] font-black uppercase tracking-widest bg-amber-500/20 border border-amber-500/30 text-amber-300 px-3 py-1.5 rounded-full mb-4">KKN Universitas Indonesia • Unit 04 • 2026</span>
                <h1 class="lora text-3xl sm:text-4xl font-semibold leading-snug mb-4">Portal Pengabdian & Potensi <em>Desa Sariharjo</em></h1>
                <p class="text-stone-300 text-sm leading-relaxed mb-6">Platform terpadu: dokumentasi KKN, katalog UMKM warga, logbook digital, dan saluran aspirasi warga.</p>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ url('/demo/premium?page=umkm') }}" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-400 text-white font-bold rounded-lg text-sm transition-all">Katalog UMKM Desa</a>
                    <a href="{{ url('/demo/premium?page=logbook') }}" class="px-5 py-2.5 border border-stone-600 text-stone-300 hover:border-stone-400 font-semibold rounded-lg text-sm transition-all">Logbook KKN</a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-amber-500/10 border border-amber-500/30 rounded-xl p-4 text-center"><p class="text-2xl font-black text-amber-400">8</p><p class="text-xs text-stone-400">UMKM Terdaftar</p></div>
                <div class="bg-white/5 border border-white/10 rounded-xl p-4 text-center"><p class="text-2xl font-black text-white">42</p><p class="text-xs text-stone-400">Entri Logbook</p></div>
                <div class="bg-white/5 border border-white/10 rounded-xl p-4 text-center"><p class="text-2xl font-black text-white">18</p><p class="text-xs text-stone-400">Artikel Diterbitkan</p></div>
                <div class="bg-green-500/10 border border-green-500/30 rounded-xl p-4 text-center"><p class="text-2xl font-black text-green-400">6/8</p><p class="text-xs text-stone-400">Proker Selesai</p></div>
            </div>
        </div>
    </section>

    @elseif($page == 'umkm')
    <!-- KATALOG UMKM (Fitur Premium) -->
    <section class="py-14 max-w-5xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Potensi Lokal</p>
        <h1 class="text-3xl font-black text-stone-900 mb-3">Katalog UMKM Desa Sariharjo</h1>
        <p class="text-sm text-stone-400 mb-8">Produk-produk unggulan warga desa. Klik tombol WA untuk pesan langsung ke penjual.</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @foreach([['Tempe Bu Wati','Tempe tradisional tanpa pengawet, produksi rumahan setiap hari. Tekstur padat dan gurih.','Rp 5.000','0812xxxxxx','bg-amber-100 border-amber-300'],['Keripik Singkong Pak Slamet','Keripik singkong renyah aneka rasa (original, pedas, balado). Dikemas vakum, tahan 1 bulan.','Rp 15.000','0857xxxxxx','bg-green-100 border-green-300'],['Batik Tulis Mbak Retno','Batik tulis motif lokal khas Sariharjo. Dibuat manual oleh pengrajin desa, limited edition.','Rp 150.000','0823xxxxxx','bg-blue-100 border-blue-300']] as [$name, $desc, $price, $wa, $bg])
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden hover:shadow-md transition-all">
                <div class="h-40 {{ $bg }} border-b {{ explode(' ',$bg)[1] }} flex items-center justify-center text-4xl">🛍️</div>
                <div class="p-5">
                    <h3 class="font-black text-stone-800 mb-2">{{ $name }}</h3>
                    <p class="text-xs text-stone-500 leading-relaxed mb-3">{{ $desc }}</p>
                    <div class="flex items-center justify-between">
                        <span class="font-black text-green-700 text-lg">{{ $price }}</span>
                        <a href="https://wa.me/6287842949212" target="_blank" onclick="alert('Demo: Menghubungi penjual {{ $name }} via WhatsApp!')" class="flex items-center gap-1.5 px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-bold rounded-xl transition-all">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24z"/></svg>
                            Pesan via WA
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    @elseif($page == 'statistik')
    <!-- INFOGRAFIS STATISTIK (Fitur Premium) -->
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Data Desa</p>
        <h1 class="text-3xl font-black text-stone-900 mb-8">Infografis Statistik Desa Sariharjo</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Grafik Mata Pencaharian -->
            <div class="bg-white border border-stone-200 rounded-2xl p-6">
                <h3 class="font-black text-stone-800 mb-4 text-sm">Mata Pencaharian Warga</h3>
                <div class="space-y-3">
                    @foreach([['Petani',45,'bg-green-500'],['Pedagang/UMKM',25,'bg-amber-500'],['PNS/TNI/Polri',15,'bg-blue-500'],['Karyawan Swasta',10,'bg-purple-500'],['Lain-lain',5,'bg-stone-400']] as [$cat, $pct, $color])
                    <div>
                        <div class="flex justify-between text-xs font-semibold mb-1"><span class="text-stone-600">{{ $cat }}</span><span class="text-stone-800">{{ $pct }}%</span></div>
                        <div class="h-2 bg-stone-100 rounded-full"><div class="{{ $color }} h-full rounded-full transition-all" style="width:{{ $pct }}%"></div></div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Distribusi Usia -->
            <div class="bg-white border border-stone-200 rounded-2xl p-6">
                <h3 class="font-black text-stone-800 mb-4 text-sm">Distribusi Usia Penduduk</h3>
                <div class="space-y-3">
                    @foreach([['0–14 tahun (Anak)',22,'bg-blue-400'],['15–64 tahun (Produktif)',65,'bg-amber-400'],['65+ tahun (Lansia)',13,'bg-stone-400']] as [$cat, $pct, $color])
                    <div>
                        <div class="flex justify-between text-xs font-semibold mb-1"><span class="text-stone-600">{{ $cat }}</span><span class="text-stone-800">{{ $pct }}%</span></div>
                        <div class="h-2 bg-stone-100 rounded-full"><div class="{{ $color }} h-full rounded-full" style="width:{{ $pct }}%"></div></div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-4 grid grid-cols-3 gap-2 text-center">
                    <div class="bg-stone-50 rounded-lg p-2"><p class="text-lg font-black text-stone-800">3.240</p><p class="text-[10px] text-stone-400">Total Jiwa</p></div>
                    <div class="bg-stone-50 rounded-lg p-2"><p class="text-lg font-black text-stone-800">890</p><p class="text-[10px] text-stone-400">KK</p></div>
                    <div class="bg-stone-50 rounded-lg p-2"><p class="text-lg font-black text-stone-800">7</p><p class="text-[10px] text-stone-400">Dusun</p></div>
                </div>
            </div>
        </div>
        <p class="text-xs text-amber-600 font-semibold text-center mt-6">✓ Data dikelola langsung oleh admin KKN. Grafik interaktif chart.js pada website asli.</p>
    </section>

    @elseif($page == 'logbook')
    <!-- LOGBOOK PUBLIC VIEW -->
    <section class="py-14 max-w-4xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-start mb-8">
            <div>
                <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Dokumentasi Kegiatan</p>
                <h1 class="text-3xl font-black text-stone-900">Logbook Digital KKN</h1>
            </div>
            <button onclick="alert('Demo: Mengunduh seluruh 42 entri logbook sebagai PDF siap cetak untuk DPL / kampus!')" class="flex items-center gap-2 px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white font-black rounded-xl text-sm transition-all shadow-md">
                📄 Export PDF
            </button>
        </div>
        <div class="space-y-3">
            @foreach([['Budi Santoso','Ketua','Koordinasi pemasangan papan nama gang & sosialisasi rencana festival budaya ke RT 01–03','20 Jun 2026'],['Siti Rahmawati','Sekretaris','Pendampingan ibu PKK membuat akun Shopee dan katalog digital produk UMKM','20 Jun 2026'],['Rahmat Hidayat','Bendahara','Survey lokasi taman baca, koordinasi pengumpulan donasi buku dari warga','19 Jun 2026'],['Dewi Lestari','Anggota','Pengajaran bimbel Bahasa Inggris untuk 15 anak SD di Balai Dusun Kaliurang','19 Jun 2026']] as [$name, $role, $activity, $date])
            <div class="bg-white border border-stone-200 rounded-xl p-5 flex gap-4">
                <div class="text-center shrink-0 w-14">
                    <p class="text-xl font-black text-stone-800">{{ explode(' ', $date)[0] }}</p>
                    <p class="text-[10px] text-stone-400 leading-tight">{{ explode(' ', $date)[1] }}<br>{{ explode(' ', $date)[2] }}</p>
                </div>
                <div class="border-l border-stone-200 pl-4">
                    <div class="flex items-center gap-2 mb-1">
                        <span class="font-black text-stone-800 text-sm">{{ $name }}</span>
                        <span class="text-[9px] font-bold bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full">{{ $role }}</span>
                    </div>
                    <p class="text-xs text-stone-600 leading-relaxed">{{ $activity }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <p class="text-xs text-blue-600 font-semibold mt-5 text-center">✓ Klik "Export PDF" untuk mengunduh semua entri logbook sebagai file yang siap diserahkan ke DPL / kampus</p>
    </section>

    @elseif($page == 'aduan')
    <!-- KOTAK SARAN/ADUAN WARGA -->
    <section class="py-14 max-w-2xl mx-auto px-4 sm:px-6">
        <p class="text-[10px] font-black uppercase tracking-widest text-amber-600 mb-2">Interaktif Warga</p>
        <h1 class="text-3xl font-black text-stone-900 mb-2">Kotak Saran & Pengaduan</h1>
        <p class="text-sm text-stone-400 mb-8">Sampaikan masukan, kritik, atau aduan untuk desa dan KKN. Pesan akan direkap oleh tim.</p>
        <div class="bg-white border border-stone-200 rounded-2xl p-7 shadow-sm">
            <form onsubmit="event.preventDefault(); alert('Demo Sukses! Pesan Anda telah terkirim ke admin KKN Sariharjo. Terima kasih!'); this.reset();">
                <div class="space-y-5">
                    <div><label class="block text-xs font-bold text-stone-600 mb-2">Nama Pengirim</label><input type="text" placeholder="cth: Pak Slamet, Warga Dusun Sari" required class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm text-stone-800 focus:outline-none focus:border-amber-500 placeholder:text-stone-300 transition-colors"></div>
                    <div><label class="block text-xs font-bold text-stone-600 mb-2">Dusun / RT/RW</label><input type="text" placeholder="cth: Dusun Sari RT 03/02" required class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm text-stone-800 focus:outline-none focus:border-amber-500 placeholder:text-stone-300 transition-colors"></div>
                    <div><label class="block text-xs font-bold text-stone-600 mb-2">Kategori</label>
                        <select class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm text-stone-700 bg-white focus:outline-none focus:border-amber-500">
                            <option>Infrastruktur & Fasilitas Umum</option>
                            <option>Program KKN</option>
                            <option>Kebersihan & Lingkungan</option>
                            <option>Saran Umum</option>
                        </select>
                    </div>
                    <div><label class="block text-xs font-bold text-stone-600 mb-2">Isi Aduan / Saran</label><textarea rows="4" placeholder="Tulis keluhan atau saran dengan jelas..." required class="w-full border border-stone-300 rounded-lg px-4 py-2.5 text-sm text-stone-800 focus:outline-none focus:border-amber-500 placeholder:text-stone-300 transition-colors resize-none"></textarea></div>
                    <button type="submit" class="w-full py-3 bg-amber-500 hover:bg-amber-600 text-white font-black rounded-xl text-sm transition-all shadow-md">Kirim Aduan / Saran</button>
                </div>
            </form>
        </div>
    </section>
    @endif

    </main>

    <footer class="bg-stone-900 text-stone-400 text-xs py-5 text-center border-t border-stone-800 mt-auto">
        &copy; 2026 KKN Sariharjo Universitas Indonesia. Dibuat oleh <a href="{{ url('/') }}" class="text-amber-400 hover:underline">KKN Digital</a>.
    </footer>
</body>
</html>
