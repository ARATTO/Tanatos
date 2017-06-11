@extends('layouts.app')

@section('htmlheader_title')
 Ver expedientes
@endsection


@section('main-content')

      <br></br>
  <div class="container spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

        <div class="panel-heading"  style="font-size: 24pt; " > Citas Pendientes Para Hoy   
        </div>
  
    @include('bones-flash::bones.flash')
    @include('flash::message')
  <table class="table table-striped" > 
    <thead>
      <th>Cita</th>
      <th>DUI</th>     
      <th>Nombre</th> 
      <th>Apellido</th> 
      <th>Nombre Doctor</th> 
      <th>Expediente</th> 
      <th>Color</th> 
    </thead>
    <tbody>
      @foreach($diagnostico as $diagnostico)
        <tr>
          <td>{{$diagnostico->id}} </td>
          <td>{{$diagnostico->dui}} </td>
          <td>{{$diagnostico->primernombre}} </td>
          <td>{{$diagnostico->primerapellido}} </td>
          <td>{{$diagnostico->nombredoctor}}</td>
          <td>{{$diagnostico->idexpediente}} </td>
          <td>{{$diagnostico->color}} </td>

        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div>


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