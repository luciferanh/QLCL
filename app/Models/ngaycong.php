<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ngaycong extends Model
{
    use HasFactory;
    protected $fillable = [
        'nam',
        'thang',
        'ngay'
    ];
   
}
