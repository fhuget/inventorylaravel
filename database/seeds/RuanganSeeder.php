<?php

use Illuminate\Database\Seeder;

use App\Ruangan;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listRuangan = [
                        'Lab Komputer 27',
                        'H 85',
                        'IB 15',
                        'T 99',
                        'FK 1',
                        'FMP 12',
                        'FSP 64',
                        'Lab Komputer 303',
                        ];
        $jurusan = 1;

        foreach ($listRuangan as $ruangan) {
        	Ruangan::create([
                'jurusan_id' => $jurusan++,
                'nama_ruangan' => $ruangan
                ]);
        }
    }
}
