<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoPhan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function projects(){
        return $this->hasMany(Project::class,'bophan_id','id');
    }

}
