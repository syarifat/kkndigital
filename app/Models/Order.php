<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'package_name',
        'pic_name',
        'pic_university',
        'pic_group_name',
        'pic_whatsapp',
        'pic_email',
        'kkn_location_village',
        'kkn_location_district',
        'kkn_location_regency',
        'additional_features',
        'total_price',
        'status',
    ];

    protected $casts = [
        'additional_features' => 'array',
    ];
}
