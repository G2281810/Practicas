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
                    <h1>Control Pacientes</h1>
                     <br>
                  <div align="left">
                    <a href="javascript:void(0)" id="createNewCustomer" class="btn btn-success">Crear nuevo paciente</a>
                    <hr>
                    <div class="botones">
                    <a href=" {{url('pdfpacientes') }}" class="btn btn-danger">PDF-Pacientes</a>
                    <a href=" {{url('export') }}" class="btn btn-info">Excel-Pacientes</a>
                    </div>
                  </div> 
                  @if (Session::has('mensaje'))
                 <div class="alert alert-success">
                  {{Session::get('mensaje')}}
                  @endif
                 </div>
                    
                    <table  class="table-bordered yajra-datatables">
                      <thead>
                        <tr>
                    <th>N°</th>
                    <th>num paciente</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Genero</th>
                    <th>Fecha_N</th>
                    <th>E-mail</th>
                    <th>Otros</th>
                </tr>
                      </thead>
                      <tbody> </tbody>
                    </table>
        <br> <hr>
        <h3>Excel | Formulario de importación</h3>
        <form action="{{route('import')}}" method="POST" enctype="multipart/form-data" name="excelimport">
          @csrf
          <input type="file" name="file" class="form-control" required>
          <button class="btn btn-success">Importar archivo excel (.cvs)</button>
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
                  <label for="numpaciente" class="col-sm-2 control-label">Num paciente</label>
                    <div class="col-sm-12">
                      <input type="text" name="numpaciente" id="numpaciente" class="form-control" placeholder="Indique su numpaciente" value="" maslenght="30" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-12">
                      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Indica su nombre" value="" maslenght="30" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="app" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-12">
                      <input type="text" name="app" id="app" class="form-control" placeholder="Indica su Apellido" value="" maslenght="30" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="fn" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-sm-12">
                      <input type="date" name="fn" id="fn" class="form-control" value="" maslenght="10" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Genero</label>
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input type="radio" name="gen" id="gen" class="form-check-input" value="Femenino" checked>
                        <label class="form-check-label" for="gen">Femenino</label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="gen" id="gen" class="form-check-input" value="Masculino">
                        <label class="form-check-label" for="gen">Masculino</label>
                      </div>
                    </div>
                </div>

                {{-- -------------------------------IMAGEN------------------------------- --}}
                <div class="form-group">
                  <label for="img" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-12">
                      <input type="file" name="img1" id="img1" class="form-control">
                      <input type="text" name="img2" id="img2" class="form-control">
                    </div>
                </div>
                {{-- -------------------------------IMAGEN------------------------------- --}}

                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-12">
                      <input type="text" name="email" id="email" class="form-control" placeholder="Intoduce un correo valido" value="" required="">
                    </div>
                </div>

                <div class="form-group">
                  <label for="pass" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-12">
                      <input type="text" name="pass" id="pass" class="form-control" placeholder="Ingrese su contraseña" value="" required="">
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

        <script type="text/javascript">
          $(function(){
            $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
          });

            var table = $('.yajra-datatables').DataTable({
              processing: true,
              serverSide: true,
              ajax: "",
              columns: [
                  { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                  { data: 'numpaciente', name: 'numpaciente' },
                  { data: 'nombre', name: 'nombre' },
                  { data: 'app', name: 'app' },
                  { data: 'gen', name: 'gen' },
                  { data: 'fn', name: 'fn' },
                  { data: 'email', name: 'email' },
                  { data: 'otros', name: 'otros', orderable: false, searchable: false },
              ]
            });
            // -----------Nuevo --
            $('#createNewCustomer').click(function(){
              $('#saveBtn').val("create-Customer");
              $('#Customer_id').val("");
              $('#img_logo').attr("src","");
              $('#CustomerForm').trigger("reset");
              $('#modelHeading').html("Crear Nuevo Registro");
              $('#ajaxModel').modal("show");
            });


            // ------------------ Modificar --------------
            $('body').on('click', '.editCustomer', function(){
                var id = $(this).data('id');
                // console.log(id);
                $.get("editar/" + id, function (data){
                    $('#modelHeading').html("Editar Customer");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal("show");
                    $('#Customer_id').val(data.id);
                    $('#numpaciente').val(data.numpaciente);
                    $('#nombre').val(data.nombre);
                    $('#app').val(data.app);
                    $('#fn').val(data.fn);

                    $('#img2').val(data.img);
                    var datimg = $('#img2').val();
                    datimg = "http://localhost/proyecto_mydentis/public/img/"+datimg;
                    $('#img_logo').attr("src",datimg);

                    $('#email').val(data.email);
                    $('#pass').val(data.pass);
                })
            });
            // ---------------- Salvar --------------
            // $('#saveBtn').click(function(e){
              $('form').submit(function(e){
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax({
                  data: formData,
                  url: "{{ route('store') }}",
                  type: "POST",
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success: function(data){
                    $('#CustomerForm').trigger('reset');
                    $(this).html('Enviando ...');
                    $('#ajaxModel').modal('hide');
                    table.draw();
                  },
                  error: function(data){
                    console.log('Error: ', data);
                    $('#saveBtn').html('Guardar cambio');
                  }
                });
              });
        
          // ----------------- Delete -------------
          $('body').on('click', '.deleteCustomer', function(){
              var id = $(this).data("id");
              if (confirm("Esta seguro de querer borrar el registro...?")) {
                $.ajax({
                  type: "DELETE",
                  url: "{{ url('destroy') }}"+"/"+id,
                  success: function(data){
                    table.draw();
                  },
                  error: function(data){
                    console.log("Error: ", data);
                  }
                });
              }
              else{}
            });

          });
        </script>


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

