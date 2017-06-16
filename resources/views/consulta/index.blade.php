@extends('layouts.app')
<!-- TEXTO DEL HEADER -->
@section('htmlheader_title')
  INICIO
@endsection


@section('main-content')
    <!-- AQUI DEBEN LLAMAR EL HEADER PARA CADA VIEW CREADO EN "CONTENTHEADER"" -->
  @include('layouts.partials.contentheader.consulta.index_head')
    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
  <div class="container spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
          <div class="panel-heading"> CITAS </div>
          <div class="panel-body">
            @include('bones-flash::bones.flash')
            @include('layouts.partials.flash')   
           
            <table class="table table-striped" > 
              <thead>
                <th>Cita</th>
                <th>DUI</th>     
                <th>Nombre</th> 
                <th>Apellido</th> 
                <th>Nombre Doctor</th> 
                <th>Expediente</th> 
                
              </thead>
              <tbody>
                @foreach($diagnostico as $diagnostico)
                  <tr>
                    <td><a href="{{route('consultas',$diagnostico->cita)}}">{{$diagnostico->cita}} </a></td>
                    <td>{{$diagnostico->dui}} </td>
                    <td>{{$diagnostico->primernombre}} </td>
                    <td>{{$diagnostico->primerapellido}} </td>
                    <td>{{$diagnostico->nombredoctor}}</td>
                    <td>{{$diagnostico->idexpediente}} </td>
                    

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

