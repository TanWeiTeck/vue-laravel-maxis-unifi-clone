<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'telco_packages';
    
    public $fillable = [
        'service_provider',
        'package_id',
        'internet_speed',
        'description',
        'price',
        'discount',
        'discounted_price',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        $query->where('is_active', true);
    }
    
}
