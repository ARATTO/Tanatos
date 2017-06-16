@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
  INICIO
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
  @include('layouts.partials.contentheader.consulta.examenespendientes_head')
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
            @if($examenesclinicos!=null)
             <h4><span  for="chosen-select1" class="label label-info">Examenes Fisicos</span></h4>          
            <table class="table table-striped" > 
              <thead>
                <th>Nombre</th>
                <th>Descripcion</th> 
                <th>Precio</th>   
              </thead>
              <tbody>
                @foreach($examenesfisicos as $ef)
                  <tr>
                    <td>{{$ef->nombreexamenfisico}}</td>
                    <td>{{$ef->descripcionexamenfisico}}</td>
                    <td>{{$ef->precioexamenfisico}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            @else
            <h4><span  for="chosen-select1" class="label label-warning">No Posee Examenes Fisicos</span></h4>
            @endif

            @if($examenesfisicos!=null)
            <h4><span  for="chosen-select1" class="label label-info">Examenes Clinicos</span></h4>  
            <table class="table table-striped" > 
              <thead>
                <th>Nombre</th>
                <th>Descripcion</th> 
                <th>Precio</th>   
              </thead>
              <tbody>
                @foreach($examenesclinicos as $ec)
                  <tr>
                    <td>{{$ec->nombreexamenclinico}}</td>
                    <td>{{$ec->descripcionexamenclinico}}</td>
                    <td>{{$ec->precioexamenclinico}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
             @else
            <h4><span  for="chosen-select1" class="label label-warning">No Posee Examenes Clinicos</span></h4>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- /.content -->
@endsection
