<?php

use Illuminate\Database\Seeder;

use App\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listFakultas = [
            'Fakultas Ilmu Komputer', 
            'Fakultas Hukum',
            'Fakultas Ilmu Budaya',
            'Fakultas Teknik',
            'Fakultas Kedokteran',
            'Fakultas Matematika dan Ilmu Pengetahuan Alam',
            'Fakultas Ilmu Sosial dan Ilmu Politik',
            'Program Pendidikan Vokasi', 
            ];
 
        foreach ($listFakultas as $fakultas) {
        	Fakultas::create(['nama_fakultas' => $fakultas]);
        }
    }
}
