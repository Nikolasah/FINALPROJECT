<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'author',
        'price',
        'releaseDate',
    ];

 

    public function warehouseList(){
        return $this->belongsToMany(Warehouse::class, 'barang_warehouses', 'barang_id', 'warehouse_id');
    }

}
