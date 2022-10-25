<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';


    protected $fillable = [
        'category_id',
        'suplier_id',
        'sku',
        'name',
        'description',
        'price'
    ];

    public function categories(){
        return $this->belongsTo(Payment::class,'category_id');
    }

    public function suplier(){
        return $this->belongsTo(Payment::class,'suplier_id');
    }
}
