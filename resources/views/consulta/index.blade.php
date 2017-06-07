@extends('layouts.app')

@section('htmlheader_title')
 Ver expedientes
@endsection


@section('main-content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height:2000px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <div class="panel-heading"  style="font-size: 24pt; " > Citas Pendientes Para Hoy   
        </div>
  
    @include('bones-flash::bones.flash')
    @include('flash::message')
  <table class="table table-striped" > 
    <thead>
      <th>Cita</th>
      <th>Usuario</th>      
    </thead>
    <tbody>
      @foreach($diagnostico as $diagnostico)
        <tr>
          <a href="{{route('consulta.vista',$diagnostico->nombres)}}"><td>{{$diagnostico->id}} </td></a>
          <td>{{$diagnostico->nombres}} </td>
        </tr>
      @endforeach
    </tbody>
  </table>



        <!-- contenido principal -->
        <section class="content"  id="contenido_principal">






        </section>

      <!-- cargador empresa -->
        <div style="display: none;" id="cargador_empresa" align="center">
            <br>


         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="imagenes/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>





      </div><!-- /.content-wrapper -->




    </div><!-- ./wrapper -->
</section><!-- /.content -->
@endsection