<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'content',
        'date_start',
        'date_end',
        'bophan_id'
    ];
    public function bophan(){
        return $this->hasOne(BoPhan::class,'id','bophan_id');
    }
}
