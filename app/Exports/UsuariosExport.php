<?php

namespace App\Exports;

use App\Models\usuarios;
//use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsuariosExport implements FromView, ShouldAutoSize
{
    use Exportable;

    public function view(): View
    {
        return view('usuarios/export',['usuarios'=>usuarios::all()]);
    }
}
