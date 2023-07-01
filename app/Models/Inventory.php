<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    protected $table = "inventory";

    protected $primaryKey = "id";

    protected $fillable = [
        'nama_barang',
        'harga_beli',
        'harga_jual',
        'kategori',
        'jumlah_stok',
        'jumlah_terjual'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
