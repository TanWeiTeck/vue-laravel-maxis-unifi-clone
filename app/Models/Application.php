<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = "applications";
    public $fillable = [
        'type',
        'name',
        'contact',
        'email',
        'address1',
        'address2',
        'postcode',
        'city',
        'service_provider',
        'product_category',
        'package_id',
        'message',
        'status',
        'remark'
    ];
    use HasFactory;
}
