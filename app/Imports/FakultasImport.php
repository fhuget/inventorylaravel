<?php

namespace App\Imports;

use App\Fakultas;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithStartRow;

class FakultasImport implements ToModel, WithStartRow
{


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {

        return 2;

    }

    public function model(array $row)
    {
        return new Fakultas([
            
            'nama_fakultas' => $row[1]

        ]);
    }

   public function rules(): array
    {
        return [
            '1' => 'max:255|unique:fakultas,nama_fakultas'
        ];
    }
}
