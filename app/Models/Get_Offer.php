<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Get_Offer extends Model
{
    protected $table = 'get_offer';
    public $fillable = [
        'name',
        'contact',
        'email',
        'address',
        'product_category',
        'status',
        'remark'
    ];
    use HasFactory;
}
