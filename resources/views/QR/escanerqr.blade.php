@extends('plantilla')

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

<h1>Prueba Qr con camara</h1>
        <video id="preview"></video>
        <script type="text/javascript">
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
            scanner.addListener('scan', function (content) {
                    console.log(content);
                    alert(content);
                });
            Instascan.Camera.getCameras().then(function (cameras) {
                    if (cameras.length >0) { scanner.start(cameras[0]); }
                    else { console.error('No se pueden ver las camaras'); }
            }).catch(function (e) {
                console.error(e);
            });
        </script>
@endsection
