<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telco_Package extends Model
{
    protected $table = 'telco_packages';
    public $fillable = [
        'service_provider',
        'package_id',
        'internet_speed',
        'description',
        'price',
        'discount',
        'discounted_price'
    ];
    use HasFactory;
}
