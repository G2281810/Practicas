<?php

namespace App\Imports;

use App\Models\Pacientes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');



class AlumnosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pacientes([
            'numpaciente' => $row['numpaciente'],
            'nombre' => $row['nombre'],
            'app' => $row['app'],
            'gen' => $row['gen'],
            'fn' => $row['fn'],
            'email' => $row['email'],
            'pass' => $row['pass'],
        ]);
    }
}