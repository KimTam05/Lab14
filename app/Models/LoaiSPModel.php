<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSPModel extends Model
{
    use HasFactory;

    protected $table = 'kntloaisanpham';
    protected $fillable = ['kntMaLoai', 'kntTenLoai', 'kntStatus'];
}
