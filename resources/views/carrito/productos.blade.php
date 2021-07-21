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
    <style>
        .card{
            margin: 10px 5px 20px;
        }
        nav
        {
            background-color:#EEE;
        }
        </style>
    <title>Laravel 8 | Productos</title>
</head>
<body>

        <nav class="nav justify-content-end">
            @if(session('carrito'))
                <a class="nav-link" href="{{url('carrito')}}">
                El carrito contenido: {{count(session('carrito'))}}Articulos
                </a>
            @else
                <a  class="nav-link" href="#">
                    El carrito contenido: 0 articulos
                </a>
            @endif
        </nav>
        <br><br>
        <div class="container">
            @if($message=Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>
            @endif
            <div class="row">
                    @foreach($productos as $producto)
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{asset('img/' .$producto->img)}}" class="card-img-top" alt="...." height="300">
                                <div class="card-body">
                                    <h5 class="card-title"><b>N°.</b>{{$producto->id}} - {{$producto->nombre}}</h5>
                                    <p class="card-text">
                                        <b>Existencias:</b>{{$producto->cantidad}}<br>
                                        <b>Costo(c/u):</b>${{$producto->costo}}
                                    </p>
                                    <a href="{{url('agregar/'.$producto->id)}}" class="btn btn-primary" role="button"> Agregar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
        <footer class="bd-footer bg-ligth">
            <div class="container">
                <div class="row">
                    <div>
                        <ul class="list-unstyled smail text-muted">
                            <li class="mb-2">
                                Desarrollo Para <a href="https://utvt.edomex.gob.mx/">UTVT</a> Noveno cuatrimestre de IDGS-93 2021. &#169;
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
@endsection
