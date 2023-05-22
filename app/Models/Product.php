<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name',
        'description',
        'price',
        'cantidad',
        'stock',
        'proveedor_id'
    ];

    public function provider(){
        return $this->HasOne(Proveedor::class, 'proveedor_id', 'proveedor_id');
    }
}
