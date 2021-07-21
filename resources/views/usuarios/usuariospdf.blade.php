@extends('plantilla')
@section('css')
@endsection
@section('contenido')
 <div class="right_col" role="main">
            <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span class="sr-only"></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
     
    </ul>
    
  </div>
</nav>
<body>
  

                <div class="x_panel">
                    <h1>Control Usuarios</h1>
                     <br>
                  <div align="left">
                    <a href="javascript:void(0)" id="createNewCustomer" class="btn btn-success">Crear nuevo usuario</a>
                    <hr>
                  </div>
                  <div align="left">
                    <a href="javascript:void(0)" id="createNewCustomer" class="btn btn-success">Crear nuevo usuario</a>
                    <hr>
                    <div class="botones">
                    <a href=" {{url('pdfusuarios') }}" class="btn btn-danger">PDF-Usuarios</a>
                    <a href=" {{url('export') }}" class="btn btn-info">Excel-Usuarios</a>
                    </div>
                  </div> 
                  @if (Session::has('mensaje'))
                 <div class="alert alert-success">
                  {{Session::get('mensaje')}}
                  @endif
                 </div>
                    
                    <table  class="table-bordered yajra-datatable">
                      <thead>
                        <tr>
                    <th>N°</th>
                    <th>numusuario</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Genero</th>
                    <th>telefono</th>
                    <th>E-mail</th>
                    <th>tipou</th>
                    <th>Otros</th>
                </tr>
                      </thead>
                      <tbody> </tbody>
                    </table>
                     <br><hr>
        <h3> Excel | Formulario de Importación de usuarios</h3>
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" name="excelimport">
          @csrf
          <input type="file" name="file" class="form-control" required><br>
          <button class="btn btn-success">Importar archivo Excel (.csv)</button>
        </form>
                </div>
<!-- ----------------- Formulario: Modal ------------------------------- -->
<div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header"><h4 class="modal-title" id="modelHeading"></h4></div>
            <div class="modal-body">
             
              <img src="" id="img_logo" alt="" style="width: 50px">
             
              <form id="CustomerForm" name="CustomerForm" class="form-horizontal" enctype="multipart/form-data">
                <input type="text" name="Customer_id" id="Customer_id">

                <div class="form-group">
                  <label for="numusuario" class="col-sm-2 control-label">Num. usuario</label>
                    <div class="col-sm-12">
                      <input type="text" name="numusuario" id="numusuario" class="form-control" placeholder="Indique su numero de usuario" value="" maslenght="30" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Indica su nombre" value="" maslenght="30" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="apellidop" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-12">
                      <input type="text" name="apellidop" id="apellidop" class="form-control" placeholder="Indica su Apellido" value="" maslenght="30" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="telefono" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-12">
                      <input type="text" name="telefono" id="telefono" class="form-control" value="" maslenght="10" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Genero</label>
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input type="radio" name="sexo" id="sexo" class="form-check-input" value="Femenino" checked>
                        <label class="form-check-label" for="sexo">Femenino</label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="sexo" id="sexo" class="form-check-input" value="Masculino">
                        <label class="form-check-label" for="sexo">Masculino</label>
                      </div>
                    </div>
                </div>

                
                <div class="form-group">
                  <label for="img" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-12">
                      <input type="file" name="img1" id="img1" class="form-control" >
                      <input type="text" name="img2" id="img2" class="form-control">
                    </div>
                </div>
                

                <div class="form-group">
                  <label for="correo" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-12">
                      <input type="text" name="correo" id="correo" class="form-control" placeholder="Intoduce un correo valido" value="" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="tipou" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-12">
                      <input type="text" name="tipou" id="tipou" class="form-control" placeholder="Ingrese su contraseña" value="" required="">
                    </div>
                </div>

                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Guardar Cambios</button>
                </div>


              </form>
            </div>
          </div>
        </div>
      </div>

</body>
<style>
  .boton{
    text-align:right;
  }
  .botones
  {
    text-align: right;
  }
  </style>
@endsection
@section('js')
@endsection

