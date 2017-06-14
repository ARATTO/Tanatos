@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
  INICIO
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
  @include('layouts.partials.contentheader.expediente.index_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
  <div class="container spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
          <div class="panel-heading"> TITULO DEL PANEL </div>
          <div class="panel-body">
            @include('bones-flash::bones.flash')
            @include('layouts.partials.flash')  
            <table class="table table-striped" > 
              <thead>
                <th>Codigo</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>DUI</th>
                
              </thead>
              <tbody>
                @foreach($expedientes as $expediente)
                  <tr>
                    <td>{{$expediente->id}} </td>
                    <td>{{$expediente->primernombre}} </td>
                    <td>{{$expediente->segundonombre}} </td>
                    <td>{{$expediente->primerapellido}} </td>
                    <td>{{$expediente->segundoapellido}} </td>
                    <td>{{$expediente->dui}} </td>

                    <td> 
                      <a href="{{route('expediente.vista',$expediente->id)}}" class="btn btn-success"> <font color="black" size="2"> <b>Ver más</b> </font>  </a> 
                      <a href=" {{route('expediente.destroy',$expediente->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><font color="black" size="2"> <b>Borrar</b>  </font></a> 
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>          
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- /.content -->
@endsection

 