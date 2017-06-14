@extends('layouts.app')

@section('htmlheader_title')
 Informacion de Expediente
@endsection


@section('main-content')

      

	
	  @include('flash::message')
	
<br></br>
  <div class="container spark-screen">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          

  <div class="panel-heading"  style="font-size: 24pt; " > Expedientes del Paciente   
  </div>
  <div class="panel-body">

  <form action="/foo/bar" method="POST">
    <input type="hidden" name="_method" value="PUT">
    @foreach($consulta as $con)

        <div class="col-xs-6">
          <div class="input-group col-md-12">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <div>
                  <input type="text" name="nombre" id="nombre" value="{{ $con->primernombre }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                  <input type="text" name="nombre" id="nombre" value="{{ $con->segundonombre }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->primerapellido }} " readonly="readonly">
                </div>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->segundoapellido }} " readonly="readonly">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="genero">DUI:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->dui }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="genero">Genero:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->genero }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->


        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="fechanacimiento">Fecha de Nacimiento:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->fechanacimiento }} " readonly="readonly">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <div>
                <input type="textarea" name="nombre" id="nombre" value="{{ $con->calle }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="nombre" id="nombre" value="{{ $con->colonia }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="nombre" id="nombre" value="{{ $con->pasaje }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="nombre" id="nombre" value="{{ $con->casa }} " readonly="readonly" style="width: 300px;">
                </div>
                <div>
                <input type="textarea" name="nombre" id="nombre" value="{{ $con->nombremunicipio }}" readonly="readonly" style="width: 300px;">
                </div>

            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefonos:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->casatelefono }} " readonly="readonly" >
                </div>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->trabajotelefono }} " readonly="readonly" >
                </div>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->celulartelefono }} " readonly="readonly" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="email">Email:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->email }}" readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

         
        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Estado Civil:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->nombreestadocivil }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 


        @foreach($consulta2 as $con2)
        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Madre:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con2->nombremadre }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Padre:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con2->nombrepadre }}" readonly="readonly"   >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->  

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telfonoresponsable">Antecedentes:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con2->antesedentes }}" readonly="readonly"  style="width: 300px;" >
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 --> 
        @endforeach

        
    @endforeach
    
  </form>

  <table class="table table-striped" > 
    <thead>
      <th>Cita</th>
      <th>Inicio</th>
        <th>Fin</th>
    </thead>
    <tbody>
      @foreach($expedientes as $expediente)
        <tr>
        <td>{{$expediente->id}} </td>
        <td>{{$expediente->tittle}} </td>
        <td>{{$expediente->start}} </td>
        <td>{{$expediente->fin}} </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
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