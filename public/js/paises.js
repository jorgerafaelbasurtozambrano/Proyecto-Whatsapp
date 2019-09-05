$(document).ready(function (){
  $('body').on('click','.actualizar_pais',function() {
    $("#title_pais").hide();
    $("#id_pais_").val($(this).val());
    $("#nuevo_pais").val("UpdatePais");
    $.get('/getpais/'+$(this).val(),function(data) {
        $.each(data,function(i,item) {
          $("#nombre_pais").val(item.nombre);
          $("#abrev_pais").val(item.abreviatura);
          $("#codigo_pais").val(item.codigo);
          $("#imagen_pais").attr('src',item.imagen);
          $("#dataImagen").val(item.imagen);
        })
    })
    $("#actualizar_pais").modal("show");
  })


  $('body').on('click','.eliminar_pais',function() {
    $(this).closest('tr').remove();
    $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    $.ajax({
        url: 'paises/'+$(this).val(),
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


})
