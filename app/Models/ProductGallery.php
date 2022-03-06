<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'tb_product_galleries';

    protected $hidden = [];

    protected $fillable = [
        'products_id', 'photo', 'is_default'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
