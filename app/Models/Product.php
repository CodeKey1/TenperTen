<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'photo',
        'description',
        'price',
        'state',
        'stock',
        'category_id',
        'discount',
        'offer',
        'supplier_id',
        'created_at',
        'updated_at',
    ];

    public function product_cat()
    {
       return $this->belongsTo('App\Models\Category', 'category_id' ,'id');
    }

    public function product_supplier()
    {
       return $this->belongsTo('App\Models\Supplier', 'supplier_id' ,'id');
    }
}
