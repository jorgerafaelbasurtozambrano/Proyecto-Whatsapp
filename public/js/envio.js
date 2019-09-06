$(document).ready(function (){
  var imagen_codigo;
  $("#nombre_pais").keyup(function(event) {
    var texto=$(this).val();
    $("#abrev_pais").val(texto.substring(0,3));
  });

  $("#nuevo_pais").on('click',function() {
    if ($(this).val()=="AnadirPais") {
      if($("#dataImagen").val().toString()!="")
      {
        if ( $("#nombre_pais").val()!="" && $("#codigo_pais").val()!="" && $("#abrev_pais").val()!="") {
          $.ajaxSetup({
              headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            var formData={
                 nombre_pais:$('#nombre_pais').val().toUpperCase(),
                 codigo_pais:$('#codigo_pais').val(),
                 abreviatura:$('#abrev_pais').val().toUpperCase(),
                 imagen:$("#dataImagen").val().toString(),
               };

            $.ajax({
              type:'POST',
              url:'paises',
              data: formData,
              success: function(data) {
                  toastr.success('USUARIO GUARDADO CORRECTAMENTE','Whatsapp ADMIN',{
                      "positionClass": "toast-bottom-right",
                      "closeButton": true,
                      "extendedTimeOut": 1
                    })
                      $('#nombre_pais').val("");
                      $('#codigo_pais').val("");
                      $('#abrev_pais').val("");
              },
              error:function(data) {
                toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                  "positionClass": "toast-bottom-right",
                  "closeButton": true,
                  "extendedTimeOut": 1
                })
              }
            });
        } else {
          toastr.error('EXISTE ALGUN CAMPO VACIO','ADMIN WHATSAPP',{
            "positionClass": "toast-bottom-right",
            "closeButton": true,
            "extendedTimeOut": 1
          })
        }
      }else
      {
        toastr.error('NO A SELECCIONADO IMAGEN','ADMIN WHATSAPP',{
          "positionClass": "toast-bottom-right",
          "closeButton": true,
          "extendedTimeOut": 1
        })
      }
    }else if ($(this).val()=="UpdatePais") {
      if($("#dataImagen").val().toString()!="")
      {
        if($("#nombre_pais").val()!="" && $("#codigo_pais").val()!="" && $("#abrev_pais").val()!="") {
          $.ajaxSetup({
              headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            var formData={
                 idpais:$("#id_pais_").val(),
                 nombre_pais:$('#nombre_pais').val().toUpperCase(),
                 codigo_pais:$('#codigo_pais').val(),
                 abreviatura:$('#abrev_pais').val().toUpperCase(),
                 imagen:$("#dataImagen").val().toString(),
               };

            $.ajax({
              type:'PUT',
              url:'paises/'+$("#id_pais_").val(),
              data: formData,
              success: function(data) {
                  $("#listaPaises"+" #"+data.id+"nombre").text(data.nombre);
                  $("#listaPaises"+" #"+data.id+"abreviatura").text(data.abreviatura);
                  $("#listaPaises"+" #"+data.id+"codigo").text(data.codigo);
                  $("#listaPaises"+" #"+data.id+"imagen").attr('src',data.imagen);
                  toastr.success('USUARIO GUARDADO CORRECTAMENTE','Whatsapp ADMIN',{
                      "positionClass": "toast-bottom-right",
                      "closeButton": true,
                      "extendedTimeOut": 1
                    })
                      $('#nombre_pais').val("");
                      $('#codigo_pais').val("");
                      $('#abrev_pais').val("");
              },
              error:function(data) {
                toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                  "positionClass": "toast-bottom-right",
                  "closeButton": true,
                  "extendedTimeOut": 1
                })
              }
            });
        } else {
          toastr.error('EXISTE ALGUN CAMPO VACIO','ADMIN WHATSAPP',{
            "positionClass": "toast-bottom-right",
            "closeButton": true,
            "extendedTimeOut": 1
          })
        }
      }else
      {
        toastr.error('NO A SELECCIONADO IMAGEN','ADMIN WHATSAPP',{
          "positionClass": "toast-bottom-right",
          "closeButton": true,
          "extendedTimeOut": 1
        })
      }
    }
  })

  var contenidofila;
  var coincidencia;
  var exp;
  $("#filtrar_paises").keyup(function() {
    if($("#select_busqueda_paises").val()=="nombre")
    {
      $("#listaPaises tbody tr").each(function() {
        $(this).show();
        contenidofila=$(this).find('td:eq(0)').html();
        exp=new RegExp($("#filtrar_paises").val(),'gi');
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
    }else if($("#select_busqueda_paises").val()=="numero"){
      $("#listaPaises tbody tr").each(function() {
        $(this).show();
        contenidofila=$(this).find('td:eq(2)').html();
        exp=new RegExp($("#filtrar_paises").val(),'gi');
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



})
