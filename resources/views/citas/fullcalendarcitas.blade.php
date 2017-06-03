<script>
$(document).ready(function() {
   $('#calendar').fullCalendar({
                  //Encabezados que se muestran como los botones de adelante, atras y las diferentes vistas
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
                  defaultTimedEventDuration: '00:30:00',
			defaultView: 'month',
			editable: false,
                  eventDurationEditable:false,
                  navLinks: true,
                  overlap:false,
                  eventLimit: true,
			events:  {url:'citas'},
                  eventRender: function(event,element){
                        var descripcion = "Expediente:"+event.idexpediente;
                        element.tooltip({title: descripcion});
                  },
                  eventDragStop: function( event, jsEvent, view) {
                      /* var currentToken = $('meta[name="csrf-token"]').attr('content');
                        //MENSAJE PARA SOLICITAR LA ELIMINACION DE UNA CITA METODO AJAX DENTRO DE EL!
                        swal({
                              title: '¿Está seguro?',
                              text: "No será posible reestaurarlo",
                              type: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Si, Eliminar!',
                              cancelButtonText: 'Cancelar',
                              showLoaderOnConfirm: true,
                              allowOutsideClick: false,
                              preConfirm: function(){
                                     //METODO AJAX PARA ELIMINAR CITAS                                                                     
                                    $.ajax({

                                          type: 'post',
                                          data: {_method: 'delete', id :event.id,_token:currentToken},
                                          
                                          url:  '/citas/' + event.id,
                                          
                                          success: function() {  
                                                          
                                                $('#calendar').fullCalendar('removeEvents',event._id); //<--- ESTA LINEA ELIMINA LA PARTE VISUAL DEL EVENTO
                                                swal(
                                                'Eliminado!',
                                                'La cita ha sido eliminada.',
                                                'success'
                                                )
                                          },
                                          error:function(){
                                                swal(
                                                'FallÓ!',
                                                'Algo ha salido mal, la cita no se a podido eliminar.',
                                                'error'
                                                )
                                          }
                                    });
                              },
                              }).then(function () {
                                   
                              })*/
                  },
                  eventClick: function(event){
				/*var r = confirm("¿Está seguro de que desea eliminar esta cita?");
                        if (r == true) {
                              $('#calendar').fullCalendar('removeEvents',event._id);
                        }   
		   	      */           
                        var currentToken = $('meta[name="csrf-token"]').attr('content');
                        //MENSAJE PARA SOLICITAR LA ELIMINACION DE UNA CITA METODO AJAX DENTRO DE EL!
                        swal({
                              title: '¿Está seguro?',
                              text: "No será posible reestaurarlo",
                              type: 'warning',
                              showCancelButton: true,
                              confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              confirmButtonText: 'Si, Eliminar!',
                              cancelButtonText: 'Cancelar',
                              showLoaderOnConfirm: true,
                              allowOutsideClick: false,
                              preConfirm: function(){
                                     //METODO AJAX PARA ELIMINAR CITAS                                                                     
                                    $.ajax({

                                          type: 'post',
                                          data: {_method: 'delete', id :event.id,_token:currentToken},
                                          
                                          url:  '/citas/' + event.id,
                                          
                                          success: function() {  
                                                          
                                                $('#calendar').fullCalendar('removeEvents',event._id); //<--- ESTA LINEA ELIMINA LA PARTE VISUAL DEL EVENTO
                                                swal(
                                                'Eliminado!',
                                                'La cita ha sido eliminada.',
                                                'success'
                                                )
                                          },
                                          error:function(){
                                                swal(
                                                'FallÓ!',
                                                'Algo ha salido mal, la cita no se a podido eliminar.',
                                                'error'
                                                )
                                          }
                                    });
                              },
                              }).then(function () {
                                   
                              })
			}
                  
		});            
});
</script>