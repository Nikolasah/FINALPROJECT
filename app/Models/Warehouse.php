<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'phoneNum',
    ];

    public function barangList(){
        return $this->belongsToMany(barang::class, 'barang_warehouses', 'barang_id', 'warehouse_id');
    }
}
