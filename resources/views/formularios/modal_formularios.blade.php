<style>
  input
  {
    text-transform: uppercase;
  }
</style>
<div class="modal fade" id="actualizar_modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Respuesta</h4>
      </div>
      <div class="modal-body">
      <div class="x_panel" style="margin:2.4em 0;padding: 3.4em 2.4em 2.4em 2.4em;">
      <div class="col-md-9 col-sm-9 col-xs-9 form-group has-feedback">
                    <input type="number" pattern="^[0-9]" min="1" step="1" class="col-md-1 col-sm-1 col-xs-1 form-control" id="puntuacion_preguntas_ac" style="width:8%;margin-right:20px;padding:1%;" placeholder="N°">
                    <input type="text" class="col-md-11 col-sm-11 col-xs-11 form-control" style="width:88.5%" id="descripcion_pregunta_ac" placeholder="Respuesta">

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 form-group has-feedback text-left " >
                <button id="nueva_respuesta_ac" type="button" class="btn-success btn-mas fix-button" ><i class="fa fa-plus"></i> Add Respuesta</button>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
  </div>
</div>
