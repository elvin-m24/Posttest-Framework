<?php

namespace Database\Seeders;

use App\Models\pesawat;
use Illuminate\Database\Seeder;

class PesawatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesawats = [
            [
                'id' => "1",
                'maskapai' => 'Garuda',
                'kelas' => 'Ekonomi',
                'jumlahkursi' => 100,
            ],
            [
                'id' => "2",
                'maskapai' => 'Sriwijaya',
                'kelas' => 'Ekonomi',
                'jumlahkursi' => 150,
            ],
            [
                'id' => "3",
                'maskapai' => 'Citilink',
                'kelas' => 'Ekonomi',
                'jumlahkursi' => 96,
            ]
        ];

        foreach ($pesawats as $p) {
            Pesawat::create([
                'id' => $p["id"],
                'maskapai' => $p["maskapai"],
                'kelas' => $p["kelas"],
                'jumlahkursi' => $p["jumlahkursi"],
            ]);
        }
    }
}
