<!DOCTYPE html>
<html lang="es">
   <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!----- CSS estilos ---->
        <style>
			table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}

			td{
			border: 1px solid #dddddd;
			text-align: left;
			font-size: 11px;
			padding: 8px;
			} 

			th {
			border: 1px solid #dddddd;
			text-align: left;
			font-size: 11px;
			padding: 8px;
			}

			tr {
				
			}
			
			thead{
				border: 2px solid #dddddd;
				background:#E5E7E9;

			}
			</style>
    </head>
   <body>
       <div class="container">
           <img src="./img/mydentis.jpg" height="80" width="80"/>
           <h2 class="mb-4">My Dentiss | Reporte Usuarios</h2>
           
           <table class="table table-striped table-hover">
               <thead>
                   <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Numusuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">E-Mail</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($pdfusu as $usua)
                    <tr>
                        <td>{{ $usua->id }}</td>
                        <td>{{ $usua->numusuario }}</td>
                        <td>{{ $usua->apellidop . ','.$usua->apellidom.','.$usua->nombre }}</td>
                        <td>{{ $usua->sexo}}</td>
                        <td>{{ $usua->telefono}}</td>
                        <td>{{ $usua->correo}}</td>
                    </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   </body>
</html>