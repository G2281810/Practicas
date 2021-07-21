<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PacientesExport;
use App\Imports\PacientesImport;
use Maatwebsite\Excel\Excel;
use DataTables;
use PDF;

use App\Models\Pacientes;

class PacientesController extends Controller
{

  private $excel;
  public function __construct(Excel $excel){
    $this->excel = $excel;
  }


  public function index(Request $request){
      if($request->ajax()){
            $data = Pacientes::latest()->get();
            return DataTables::of($data)
              ->addIndexColumn()
              ->addColumn('otros', function($row){
                  $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Edit"
                    class="edit btn btn-primary btn-sm editCustomer">Editar</a>';
                  $btn = $btn. '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete"
                    class="btn btn-danger btn-sm deleteCustomer">Borrar</a>';
                    return $btn;
              })
            ->rawColumns(['otros'])
            ->make(true);
          }
          return view('pacientes/pacientes');
    }

  public function store(Request $request){
    if($request->Customer_id !='' ){

      if($request->file('img1') !=''){
        $file = $request->file('img1');
        $img1 = $file->getClientOriginalName();
        // $name = $request->file('img1')->getClientOriginalName();
        $ldate = date('Ymd_His_');
          $img2 = $ldate . $img1;
        \Storage::disk('local')->put($img2, \File::get($file));
      }
      else{
        $img2 = $request->$img2;
      }

    Pacientes::where('id', $request->Customer_id)->update([
      'numpaciente' => $request->numpaciente,
      'nombre' => $request->nombre,
      'app' => $request->app,
      'gen' => $request->gen,
      'fn' => $request->fn,
      'img' => $img2,
      'email' => $request->email,
      'pass' => $request->pass,
    ]);
    }
    else{
      // Pacientes::create($request->only('numpaciente','nombre','app','gen','fn','email','pass'));
      if($request->file('img1') !=''){
        $file = $request->file('img1');
        $img1 = $file->getClientOriginalName();
        // $name = $request->file('img1')->getClientOriginalName();
        $ldate = date('Ymd_His_');
          $img2 = $ldate . $img1;
        \Storage::disk('local')->put($img2, \File::get($file));
      }
      else{
        //$img2 = $request->img2;
        $img2 = "eso.png";
      }
      Pacientes::create(array(
        'numpaciente'=>$request->input('numpaciente'),
        'nombre'=>$request->input('nombre'),
        'app'=>$request->input('app'),
        'gen'=>$request->input('gen'),
        'fn'=>$request->input('fn'),
        'img'=>$img2,
        'email'=>$request->input('email'),
        'pass'=>$request->input('pass'),
      ));
    }
    return response()->json(['success'=>'El cliente se guardo correctamente']);
  }

    public function edit($id){
      $query = Pacientes::find($id);
      return response()->json($query);
    }

    public function destroy($id){
      Pacientes::find($id)->delete();
      return response()->json(['success'=>'El cliente se elimino correctamente...!!!']);
    }

    // ------------------- PDF ---------------------------
    public function PdfPacientes(){
        $pdfpac = Pacientes::all();
        $pdf = PDF::loadView('pacientes/pdfpacientes', compact('pdfpac'));
        return $pdf->download('pdf_pacientes.pdf');
      }

    // -----------------------Excel-----------------------
      public function export(){
        
          return $this->excel->download(new PacientesExport, 'pacientes.xlsx');
        
      }

      public function import(){
        $this->excel->import(new PacientesImport, request()->file('file'));
        return back();
      }

      // ------------------------ QR ------------------------------>
      public function QrCode()
      {
        return \QrCode::size(300)
            ->backgroundColor(255,255,255,0)
            ->generate('Ejemplo de Código QR - |IDGS-93||||');
      }
      public function QrImg()
      {
        $img = \QrCode::format('png')
          ->merge('img/laravel.png', 0.5, true)
          ->size(500)->errorCorrection('H')
          ->generate('Ejemplo de Código QR - |IDGS-93||||');
        return responser($img)->header('Content-type','image/png'); 
      }
      public function EscanerQr()
      {
        return view('QR/escanerqr');
      }
}
