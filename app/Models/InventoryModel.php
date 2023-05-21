<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model
{
    use HasFactory;

    protected $table = "inventory";

    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'nama_barang',
        'harga_beli',
        'harga_jual',
        'kategori',
        'jumlah_stok',
        'jumlah_terjual'
    ];
}
