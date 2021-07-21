<table>
  <thead>
    <tr>
      <th>N°</th>
      <th>Num Usuario</th>
      <th>Usuario</th>
      <th>Genero</th>
      <th>edad</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>Tipo usuario</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usuario)
    <tr>
      <td>{{ $usuario->id }}</td>
      <td>{{ $usuario->numusuario }}</td>
      <td>{{ $usuario-> apellidop .', '. $usuario->nombre }}</td>
      <td>{{ $usuario->sexo }}</td>
      <td>{{ $usuario->edad }}</td>
      <td>{{ $usuario->telefono }}</td>
      <td><a href="mailto: {{ $usuario->correo }}">{{ $usuario->correo }}</a></td>
      <td>{{ $usuario->tipou }}</td>
    </tr>
    @endforeach
  </tbody>
</table>