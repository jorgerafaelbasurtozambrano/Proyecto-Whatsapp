$(document).ready(function (){
  var contenidofila;
  var coincidencia;
  var exp;
  $('body').on('click','.enviar',function(){
      recorrerTabla();
      llenarSelect();
      $('#modal_envio').modal('show');
  })
  $('#star_mensajes').on('click',function() {
    var cantidad=$("#lista_usuarios").children().length;
    // for (let i=0;i<=cantidad;i++) {
    //   var dato=$("#lista_usuarios").children()[i];
    //   console.log(dato.value;
    // }
    $("#lista_usuarios").each(function( index ) {
      console.log($(this).text();
    });
  })

  function recorrerTabla() {
      var seleccionados=0;
      $('#lista_usuarios').html("");
      $("#tabla_usuarios tbody tr").each(function() {
        var div=$(this).find('td:eq(0)').children()[0];
        var input=div.getElementsByTagName('input')[0];
        if(input.checked==true)
        {
          seleccionados=seleccionados+1;
          $('#lista_usuarios').append("<option value="+input.value+">"+$(this).find('td:eq(1)').text()+"</option>");
        }
      })
      $("#numeroCliente").html("    "+seleccionados+" SELECCIONADOS");
      if(seleccionados==0)
      {
        $("#star_mensajes").hide();
      }else
      {
        $("#star_mensajes").show();
      }
  }

  function llenarSelect() {
    $("#encuesta_enviar").empty();
    $("#encuesta_enviar").append("<option selected disabled>Seleccione una opción</option>");
    $.get('/obtenerFormularios',function(data) {
        $.each(data,function(i,item) {
            $("#encuesta_enviar").append("<option value="+item.id+">"+item.descripcion+"</option>");
        })
    })
  }

  $("#filtrar").keyup(function() {
    if($("#select_busqueda").val()=="nombre")
    {
      $("#tabla_usuarios tbody tr").each(function() {
        $(this).show();
        contenidofila=$(this).find('td:eq(1)').html();
        exp=new RegExp($("#filtrar").val(),'gi');
        coincidencia=contenidofila.match(exp);
        if (coincidencia!=null)
        {
        }else
        {
          $(this).hide();
        }
        if ($("#filtrar").val()=="")
        {
          $(this).show();
        }
      })
    }else if($("#select_busqueda").val()=="numero"){
      $("#tabla_usuarios tbody tr").each(function() {
        $(this).show();
        contenidofila=$(this).find('td:eq(2)').html();
        exp=new RegExp($("#filtrar").val(),'gi');
        coincidencia=contenidofila.match(exp);
        if (coincidencia!=null)
        {
        }else
        {
          $(this).hide();
        }
        if ($("#filtrar").val()=="")
        {
          $(this).show();
        }
      })
    }else if ($("#select_busqueda").val()==null) {
      toastr.error('NO A SELECCIONADO TIPO DE BUSQUEDA','ADMIN WHATSAPP',{
        "positionClass": "toast-bottom-right",
        "closeButton": true,
        "extendedTimeOut": 1
      })
    }
  })
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
            nombre:$('#nombre_usuarionuevo').val().toUpperCase(),
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
            nombre:$('#nombre_usuarionuevo').val().toUpperCase(),
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
