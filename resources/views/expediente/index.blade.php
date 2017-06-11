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
          
        <div class="panel-heading"  style="font-size: 24pt; " > Expedientes Encontrados     
        </div>
  
    @include('bones-flash::bones.flash')
    @include('flash::message')
  <table class="table table-striped" > 
    <thead>
      <th>Codigo</th>
      <th>Primer Nombre</th>
      <th>SeguNdo Nombre</th>
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