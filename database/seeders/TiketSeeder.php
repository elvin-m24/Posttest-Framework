<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tiket;

class TiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tikets = [
            [
                "id" => "1",
                "asal" => "Jakarta",
                "tujuan" => "Bandung",
                "maskapai" => "Sriwijaya",
                "kelas" => "Ekonomi",
                "harga" => 1000000
            ]
            ];

            foreach ($tikets as $t) {
                Tiket::create([
                    'id' => $t["id"],
                    'asal' => $t["asal"],
                    'tujuan' => $t["tujuan"],
                    'maskapai' => $t["maskapai"],
                    'kelas' => $t["kelas"],
                    'harga' => $t["harga"]
                ]);
            }
    }
}
