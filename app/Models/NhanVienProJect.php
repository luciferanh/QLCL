<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVienProJect extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'nv_id'
    ];
    public function nhanvien(){
        return $this->hasOne(User::class,'id','nv_id');
    }
    public function project(){
        return $this->hasOne(Project::class,'id','project_id');
    }
}
