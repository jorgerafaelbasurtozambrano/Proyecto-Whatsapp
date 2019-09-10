$(document).ready(function (){
  var contenidofila;
  var coincidencia;
  var exp;

  $('body').on('click','.enviar',function(){
      recorrerTabla();
      llenarSelect();
      $('#modal_envio').modal('show');
  })
  $('body').on('click','.flat',function(){
      alert('hola');
  })

  function enviar_mensaje(numero_destino,mensaje) {
    var url = 'https://eu64.chat-api.com/instance64580/sendMessage?token=8ozup0arq3ujhzj6';
    var data_envio = {
      phone:numero_destino,
      body:mensaje,
    };
    // Send a request
    $.ajax(url, {
      data : JSON.stringify(data_envio),
      contentType : 'application/json',
      type : 'POST'
    });
  }
  $("#llegada").on('click',function(parameter) {
    recibir_mensajes();
  })
  function recibir_mensajes() {
    var url = 'https://api.chat-api.com/instance64580/messages?token=8ozup0arq3ujhzj6&lastMessageNumber=2&chatId=593982284179%40c.us';
    $.get(url, function (data) { // Make a GET request
      var ultimo_mensaje=data.messages.length;
      var senderNames=data.messages[ultimo_mensaje-1].senderName;
      var senderAutor=data.messages[ultimo_mensaje-1].author;
      var contenido=data.messages[ultimo_mensaje-1].body;
      senderAutor=senderAutor.replace("@c.us","");
      $.get('/getActivos',function(data_Usuarios_Activos) {
        $.each(data_Usuarios_Activos,function(index, itemActivos) {
            //busca datos de la persona para ver si esta garantiza a enviar mensajes
            $.get('/getPersona/'+itemActivos.idUsuario,function(data_persona) {
              $.each(data_persona,function(index1,datos_personales) {
                var numero_telefono_Concatenado=datos_personales.get_pais[0].codigo+datos_personales.numero_telefono;
                if(numero_telefono_Concatenado==senderAutor)
                {
                  //cuerpo de codigo donde va para realizar el proceso de la respuesta
                  alert("Usted esta Habilitado")
                }
              });
            })
        });
      })
    });
  }

  $("#recibir").on('click',function() {
    enviar_mensajes();
  })


  function enviar_mensajes() {
    $.get('/getActivos',function(data){
      $.each(data,function(i,item){
          $.get('/preguntaEnviadas/'+item.id,function(data1) {
              //condicion para saber cuando a una persona se le a enviado una encuesta
              //pero no se le a enviado ni una pregunta
              if (data1.length==0) {
                  $.get('/obtenerPreguntas/'+item.idFormulario,function(data2) {
                    var respuesta=""
                    var cadena_de_envio="Pregunta: "+data2[0].descripcion+"\n";
                    $.each(data2[0],function(i2,item2) {
                        respuesta="";
                        $.each(data2[0].get_respuestas,function(i3,item3) {
                          respuesta+="  "+item3.puntuacion+"->"+item3.descripcion+"\n";
                        });
                    });
                    var datoUsuarioEnviar="";
                    var numero_telefonoUsuario="";
                    $.get('/getPersona/'+item.idUsuario,function(data_usuario) {
                      $.each(data_usuario,function(iUsuario,itemUsuario) {
                        datoUsuarioEnviar+="Datos Personales \n";
                        datoUsuarioEnviar+="  Nombre =>"+itemUsuario.nombre+"\n";
                        datoUsuarioEnviar+="  Pais =>"+data_usuario[0].get_pais[0].nombre+"\n";
                        datoUsuarioEnviar+="  Telefono =>"+data_usuario[0].get_pais[0].codigo+itemUsuario.numero_telefono+"\n";
                        numero_telefonoUsuario=data_usuario[0].get_pais[0].codigo+itemUsuario.numero_telefono;
                      });
                      //guardar pregunta que se le envia a la persona
                      $.ajaxSetup({
                        headers:{
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                      });
                      var formData={
                        idPregunta:data2[0].id,
                        id_usuario:item.idUsuario,
                        respondida:0,
                        id_encuesta_enviada:item.id,
                      };
                      $.ajax({
                        type:'POST',
                        url:'preguntaenviada',
                        data: formData,
                        success: function(data_final) {
                          //console.log(datoUsuarioEnviar+"\n"+cadena_de_envio+respuesta);
                          var texto=cadena_de_envio+respuesta;
                          //console.log(texto);
                          //console.log(numero_telefonoUsuario);
                          enviar_mensaje(numero_telefonoUsuario,texto)
                          toastr.success('ENVIANDO ENCUESTA','Whatsapp ADMIN',{
                            "positionClass": "toast-bottom-right",
                            "closeButton": true,
                            "extendedTimeOut": 1
                          })
                        },
                        error:function(data_final) {
                          toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                            "positionClass": "toast-bottom-right",
                            "closeButton": true,
                            "extendedTimeOut": 1
                          })
                        }
                      })
                      //finaliza
                    })
                  })
              }else
              {
                alert('ya se a enviado alguna pregunta a '+item.idUsuario)
                $.each(data1,function(iPreguntasEnviadas,itemPreguntasEnviadas) {
                  console.log(itemPreguntasEnviadas);
                });
              }


          })
      })
    })
  }


  $('#star_mensajes').on('click',function() {
    var cantidad=$("#lista_usuarios").children().length;
    for(let i=0;i<cantidad;i++)
    {
       var dato=$("#lista_usuarios").children()[i];
       var id_usuario=dato.value;
       $.get('/getPersona/'+id_usuario,function(data1) {
         $.get('/getPersonaEnviada/'+data1[0].id,function(data) {
           if (data.length==0) {
             $.ajaxSetup({
               headers:{
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
             });
             var d = new Date();
             var month = d.getMonth()+1;
             var day = d.getDate();
             var output = d.getFullYear() + '/' +
             (month<10 ? '0' : '') + month + '/' +
             (day<10 ? '0' : '') + day;
             var formData={
               fecha_inicio:output,
               id_usuario:data1[0].id,
               id_Formulario:$("#encuesta_enviar").val(),
               activa:1,
             };
             $.ajax({
               type:'POST',
               url:'encuestaenviada',
               data: formData,
               success: function(data_final) {
                 var concatenacion=data1[0].get_pais[0].codigo+data1[0].numero_telefono;
                 var mensaje_text="Hola *"+data1[0].nombre+ "* es un gusto puedes contestar la siguiente encuesta";
                 enviar_mensaje(concatenacion,mensaje_text)
                 toastr.success('ENVIANDO ENCUESTA','Whatsapp ADMIN',{
                   "positionClass": "toast-bottom-right",
                   "closeButton": true,
                   "extendedTimeOut": 1
                 })
               },
               error:function(data_final) {
                 toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                   "positionClass": "toast-bottom-right",
                   "closeButton": true,
                   "extendedTimeOut": 1
                 })
               }
             })
           }else
           {
             var encontrado=false;
             $.each(data,function(i,item) {
               if(item.activa==1)
               {
                 alert("a "+data1[0].nombre+" ya se le envio la encuesta");
                 encontrado=true;
               }
             })
             if(encontrado==false)
             {
               var concatenacion=data1[0].get_pais[0].codigo+data1[0].numero_telefono;
               var mensaje_text="Hola *"+data1[0].nombre+ "* es un gusto puedes contestar la siguiente encuesta";
               enviar_mensaje(concatenacion,mensaje_text)
             }
           }



         })
      })
    }
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
    console.log("sd");
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
        $('#title').hide();
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
    if ($('#nombre_usuarionuevo').val()!="" && $('#numero_usuarionuevo').val()!="" && $("#select_pais").val()!=null) {
      if($('#nuevo_usuario').val()=='Añadir'){
          $.ajaxSetup({
              headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            var formData={
              nombre:$('#nombre_usuarionuevo').val().toUpperCase(),
              telefono:$('#numero_usuarionuevo').val(),
              idpais:$("#select_pais").val(),
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
              idpais:$("#select_pais").val(),
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
                toastr.success('USUARIO GUARDADO CORRECTAMENTE','Whatsapp ADMIN',{
                    "positionClass": "toast-bottom-right",
                    "closeButton": true,
                    "extendedTimeOut": 1
                  })
              },
              error:function(data) {
                console.log(data);
              }

            })
            $.get('/getpais/'+$("#select_pais").val(),function(data) {
                $.each(data,function(i,item) {
                  $("#tabla_usuarios"+" #"+id_usuario+"pais").text(item.nombre);
                })
            })

            $("#tabla_usuarios"+" #"+id_usuario+"nombre").text($("#nombre_usuarionuevo").val());
            $("#tabla_usuarios"+" #"+id_usuario+"numero").text($("#numero_usuarionuevo").val());
            $('#actualizar_modal').modal('hide');
      }
    }else
    {
      toastr.error('FALTA ALGUN DATO','Whatsapp ADMIN',{
        "positionClass": "toast-bottom-right",
        "closeButton": true,
        "extendedTimeOut": 1
      })
    }
  })

})
