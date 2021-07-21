<table>
  <thead>
    <tr>
      <th>N°</th>
      <th>Num Paciente</th>
      <th>Paciente</th>
      <th>Genero</th>
      <th>edad</th>
      <th>Fecha de nacimiento</th>
      <th>Correo</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($pacientes as $paci)
    <tr>
      <td>{{ $paci->id }}</td>
      <td>{{ $paci->numpaciente }}</td>
      <td>{{ $paci-> app .', '. $paci->nombre }}</td>
      <td>{{ $paci->gen}}</td>
      <td>{{ $paci->fn }}</td>
      <td>{{ $paci->pass }}</td>
      <td><a href="mailto: {{ $paci->correo }}">{{ $paci->email }}</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>