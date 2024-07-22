<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma_san_pham',
        'ten_san_pham',
        'hinh_anh',
        'gia',
        'gia_khuyen_mai',
        'mo_ta_ngan',
        'mo_ta',
        'so_luong',
        'luot_xem',
        'ngay_nhap',
        'trang_thai',
        'trang_thai_moi',
        'trang_thai_hot',
        'trang_thai_noi_bat',
        'is_show_home',
        'danh_muc_id'
    ];

    protected $casts = [
        'trang_thai'=>'boolean',
        'trang_thai_moi'=>'boolean',
        'trang_thai_hot'=>'boolean',
        'trang_thai_noi_bat'=>'boolean',
        'is_show_home'=>'boolean',
    ];

    public function danhMuc(){
        return $this->belongsTo(DanhMuc::class);
    }

    public function hinhAnhSanPham(){
        return $this->hasMany(HinhAnhSanPham::class);
    }
}
