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
                        element.bind('mousedown', function (e) {
                              if (e.which == 3) {
                                    var currentToken = $('meta[name="csrf-token"]').attr('content');
                              //MENSAJE PARA SOLICITAR LA ELIMINACION DE UNA CITA METODO AJAX DENTRO DE EL!
                                    swal({
                                          title: 'Â¿EstÃ¡ seguro?',
                                          text: "No serÃ¡ posible reestaurarlo",
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
                                                            'FallÃ“!',
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
                  },
                  eventDragStop: function( event, jsEvent, view) {
                      /* var currentToken = $('meta[name="csrf-token"]').attr('content');
                        //MENSAJE PARA SOLICITAR LA ELIMINACION DE UNA CITA METODO AJAX DENTRO DE EL!
                        swal({
                              title: 'Â¿EstÃ¡ seguro?',
                              text: "No serÃ¡ posible reestaurarlo",
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
                                                'FallÃ“!',
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
                       var doctorestxt ='<?php echo$doctores;?>';
                       var doctores= JSON.parse(doctorestxt);
                       var d = new Date(event.start); 
                       // alert(event.start);

                       var start = d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear();
                       var hora =  d.getUTCHours()+":"+d.getMinutes();
                      
                       var texto="Doctor:             <b>"+doctores[event.iddoctor]+'</b><br/>' 
                              +"Numero expediente:    <b>"+event.idexpediente+'</b><br/>'
                              +"Fecha cita:           <b>"+start+'</b><br/>'
                              +"Hora de la cita:      <b>"+hora;

                      swal({
                        title: event.title,
                        html: texto,
                        animation: false,
                        customClass: 'animated tada'
                        })
                  }
                  
            });            
});
</script>