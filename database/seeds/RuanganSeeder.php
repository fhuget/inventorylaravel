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
                        'Lab Komputer 300',
                        'Lab Komputer 30',
                        'FMP 15',
                        'IB 20',
                        'FK 1',
                        'FH 80',
                        'FT 95',
                        'FSP 65',
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
