</style>
<div class="modal fade mensaje" id="modal_envio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Encuestas</h4>
      </div>
      <div class="modal-body">
        <br>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title" style="vertical-align:middle">
                    <h2 class="h-fix"></i>Lista de usuarios:</h2>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3 action-cnt span-select" id="numeroCliente">Select Multiple</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <select id=lista_usuarios class="select2_multiple form-control" multiple="multiple">
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <hr style="border-width:2px;margin:38px 0;">
                        <h2 class="h-fix"> Seleccione una encuesta:</h2>
                              <select id="encuesta_enviar" class="form-control" >
                              <option value="" selected disabled class="opcion-disable">Seleccione una encuesta</option>
                              </select>
                              <span class="" aria-hidden="true"></span>
                        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center">
                              <button id="star_mensajes" data-toggle="tooltip" title="Enviar Encuesta!" class="btn btn-success btn-mas"><i class="fa fa-send-o"></i> Enviar Encuesta</button>
                        </div>
                      </div>
                </div>
            </div>
          </div>
        </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>
