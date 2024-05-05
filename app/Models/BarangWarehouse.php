<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangWarehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'barang_id',
        'warehouse_id',
    ];

}
