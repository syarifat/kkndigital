<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders (Admin view).
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     */
    public function create(Request $request)
    {
        $selectedPackage = $request->query('package', 'standard');
        return view('order.create', compact('selectedPackage'));
    }

    /**
     * Store a newly created order in database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_name'          => 'required|in:basic,standard,pro,premium',
            'domain_package'        => 'required|in:none,subdomain,standar,kreatif,instansi,premium_com',
            'hosting_package'       => 'required|in:none,3bulan,6bulan',
            'pic_name'              => 'required|string|max:255',
            'pic_university'        => 'required|string|max:255',
            'pic_group_name'        => 'required|string|max:255',
            'pic_whatsapp'          => 'required|string|max:20',
            'pic_email'             => 'required|email|max:255',
            'kkn_location_village'  => 'required|string|max:255',
            'kkn_location_district' => 'required|string|max:255',
            'kkn_location_regency'  => 'required|string|max:255',
        ]);

        // Harga jasa development
        $devPrices = [
            'basic'    => 200000,
            'standard' => 400000,
            'pro'      => 750000,
            'premium'  => 1000000,
        ];

        // Harga domain add-on
        $domainPrices = [
            'none'        => 0,
            'subdomain'   => 0,
            'standar'     => 60000,
            'kreatif'     => 85000,
            'instansi'    => 220000,
            'premium_com' => 230000,
        ];

        // Harga hosting add-on
        $hostingPrices = [
            'none'   => 0,
            '3bulan' => 60000,
            '6bulan' => 120000,
        ];

        $addonPrice = $domainPrices[$validated['domain_package']] + $hostingPrices[$validated['hosting_package']];
        $totalPrice = $devPrices[$validated['package_name']] + $addonPrice;

        // Generate unique order number
        $orderNumber = 'KKN-' . date('Ymd') . '-' . mt_rand(1000, 9999);

        // Store to database
        $order = Order::create([
            'order_number'          => $orderNumber,
            'package_name'          => $validated['package_name'],
            'domain_package'        => $validated['domain_package'],
            'hosting_package'       => $validated['hosting_package'],
            'addon_price'           => $addonPrice,
            'pic_name'              => $validated['pic_name'],
            'pic_university'        => $validated['pic_university'],
            'pic_group_name'        => $validated['pic_group_name'],
            'pic_whatsapp'          => $validated['pic_whatsapp'],
            'pic_email'             => $validated['pic_email'],
            'kkn_location_village'  => $validated['kkn_location_village'],
            'kkn_location_district' => $validated['kkn_location_district'],
            'kkn_location_regency'  => $validated['kkn_location_regency'],
            'total_price'           => $totalPrice,
            'status'                => 'pending',
        ]);

        return redirect()->route('order.show', $order->order_number)
                         ->with('success', 'Pesanan berhasil dibuat!');
    }

    /**
     * Display the specified order receipt / SPK.
     */
    public function show($order_number)
    {
        $order = Order::where('order_number', $order_number)->firstOrFail();

        $developerNumber = '6287842949212';

        // Label-label untuk tampilan
        $domainLabels = [
            'none'        => 'Tidak ada domain',
            'subdomain'   => 'Subdomain Gratis (.satcloud.tech) — 6 bulan',
            'standar'     => 'Domain Ekstensi Standar (.online/.site/.space) — 1 tahun',
            'kreatif'     => 'Domain Ekstensi Kreatif (.blog/.click/.cloud) — 1 tahun',
            'instansi'    => 'Domain Ekstensi Instansi (.org) — 1 tahun',
            'premium_com' => 'Domain Premium (.com) — 1 tahun',
        ];
        $hostingLabels = [
            'none'   => 'Tidak ada hosting',
            '3bulan' => 'Hosting 3 Bulan (20GB)',
            '6bulan' => 'Hosting 6 Bulan (20GB)',
        ];

        $message = "*HALO DEVELOPER KKN DIGITAL!* 🌾\n\n";
        $message .= "Saya ingin memesan website KKN. Berikut detailnya:\n\n";
        $message .= "*[ PAKET YANG DIPESAN ]*\n";
        $message .= "• No Pesanan: {$order->order_number}\n";
        $message .= "• Paket Development: " . strtoupper($order->package_name) . " (Rp " . number_format($order->total_price - $order->addon_price, 0, ',', '.') . ")\n";
        $message .= "• Domain: " . ($domainLabels[$order->domain_package] ?? $order->domain_package) . "\n";
        $message .= "• Hosting: " . ($hostingLabels[$order->hosting_package] ?? $order->hosting_package) . "\n";
        $message .= "• Total Harga: Rp " . number_format($order->total_price, 0, ',', '.') . "\n\n";
        $message .= "*[ DATA PIC KKN ]*\n";
        $message .= "• Nama PIC: {$order->pic_name}\n";
        $message .= "• Universitas: {$order->pic_university}\n";
        $message .= "• Kelompok KKN: {$order->pic_group_name}\n";
        $message .= "• WhatsApp: {$order->pic_whatsapp}\n";
        $message .= "• Email: {$order->pic_email}\n\n";
        $message .= "*[ LOKASI KKN ]*\n";
        $message .= "• Desa: {$order->kkn_location_village}\n";
        $message .= "• Kecamatan: {$order->kkn_location_district}\n";
        $message .= "• Kabupaten: {$order->kkn_location_regency}\n\n";
        $message .= "Mohon segera dihubungi untuk koordinasi lanjutan. Terima kasih!";

        $whatsappUrl = "https://api.whatsapp.com/send?phone=" . $developerNumber . "&text=" . urlencode($message);

        $domainLabels = $domainLabels;
        $hostingLabels = $hostingLabels;

        return view('order.show', compact('order', 'whatsappUrl', 'domainLabels', 'hostingLabels'));
    }

    /**
     * Update status order (Admin route).
     */
    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $validated = $request->validate([
            'status' => 'required|in:pending,processed,completed',
        ]);
        
        $order->update(['status' => $validated['status']]);
        return back()->with('success', 'Status pesanan berhasil diperbarui.');
    }

    /**
     * Delete order (Admin route).
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return back()->with('success', 'Pesanan berhasil dihapus.');
    }
}
