@extends('layouts.app')

@section('htmlheader_title')
 Informacion de Expediente
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

	
	  @include('flash::message')
	

  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>

  <div class="panel-heading"  style="font-size: 24pt; " > Informacion del Cliente     
  </div>

  <form action="/foo/bar" method="POST">
    <input type="hidden" name="_method" value="PUT">
    @foreach($consulta as $con)

        <div class="col-xs-6">
          <div class="input-group col-md-12">
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <div>
                  <input type="text" name="nombre" id="nombre" value="{{ $con->nombres }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->apellidos }} " readonly="readonly">
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
                <input type="textarea" name="nombre" id="nombre" value="{{ $con->detalledireccion }} " readonly="readonly" style="width: 300px;">
                </div>
            </div>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->

        <div class="col-xs-6">
          <div class="input-group col-xs-12">
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->telefono }} " readonly="readonly" >
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
                <label for="telfonoresponsable">Telefono de Responsable:</label>
                <div>
                <input type="text" name="nombre" id="nombre" value="{{ $con->telefonoresponsable }}" readonly="readonly"   >
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
        <td>{{$expediente->start}} </td>
        <td>{{$expediente->fin}} </td>
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