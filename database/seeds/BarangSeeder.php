<?php

use Illuminate\Database\Seeder;
use App\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create(['ruangan_id' => '1', 'name_barang' => 'KURSI', 'total' => '20', 'broken' => '1', 'created_by' => 'admin']);
    }
}