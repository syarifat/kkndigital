@extends('layouts.app')

@section('title', 'Ringkasan Pesanan #' . $order->order_number . ' | KKN Digital')

@section('content')
<div class="bg-[#faf7f2] min-h-screen py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6">

        <!-- Breadcrumb -->
        <div class="mb-8 text-sm text-stone-400">
            <a href="{{ url('/') }}" class="hover:text-stone-700">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-stone-700 font-semibold">Ringkasan Pesanan</span>
        </div>

        @if (session('success'))
        <div class="mb-6 flex items-start gap-3 p-4 bg-green-50 border border-green-200 text-green-800 rounded-xl text-sm">
            <span class="text-lg">✅</span>
            <div>
                <strong class="block font-black">Pesanan berhasil tercatat!</strong>
                Kirimkan ringkasan ini ke WhatsApp developer untuk konfirmasi dan pembayaran.
            </div>
        </div>
        @endif

        <!-- SPK Box -->
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">

            <!-- Header -->
            <div class="bg-stone-900 text-white px-8 py-6 flex justify-between items-start">
                <div>
                    <p class="text-xs font-bold text-stone-400 uppercase tracking-widest mb-1">Surat Perintah Kerja (SPK)</p>
                    <h2 class="text-2xl font-black">{{ $order->order_number }}</h2>
                </div>
                <div class="text-right">
                    <p class="text-xs text-stone-500">Tanggal</p>
                    <p class="text-sm font-semibold text-stone-200">{{ $order->created_at->format('d M Y, H:i') }}</p>
                </div>
            </div>

            <div class="p-8">

                <!-- Pihak I & II -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-8 pb-8 border-b border-stone-100">
                    <div>
                        <p class="text-[10px] font-black uppercase tracking-widest text-stone-400 mb-3">PIHAK I — Kelompok KKN / Pemesan</p>
                        <dl class="space-y-1.5 text-sm">
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">Nama PIC</dt><dd class="font-bold text-stone-800">{{ $order->pic_name }}</dd></div>
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">Universitas</dt><dd class="text-stone-700">{{ $order->pic_university }}</dd></div>
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">Kelompok KKN</dt><dd class="text-stone-700">{{ $order->pic_group_name }}</dd></div>
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">WhatsApp</dt><dd class="text-stone-700">{{ $order->pic_whatsapp }}</dd></div>
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">Email</dt><dd class="text-stone-700">{{ $order->pic_email }}</dd></div>
                        </dl>
                    </div>
                    <div>
                        <p class="text-[10px] font-black uppercase tracking-widest text-stone-400 mb-3">PIHAK II — Developer / Penyedia Jasa</p>
                        <dl class="space-y-1.5 text-sm">
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">Nama</dt><dd class="font-bold text-stone-800">Syarif & Team</dd></div>
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">Layanan</dt><dd class="text-stone-700">KKN Digital</dd></div>
                            <div class="flex gap-2"><dt class="text-stone-400 w-28 shrink-0">WhatsApp</dt><dd class="text-stone-700">0878-4294-9212</dd></div>
                        </dl>
                    </div>
                </div>

                <!-- Lokasi -->
                <div class="mb-8 pb-8 border-b border-stone-100">
                    <p class="text-[10px] font-black uppercase tracking-widest text-stone-400 mb-3">Lokasi Pengabdian</p>
                    <p class="text-sm text-stone-700 bg-stone-50 rounded-lg px-4 py-3 border border-stone-200">
                        Desa <strong>{{ $order->kkn_location_village }}</strong>,
                        Kec. <strong>{{ $order->kkn_location_district }}</strong>,
                        Kab. <strong>{{ $order->kkn_location_regency }}</strong>
                    </p>
                </div>

                <!-- Rincian Biaya -->
                <div class="mb-8">
                    <p class="text-[10px] font-black uppercase tracking-widest text-stone-400 mb-3">Rincian Biaya</p>
                    <table class="w-full text-sm border border-stone-200 rounded-xl overflow-hidden">
                        <thead class="bg-stone-50 text-[10px] font-black uppercase tracking-widest text-stone-400 border-b border-stone-200">
                            <tr>
                                <th class="px-5 py-3 text-left">Deskripsi</th>
                                <th class="px-5 py-3 text-right">Harga</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            <!-- Jasa Development -->
                            <tr>
                                <td class="px-5 py-4">
                                    <span class="font-black text-stone-800">Jasa Development — Paket {{ strtoupper($order->package_name) }}</span>
                                </td>
                                <td class="px-5 py-4 text-right font-bold text-stone-800">
                                    Rp {{ number_format($order->total_price - $order->addon_price, 0, ',', '.') }}
                                </td>
                            </tr>
                            <!-- Domain -->
                            <tr>
                                <td class="px-5 py-4">
                                    <span class="font-semibold text-stone-700">Domain</span>
                                    <span class="block text-xs text-stone-400 mt-0.5">
                                        {{ $domainLabels[$order->domain_package] ?? $order->domain_package }}
                                    </span>
                                </td>
                                <td class="px-5 py-4 text-right font-bold text-stone-800">
                                    @php
                                        $domainAmounts = ['none' => null, 'subdomain' => 0, 'standar' => 60000, 'kreatif' => 85000, 'instansi' => 220000, 'premium_com' => 230000];
                                        $dAmt = $domainAmounts[$order->domain_package] ?? null;
                                    @endphp
                                    @if(is_null($dAmt))
                                        <span class="text-stone-400 text-xs">–</span>
                                    @elseif($dAmt === 0)
                                        <span class="text-green-600 font-black">Gratis</span>
                                    @else
                                        Rp {{ number_format($dAmt, 0, ',', '.') }}
                                    @endif
                                </td>
                            </tr>
                            <!-- Hosting -->
                            <tr>
                                <td class="px-5 py-4">
                                    <span class="font-semibold text-stone-700">Hosting Server</span>
                                    <span class="block text-xs text-stone-400 mt-0.5">
                                        {{ $hostingLabels[$order->hosting_package] ?? $order->hosting_package }}
                                    </span>
                                </td>
                                <td class="px-5 py-4 text-right font-bold text-stone-800">
                                    @php
                                        $hostAmt = ['none' => null, '3bulan' => 60000, '6bulan' => 120000][$order->hosting_package] ?? null;
                                    @endphp
                                    @if(is_null($hostAmt))
                                        <span class="text-stone-400 text-xs">–</span>
                                    @else
                                        Rp {{ number_format($hostAmt, 0, ',', '.') }}
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="bg-stone-900 text-white">
                                <td class="px-5 py-4 font-black">Total Biaya</td>
                                <td class="px-5 py-4 text-right font-black text-xl">
                                    Rp {{ number_format($order->total_price, 0, ',', '.') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                    @if($order->domain_package == 'none' || $order->hosting_package == 'none')
                    <p class="text-xs text-amber-600 mt-3 font-semibold bg-amber-50 border border-amber-200 rounded-lg px-4 py-2.5">
                        ⚠️ Kamu memilih koordinasi domain/hosting via WhatsApp. Harga di atas belum termasuk biaya domain/hosting yang akan dikonfirmasi bersama developer.
                    </p>
                    @endif
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ $whatsappUrl }}" target="_blank" class="flex-grow flex items-center justify-center gap-2 py-4 bg-green-600 hover:bg-green-700 text-white font-black rounded-xl text-sm transition-all shadow-md hover:shadow-lg">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.835-4.577c1.611.956 3.197 1.467 4.905 1.468 5.582 0 10.133-4.55 10.136-10.13.002-2.701-1.047-5.242-2.952-7.149C17.076 1.704 14.546.654 11.834.654 6.252.654 1.7 5.205 1.697 10.787a10.098 10.098 0 001.405 5.048l-.404 1.48 4.194-1.1c1.558.85 3.253 1.3 4.995 1.301z"/></svg>
                        Kirim ke WhatsApp Developer
                    </a>
                    <a href="{{ url('/') }}" class="py-4 px-6 bg-white border border-stone-300 hover:bg-stone-50 text-stone-700 font-semibold rounded-xl text-sm transition-all text-center">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
