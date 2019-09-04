<style>
  input
  {
    text-transform: uppercase;
  }
</style>
<div class="modal fade mensaje" id="modal_envio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Envio de Cuestionario</h4>
      </div>
      <div class="modal-body">
        <br>


        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-user"></i>LISTA DE USUARIO</h2><h5 id="numeroCliente"></h5>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id=lista_usuarios class="select2_multiple form-control" multiple="multiple">
                          </select>
                        </div>
                      </div>

                      <div class="clearfix"></div>
                      <h2> Seleccione una Encuesta:</h2>
                      <div class="col-md-11 col-sm-11 col-xs-11 form-group has-feedback">
                              <select id="encuesta_enviar" class="form-control" >
                              <option value="" selected disabled class="opcion-disable">Seleccione una encuesta</option>
                              </select>
                              <span class="" aria-hidden="true"></span>
                      </div>
                      <button id="star_mensajes" data-toggle="tooltip" title="Enviar Mensajes!" class="actualizar_usuario btn btn-success btn-mas"><i class="fa fa-send-o"></i></button>

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
