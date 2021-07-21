<?php

namespace App\Imports;

use App\Models\usuarios;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class UsuariosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new usuarios([
            'numusuario'=> $row['numusuario'],
            'nombre' => $row['nombre'],
            'apellidop' => $row['apellidop'],
            'apellidom' => $row['apellidom'],
            'sexo' => $row['sexo'],
            'edad' => $row['edad'],
            'telefono' => $row['telefono'],
            'correo' => $row['correo'],
            'tipou' => $row['tipou'],
        ]);
    }
}
