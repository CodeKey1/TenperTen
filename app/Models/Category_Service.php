<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Service extends Model
{
    use HasFactory;

    protected $table  = 'category_services';

    protected $fillable = [
        'id',
        'name',
        'categorys_id',
        'state',
        'start_time',
        'end_time',
        'timeslot',
        'created_at',
        'updated_at',
    ];

    public function categoryname(){
        return  $this->belongsTo(Category::class ,'categorys_id');
    }
}
