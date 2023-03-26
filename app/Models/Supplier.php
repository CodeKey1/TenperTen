<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = ['id','name','phone','category_id','start_count','end_count','state','created_at','updated_at'];

    public function department()
    {
       return $this->belongsTo('App\Models\Category', 'category_id' ,'id');
    }
}
