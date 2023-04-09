<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table  = 'categorys';

    protected $fillable = [
        'id',
        'name',
        'photo',
        'state',
        'created_at',
        'updated_at',
    ];

    public function services_cat(){
        return  $this->hasMany(Category_Service::class ,'categorys_id');
    }
}
