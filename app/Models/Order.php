<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'package_name',
        'domain_package',
        'hosting_package',
        'addon_price',
        'pic_name',
        'pic_university',
        'pic_group_name',
        'pic_whatsapp',
        'pic_email',
        'kkn_location_village',
        'kkn_location_district',
        'kkn_location_regency',
        'total_price',
        'status',
    ];
}
