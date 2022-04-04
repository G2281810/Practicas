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
            margin: 10px 5px 20px 5px;
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
            <!----------------------------------------------------->
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Producto</th>
                            <th style="width:10%">Costo</th>
                            <th style="width:8%">Cantidad</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%">Otros</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        @if(session('carrito'))
                        @foreach(session('carrito') as $id=>$datos)
                            <?php $total += $datos['costo'] * $datos['cantidad'] ?>
                            <tr>
                                <td data-th="Producto">
                                    <div class="col-sm-3 hidden-xs">
                                        {{$datos['img']}}
                                        <img src="{{asset('img/'.$datos['img'])}}" width="100" height="100" class="img-responsive" alt="">
                                    </div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{$datos['nombre']}}</h4>
                                </div>
                            </td>
                                <td data-th="Costo">${{$datos['costo']}}</td>
                                 <td data-th="Cantidad">
                                <input type="number" value="{{$datos['cantidad']}}" min="1" class="form-control quantity">
                            </td>
                            <td data-th="Subtotal" class="text-center">{{$datos['costo']*$datos['cantidad']}}</td>
                                 <td data-th="Otros" class="actions">
                                <button class="btn btn-info btn-sm update-cart" data-id="{{$id }}">
                                    <i class="fa fa-undo"></i>
                                </button>
                                <button class="btn btn-danger btn-sm update-cart" data-id="{{ $id}}">
                                                <i class="fa fa-trash"></i>    
                                </button>   
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center"><strong>Total:{{$total}}</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{url('productos')}}" class="btn btn-warning">
                                    <i class="fa fa-shopping-cart "> Seguir Comprando</i>
                                </a>
                            </td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs-text-center"><strong>Total: ${{$total}}</strong></td>
                        </tr>
                    </tfoot>
                </table>
            <!------------------------------>

        </div>
        
        
</body>
</html>
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

