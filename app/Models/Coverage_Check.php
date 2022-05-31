<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverage_Check extends Model
{
    protected $table = 'coverage_check';
    public $fillable = [
        'name',
        'email',
        'location',
        'contact',
        'message',
        'status',
        'remark'
    ];
    use HasFactory;
}
