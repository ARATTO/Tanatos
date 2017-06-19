@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
  Examenes Pendientes
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
          <div class="panel-heading"> Examenes </div>
          <div class="panel-body">
            @include('bones-flash::bones.flash')
            @include('layouts.partials.flash') 
            <hr>
            <h3><span  class="label label-danger">Examenes Pendientes</span></h3>
            <hr> 
            @if($examenesfisicos!=null)
            <h4><span  for="chosen-select1" class="label label-info">Examenes Fisicos Pendientes</span></h4>          
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
            <hr>
            @else
            <h4><span  for="chosen-select1" class="label label-warning">No Posee Examenes Fisicos Pendientes</span></h4>
            <hr>
            @endif

            @if($examenesclinicos!=null)
            <h4><span  for="chosen-select1" class="label label-info">Examenes Clinicos Pendientes</span></h4>  
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
            <h4><span  for="chosen-select1" class="label label-warning">No Posee Examenes Clinicos Pendientes</span></h4>
            @endif

            <hr>
            <h3><span  class="label label-danger">Examenes con Respuesta</span></h3>
            <hr>
            @if($examenFisicoResuelto != null)
                  <h4><span  for="chosen-select1" class="label label-info">Examenes Fisicos</span></h4>          
                  <table class="table table-striped" > 
                    <thead>
                      <th>No. Examen</th>
                      <th>Nombre</th>
                      <th>Descripcion</th> 
                      <th>Precio</th>   
                    </thead>
                    <tbody>
                      @foreach($examenFisicoResuelto as $efr)
                        <tr>
                          
                          <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="...">
                              <a href=" {{route('detalleExamenFisico',$efr->id)}} " title="Ver Examen" class="btn btn-success">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                              </a>
                            </div>
                          </td>
                          <td>{{$efr->tipoExamenFisico->nombreexamenfisico}}</td>
                          <td>{{$efr->tipoExamenFisico->descripcionexamenfisico}}</td>
                          <td>{{$efr->tipoExamenFisico->precioexamenfisico}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <hr>    
            @else
            <h4><span  class="label label-warning">No Posee Examenes Fisicos con Respuesta</span></h4>
            @endif

            @if($examenClinicoResuelto != null)
                  <h4><span  for="chosen-select1" class="label label-info">Examenes Clinicos</span></h4>          
                  <table class="table table-striped" > 
                    <thead>
                      <th>No. Examen</th>
                      <th>Nombre</th>
                      <th>Descripcion</th> 
                      <th>Precio</th>   
                    </thead>
                    <tbody>
                      @foreach($examenClinicoResuelto as $ecr)
                        <tr>
                          
                          <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="...">
                              <a href=" {{route('detalleExamenClinico',$ecr->id)}} " title="Ver Examen" class="btn btn-success">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                              </a>
                            </div>
                          </td>
                          <td>{{$ecr->tipoExamenClinico->nombreexamenclinico}}</td>
                          <td>{{$ecr->tipoExamenClinico->descripcionexamenclinico}}</td>
                          <td>{{$ecr->tipoExamenClinico->precioexamenclinico}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <hr>    
            @else
            <h4><span  class="label label-warning">No Posee Examenes Clinico con Respuesta</span></h4>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- /.content -->
@endsection
