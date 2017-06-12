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
            <table class="table table-striped" > 
                                      <thead>
                                        <th>Examenes Clinicos</th>
                                        <th>Examenes Fisicos</th>      
                                      </thead>
                                      <tbody>
                                        
                                          <tr>
                                            <a href=""><td></td></a>
                                            <td> </td>
                                          </tr>
                                        
                                      </tbody>
                                    </table>

          </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- /.content -->
@endsection
