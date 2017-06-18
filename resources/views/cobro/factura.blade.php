
<!-- PLANTILLA ESTANDAR -->
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#">
    <title> Tanato -Servicios
 </title>

</head>
<body>



    <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
    <div class="" style="min-width:768px">
        <div class="" style="margin-right:-15px;margin-left:-15px">
            <div class="" style="margin-left:8.33333333%;width:83.33333333% ">
				<div class="" style="margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05);border-color:#ddd">
                    <!-- AQUI DEBEN AGREGAR EL MENSAJE QUE QUIERAN EN EL PANEL HEAD -->
					<div class="" style="padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px"> </div>
					<div class="" style="padding:15px">

	
                                    <table style="width:100%;max-width:100%;margin-bottom:20px;border: 1px solid #000;border-collapse: collapse;">
                      
                                    <tbody>
                                        <tr>
                                           <td style="border: 1px solid #000;">                      
                                                N° Factura
                                            </td>
                                            <td style="border: 1px solid #000;"> 
                                                 {{$consultaMedica[0]->costosServicios->id}}
                                            </td>
                                        </tr>

                                        <tr>
                                       <td style="border: 1px solid #000;">
                                               Fecha Facturacion
                                        </td>
                                         <td style="border: 1px solid #000;">
                                             {{ date("m/d/Y")}}
                                         </td>
                                        </tr>

                                        <tr>
                                        <td style="border: 1px solid #000;">
                                            Numero de expediente
                                        </td>
                                        <td style="border: 1px solid #000;">
                                            {{ $consultaMedica[0]->citas->expedientes->id}}
                                        </td>
                                                                                                              
                                        </tr>


                                        <tr>
                                        <td style="border: 1px solid #000;">
                                            Hospital
                                        </td>
                                        <td style="border: 1px solid #000;">
                                            El chelito
                                        </td>
                                                                                                              
                                        </tr>

                                    </tbody>
                                        
                                    </table>
										
					<h6><p>Detalle</p></h6>

					 <table class="" style="width:100%;max-width:100%;margin-bottom:20px;border: 1px solid #000;border-collapse: collapse;">
                            <thead>
                              <tr>
                                <th style=" border: 1px solid #000;">Servicio</th>
                                <th style=" border: 1px solid #000;">Descripcion</th>
                                <th style=" border: 1px solid #000;">Precio Unitario</th>
                                <th style=" border: 1px solid #000;">Total</th>                    
                 
                              </tr>
                            </thead>
                            <tbody>
                            @if($precio!= null)
                                @foreach($precio as $unitario)
                                <tr>
        							<td style="border: 1px solid #000;">{{$unitario[0]->nombreprecioespecial}}</td>
        							<td style="border: 1px solid #000;">{{$unitario[0]->descripcionprecioespecial}}</td>
        							<td style="border: 1px solid #000;">{{$unitario[0]->precioespecial}}</td>
        							<td style="border: 1px solid #000;">{{$unitario[0]->precioespecial}}</td>
                                     
                                </tr>
                                @endforeach
                     <tr>
                                    <td style="background-color:  #E6E6E6;border: 1px solid #000;"><b>Total Sin IVA</b></td>
                                    <td style="background-color:  #E6E6E6;border: 1px solid #000;"> </td>
                                    <td style="background-color:  #E6E6E6;border: 1px solid #000;"> </td>
                                    <td style="background-color:  #E6E6E6;border: 1px solid #000;"><b>{{$totalSinIVA}}</b></td>        
                                </tr>
                                <tr>
                                    <td><i>IVA</i></td>
                                    <td> </td>
                                    <td> </td>
                                    <td><i>{{round($IVA,2)}}</i></td>       
                                </tr>
                                <tr>
                                    <td style="background-color: #D8D8D8;border: 1px solid #000;"><b>Total</b></td>
                                    <td style="background-color: #D8D8D8;border: 1px solid #000;"> </td>
                                    <td style="background-color: #D8D8D8;border: 1px solid #000;"> </td>
                                    <td style="background-color: #D8D8D8;border: 1px solid #000;"><b>{{round($total,2)}}</b></td>        
                                </tr>
                            @endif
                            </tbody>
                          </table>     
					
					</div>
				</div>
			</div>
		</div>
	</div>
	</section><!-- /.content -->
</body>
</html>