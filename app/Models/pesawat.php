<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesawat extends Model
{
    public function Tiket()
    {
        return $this->hasMany(tiket::class);
    }

    use HasFactory;

    protected $fillable = [
        'maskapai',
        'kelas',
        'jumlahkursi',
    ];
}
