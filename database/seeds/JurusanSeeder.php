<?php

use Illuminate\Database\Seeder;

use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listJurusan = [
                        'Sistem Informasi',
                        'Ilmu Hukum',
                        'Administrasi Pendidikan',
                        'Teknik Sipil',
                        'Farmasi',
                        'Biologi',
                        'Sosiologi',
                        'D3 Teknik Komputer'
                    ];

        $fakultas = 1;

        foreach ($listJurusan as $jurusan) {
        	Jurusan::create([
                'fakultas_id' => $fakultas++,
                'nama_jurusan' => $jurusan
                ]);
        }
    }
}
