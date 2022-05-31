<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = "applications";
    public $fillable = [
        'name',
        'email',
        'location',
        'contact',
        'package_id',
        'message',
        'status',
        'remark'
    ];
    use HasFactory;
}
