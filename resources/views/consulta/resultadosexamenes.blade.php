@extends('layouts.app')

@section('htmlheader_title')
 Resultado de examenes
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

      <form action="/foo/bar" method="POST">
        <input type="hidden" name="_method" value="PUT">

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="col-md-10 col-md-offset-0">
	<div class="panel panel-default">
                    <div class="panel-heading" >
                                <div class="panel-body">
                                	<div role="tabpanel">
                                		<ul class="nav nav-tabs" role="tablist">
                                			<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Examenes Pendientes</a></li>
										</ul>
								<div class="tab-content">
								        <div role="tabpanel" class="tab-pane active" id="tab1">
								            <div class="panel-heading"  style="font-size: 24pt; ">Resultados de Examenes</div>
								            	@include('bones-flash::bones.flash')
											    @include('flash::message')
											  <table class="table table-striped" > 
											    <thead>
											      <th>Resultados Examenes Clinicos</th>
											      <th>Resultados Examenes Fisicos</th>      
											    </thead>
											    <tbody>
											      
											        <tr>
											          <a href=""><td></td></a>
											          <td></td>
											        </tr>
											      
											    </tbody>
											  </table>

										</div>
                                </div>

                                	</div>
								</div>
					</div>
	</div>
</div>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</form>
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