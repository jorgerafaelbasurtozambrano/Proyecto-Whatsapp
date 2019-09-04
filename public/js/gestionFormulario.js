$(document).ready(function (){
    $("#nueva_pregunta").on("click",function() {
        if ($("#titulo_pregunta").val()=="") {
            toastr.error('ERROR CAMPO VACIO','ADMIN WHATSAPP',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
        } else {
            guardar_pregunta();
        }
    })
    $("#guardar_formulario").on("click",function()
    {
        if ($("#titulo_formulario").val()=="") {
            toastr.error('ERROR CAMPO VACIO','ADMIN WHATSAPP',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
        } else {
            $(this).attr("disabled",true);
            $("#titulo_formulario").attr("disabled",true);
            guadar_formulario();
            actualizarselect();
        }
    })
    var $id_formulario_nuevo;
    function guadar_formulario() {
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();
        var fecha = d.getFullYear() + '/' +
        (month<10 ? '0' : '') + month + '/' +
        (day<10 ? '0' : '') + day;
        $.ajaxSetup({
            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          var formData={
            nombre_formulario:$('#titulo_formulario').val(),
            fecha_actual:fecha,
          };
          $.ajax({
            type:'POST',
            url:'formularios',
            data: formData,
            success: function(data) {
                id_formulario_nuevo=data.id;
                toastr.success('TITULO GUARDADO CORRECTAMENTE','Whatsapp ADMIN',{
                    "positionClass": "toast-bottom-right",
                    "closeButton": true,
                    "extendedTimeOut": 1
                  })
            },
            error:function(data) {
              toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
            }
          });
    }
    function guardar_pregunta()
    {
        $.ajaxSetup({
            headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          var formData={
            nombre_pregunta:$('#titulo_pregunta').val(),
            id_formulario:id_formulario_nuevo,
          };
          $.ajax({
            type:'POST',
            url:'preguntas',
            data: formData,
            success: function(data) {
                toastr.success('PREGUNTA GUARDADA CORRECTAMENTE','Whatsapp ADMIN',{
                    "positionClass": "toast-bottom-right",
                    "closeButton": true,
                    "extendedTimeOut": 1
                  })

                var sel="";
                sel+="<option value="+data.id+">"+$("#titulo_pregunta").val()+"</option>";
                $("#select_pregruntas").append(sel);
                $("#titulo_pregunta").val("");
            },
            error:function(data) {
              toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
            }
          });
    }

    $("#nueva_respuesta").on("click",function(){
        if($('#select_pregruntas').val()!=null && $('#puntuacion_preguntas').val()!="" && $('#descripcion_pregunta').val()!=""){
              $.ajaxSetup({
                headers:{
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              var formData={
                id_pregunta:$('#select_pregruntas').val(),
                puntuacion:$('#puntuacion_preguntas').val(),
                pregunta_descripcion:$('#descripcion_pregunta').val(),
              };
              $.ajax({
                type:'POST',
                url:'respuestas',
                data: formData,
                success: function(data) {
                    toastr.success('RESPUESTA GUARDADA CORRECTAMENTE','Whatsapp ADMIN',{
                        "positionClass": "toast-bottom-right",
                        "closeButton": true,
                        "extendedTimeOut": 1
                      })
                    var sel="";
                    sel+="<option value="+data.id+">"+$("#titulo_pregunta").val()+"</option>";
                    $("#select_pregruntas").append(sel);
                    $("#tabla_preguntas").append(tr);
                    $("#titulo_pregunta").val("");
                    $("#puntuacion_preguntas").val("");
                    $("#descripcion_pregunta").val("");
                },
                error:function(data) {
                  toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                    "positionClass": "toast-bottom-right",
                    "closeButton": true,
                    "extendedTimeOut": 1
                  })
                }
              });
        }else{
            toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
        }

    })
    $("#select_formulario").on('change',function(){
        $("#tabla_preguntas > tbody").html("");
        refrescar($(this).val());
    })
    $("#refresh").on('click',function(){
        $("#tabla_preguntas > tbody").html("");
        refrescar($("#select_formulario").val());
    })
    function actualizarselect()
    {
        $("#select_formulario").empty();
        $("#select_formulario").append("<option selected disabled>Seleccione una opción</option>");
        $.get('/obtenerFormularios',function(data) {
            $.each(data,function(i,item) {
                console.log(item);
                $("#select_formulario").append("<option value="+item.id+">"+item.descripcion+"</option>");
            })
        })
    }
    function refrescar($id)
    {
        $.get('/obtenerPreguntas/'+$id,function(data) {
            $.each(data,function(i,item) {
                console.log(item.get_respuestas.length)
                var tr="";
                tr+="<tr>";
                tr+="<td  rowspan="+(item.get_respuestas.length+1)+">"+item.descripcion+"</td>";
                tr+="<td rowspan="+(item.get_respuestas.length+1)+"> <button value="+item.id+" type='button' class='btn-success add-respuesta' style='border-radius:3px;padding:10px;font-size:14px;border:none;'><i class='fa fa-plus'></i> Respuesta</button></td>";
                tr+="</tr>";
                $("#tabla_preguntas").append(tr);
                $.each(item.get_respuestas,function(i,item1) {
                    var tr1="";
                    tr1+="<tr>";
                    tr1+="<td class= 'td-fix'>"+item1.puntuacion+". "+item1.descripcion+"</td>";
                    tr1+="</tr>";
                    $("#tabla_preguntas").append(tr1);
                })
                
            })
        })
    }

    var id_nuevo_pregunta;
    $('body').on('click','.add-respuesta',function(){
        id_nuevo_pregunta=$(this).val();
        $('#actualizar_modalFormulario').modal('show');
    })

    $("#nueva_respuesta_ac").on("click",function(){
        if($('#puntuacion_preguntas_ac').val()!="" && $('#descripcion_pregunta_ac').val()!=""){
              $.ajaxSetup({
                headers:{
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              var formData={
                id_pregunta:id_nuevo_pregunta,
                puntuacion:$('#puntuacion_preguntas_ac').val(),
                pregunta_descripcion:$('#descripcion_pregunta_ac').val(),
              };
              $.ajax({
                type:'POST',
                url:'respuestas',
                data: formData,
                success: function(data) {
                    toastr.success('RESPUESTA GUARDADA CORRECTAMENTE','Whatsapp ADMIN',{
                        "positionClass": "toast-bottom-right",
                        "closeButton": true,
                        "extendedTimeOut": 1
                      })
                    $("#tabla_preguntas > tbody").html("");
                    refrescar($("#select_formulario").val());
                    $("#puntuacion_preguntas_ac").val("");
                    $("#descripcion_pregunta_ac").val("");
                    
                },
                error:function(data) {
                  toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                    "positionClass": "toast-bottom-right",
                    "closeButton": true,
                    "extendedTimeOut": 1
                  })
                }
              });
        }else{
            toastr.error('ERROR AL REALIZAR LA PETICION','Whatsapp ADMIN',{
                "positionClass": "toast-bottom-right",
                "closeButton": true,
                "extendedTimeOut": 1
              })
        }

    })



})