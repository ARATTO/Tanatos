@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
  Citas
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->

    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
  <div class="container spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
          <div class="panel-heading"> Seleccione la cita para ver sus examenes pendientes </div>
          <div class="panel-body">
            @include('bones-flash::bones.flash')
            @include('layouts.partials.flash')    

            @if($cita != null)

            <table class="table table-striped" > 
                            <thead>
                              <th>Cita</th>
                              <th>Motivo</th>
                              <th>Inicio</th>
                              <th>Fin</th>
                            </thead>
                            <tbody>
                              
                              
                              @foreach($cita as $ci)
                                <tr>
                                <td>
                                  <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                    <a href=" {{route('examenespendientes',$ci->id)}} " title="Ver Cita" class="btn btn-success">
                                      <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    </a>
                                  </div>
                                </td>
                                <td>{{$ci->title}} </td>
                                <td>{{$ci->start}} </td>
                                <td>{{$ci->fin}} </td>
                                </tr>
                              @endforeach
                              
                            
                            </tbody>
                          </table>         
            
            @else
            No tiene Citas Asociadas al Sistema.
            @endif             
          </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- /.content -->
@endsection
