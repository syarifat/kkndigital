<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('package_name');
            $table->string('domain_package')->nullable();  // none, subdomain, standar, kreatif, instansi, premium_com
            $table->string('hosting_package')->nullable(); // none, 3bulan, 6bulan
            $table->integer('addon_price')->default(0);    // total harga domain + hosting
            $table->string('pic_name');
            $table->string('pic_university');
            $table->string('pic_group_name');
            $table->string('pic_whatsapp');
            $table->string('pic_email');
            $table->string('kkn_location_village');
            $table->string('kkn_location_district');
            $table->string('kkn_location_regency');
            $table->integer('total_price');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
