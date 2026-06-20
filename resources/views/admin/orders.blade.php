@extends('layouts.app')

@section('title', 'Daftar Pesanan Masuk | Admin KKN Digital')

@section('content')
<div class="bg-[#faf7f2] min-h-screen py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-10">
            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-green-700 mb-1">Admin Panel</p>
                <h1 class="text-2xl font-black text-stone-900">Daftar Pesanan Masuk</h1>
                <p class="text-stone-400 text-sm mt-1">Kelola semua pesanan website KKN yang masuk ke sistem.</p>
            </div>
            <a href="{{ url('/order') }}" class="inline-flex items-center gap-2 py-2.5 px-4 bg-green-700 hover:bg-green-800 text-white font-bold rounded-xl text-sm transition-all shadow-sm">
                + Tambah Pesanan Manual
            </a>
        </div>

        @if (session('success'))
        <div class="mb-6 flex items-center gap-3 p-4 bg-green-50 border border-green-200 text-green-800 rounded-xl text-sm">
            <span>✅</span> {{ session('success') }}
        </div>
        @endif

        <!-- Metrics -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
            <div class="bg-white border border-stone-200 rounded-xl p-5">
                <p class="text-xs text-stone-400 font-semibold mb-1">Total Pesanan</p>
                <p class="text-3xl font-black text-stone-900">{{ $orders->count() }}</p>
            </div>
            <div class="bg-white border border-stone-200 rounded-xl p-5">
                <p class="text-xs text-stone-400 font-semibold mb-1">Pending</p>
                <p class="text-3xl font-black text-amber-500">{{ $orders->where('status', 'pending')->count() }}</p>
            </div>
            <div class="bg-white border border-stone-200 rounded-xl p-5">
                <p class="text-xs text-stone-400 font-semibold mb-1">Diproses</p>
                <p class="text-3xl font-black text-blue-600">{{ $orders->where('status', 'processed')->count() }}</p>
            </div>
            <div class="bg-white border border-stone-200 rounded-xl p-5">
                <p class="text-xs text-stone-400 font-semibold mb-1">Estimasi Omset</p>
                <p class="text-2xl font-black text-green-700">Rp {{ number_format($orders->sum('total_price'), 0, ',', '.') }}</p>
            </div>
        </div>

        <!-- Table -->
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-stone-700">
                    <thead class="bg-stone-50 text-[10px] text-stone-400 uppercase tracking-widest border-b border-stone-200">
                        <tr>
                            <th class="px-5 py-4">No. Pesanan</th>
                            <th class="px-5 py-4">PIC / Kelompok</th>
                            <th class="px-5 py-4">Paket</th>
                            <th class="px-5 py-4">Lokasi KKN</th>
                            <th class="px-5 py-4 text-center">Status</th>
                            <th class="px-5 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stone-100">
                        @forelse($orders as $order)
                        <tr class="hover:bg-stone-50 transition-colors">
                            <td class="px-5 py-4">
                                <a href="{{ route('order.show', $order->order_number) }}" class="font-black text-stone-800 hover:text-green-700 transition-colors text-xs">
                                    {{ $order->order_number }}
                                </a>
                                <span class="block text-[10px] text-stone-400 mt-0.5">{{ $order->created_at->format('d M, H:i') }}</span>
                            </td>
                            <td class="px-5 py-4">
                                <span class="font-bold text-stone-800 block">{{ $order->pic_name }}</span>
                                <span class="text-xs text-stone-400">{{ $order->pic_university }}</span>
                            </td>
                            <td class="px-5 py-4">
                                <span class="inline-block text-[10px] font-black uppercase tracking-widest px-2.5 py-1 rounded-lg
                                    @if($order->package_name == 'silver') bg-stone-100 text-stone-600
                                    @elseif($order->package_name == 'gold') bg-amber-100 text-amber-700
                                    @elseif($order->package_name == 'platinum') bg-green-100 text-green-700
                                    @endif">
                                    {{ $order->package_name }}
                                </span>
                                <span class="block text-xs font-bold text-stone-600 mt-1">Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                            </td>
                            <td class="px-5 py-4">
                                <span class="text-xs font-semibold text-stone-700">Desa {{ $order->kkn_location_village }}</span>
                                <span class="block text-[10px] text-stone-400">{{ $order->kkn_location_district }}, {{ $order->kkn_location_regency }}</span>
                            </td>
                            <td class="px-5 py-4 text-center">
                                <form action="{{ route('admin.orders.status', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" class="text-xs border border-stone-300 rounded-lg px-2.5 py-1.5 text-stone-700 bg-white focus:outline-none focus:border-green-500 cursor-pointer">
                                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processed" {{ $order->status == 'processed' ? 'selected' : '' }}>Diproses</option>
                                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                </form>
                            </td>
                            <td class="px-5 py-4 text-center">
                                <div class="flex items-center justify-center gap-3">
                                    <a href="{{ route('order.show', $order->order_number) }}" class="text-xs font-bold text-green-700 hover:text-green-900 transition-colors">
                                        Detail
                                    </a>
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Hapus pesanan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs font-bold text-red-500 hover:text-red-700 transition-colors">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-5 py-16 text-center text-stone-400 text-sm">
                                <div class="text-4xl mb-3">📭</div>
                                Belum ada pesanan yang masuk.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
