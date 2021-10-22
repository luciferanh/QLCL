<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ngaycong extends Model
{
    use HasFactory;
    protected $fillable = [
        'nv_id',
        'thang1',
        'thang2',
        'thang3',
        'thang4',
        'thang5',
        'thang6',
        'thang7',
        'thang8',
        'thang9',
        'thang10',
        'thang11',
        'thang12'
    ];
}
