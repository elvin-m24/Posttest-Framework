<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    public function Pesawat()
    {
        return $this->belongsTo(pesawat::class);
    }

    use HasFactory;
    protected $fillable = [
        'asal',
        'tujuan',
        'harga'
    ];
}
