$(document).ready(function (){
    $('body').on('click', '.eliminar_usuario', function(){
        $(this).closest('tr').remove();
        $.ajaxSetup({
            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        $.ajax({
            url: 'usuarios/'+$(this).val(),
            type: 'DELETE',
            data: $(this).val(),
            success:function() {
              toastr.success('ELIMINADO CORRECTAMENTE','ADMIN WHATSAPP',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
            },
            error:function(data) {
              toastr.error('ERROR AL REALIZAR LA PETICION','ADMIN WHATSAPP',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
            }
          });
    })

    $('body').on('click', '.actualizar_usuario', function(){
        id_usuario = $(this).val();
        obtener_datos();
        $('#nuevo_usuario').val('actualizar');
        $('#actualizar_modal').modal('show'); 
    })
var id_usuario = 0;
function obtener_datos(){
    $.get('/obtener/'+id_usuario,function(data) {
        $.each(data,function(i,item) {
            $('#nombre_usuarionuevo').val(item.nombre);
            $('#numero_usuarionuevo').val(item.numero_telefono);
        })
    })
}

$('#nuevo_usuario').on('click', function(){
    if($('#nuevo_usuario').val()=='Añadir'){
        $.ajaxSetup({
            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          var formData={
            nombre:$('#nombre_usuarionuevo').val(),
            telefono:$('#numero_usuarionuevo').val(),
          };
          $.ajax({
            type:'POST',
            url:'usuarios',
            data: formData,
            success: function(data) {
                toastr.success('USUARIO GUARDADO CORRECTAMENTE','Whatsapp ADMIN',{
                    "positionClass": "toast-bottom-right",
                    "closeButton": true,
                    "extendedTimeOut": 1
                  })
                    $('#nombre_usuarionuevo').val("");
                    $('#numero_usuarionuevo').val("");
            },
            error:function(data) {
              toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
            }
          });
    }else if($('#nuevo_usuario').val()=='actualizar'){
        var formData={
            nombre:$('#nombre_usuarionuevo').val(),
            telefono:$('#numero_usuarionuevo').val(),
            id:id_usuario,
          };
          $.ajaxSetup({
            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            type:'PUT',
            url:'usuarios/'+formData.id,
            data: formData,
            dataType:'json',
            success: function(data) {
                
            },
            error:function(data) {
              console.log(data);
            }
            
          })
          $("#tabla_usuarios"+" #"+id_usuario+"nombre").text($("#nombre_usuarionuevo").val());
          $("#tabla_usuarios"+" #"+id_usuario+"numero").text($("#numero_usuarionuevo").val());
          $('#actualizar_modal').modal('hide'); 
    }
    
})

})

