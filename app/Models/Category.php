<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    // Chỉ định khóa chính nếu không phải id
    protected $primaryKey = 'id';

    // Tùy chọn nếu khóa chính không phải số nguyên
    protected $keyType = 'int';

    // Tùy chọn nếu bảng không sử dụng timestamps
    public $timestamps = true;

    // Các thuộc tính có thể gán hàng loạt
    protected $fillable = [
        'ten_danh_muc',
        'mo_ta'
    ];

    // Định nghĩa mối quan hệ với bảng Products
    public function products()
    {
        return $this->hasMany(Product::class, 'danh_muc_id');
    }
}
