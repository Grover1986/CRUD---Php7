$(document).ready(function(){
   tablaPersonas =  $("#tablaPersonas").DataTable({
       "columnDefs": [{	
           "targets": -1,
           "data": null,
           "defaultContent": `<div class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btnEditar">Editar</button>
                                        <button class="btn btn-danger btnBorrar">Borrar</button>
                                    </div>
                                </div>`
       }],
       "language": {
           "lengthMenu": "Mostrar _MENU_ registros",
           "zeroRecords": 'No se encontraron resultados',
           "info": 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
           "infoEmpty": 'Mostrando registros del 0 al 9 de un total de 9 registros',
           "infoFiltered": '(filtrando de un total de _MAX_ registros)',
           "sSearch": 'Buscar:',
           "oPaginate": {
               "sFirst": 'Primero',
               "sLast": 'Último',
               "sNext": 'Siguiente',
               "sPrevious": 'Anterior',
           },
           "sProcessing": 'Procesando....',

       }
   })

   $('#btnNuevo').click(function(){
       $('#formPersona').trigger('reset')
       $('.modal-header').css('background-color','#28a745')
       $('.close').css('color','#fff')
       $('.modal-title').text('Nueva Persona')
       $('.modal-title').css('color','#fff')
       $('#myModal').modal('show')
   })

})