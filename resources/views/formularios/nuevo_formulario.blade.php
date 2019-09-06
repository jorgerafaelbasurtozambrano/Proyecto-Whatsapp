<div class="x_title x_title_fix">
            <h2> Nuevo Formulario</h2>
            <div class="clearfix"></div>
        </div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_content">
            <br />
        <div class="x_panel" style="border:none;">
            <form data-parsley-validate class="form-horizontal form-label-left">
            <h2 class="h-fix fix-space">Titulo de la encuesta:</h2>
            <div class="col-md-10 col-sm-10 col-xs-10 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="titulo_formulario" placeholder="Titulo del formulario">
                    <span class="fa fa-font form-control-feedback left font-input" aria-hidden="true"></span>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback text-left " >
                <button id="guardar_formulario" type="button" class="btn-success btn-mas fix-button"><i class="fa fa-pencil"></i> <span> Insertar titulo</span></button>
            </div>

            <div class="clearfix"></div>
            <br>
            <h2 class="h-fix fix-space">Pregunta:</h2>
            <div class="col-md-10 col-sm-10 col-xs-10 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="titulo_pregunta" placeholder="Pregunta">
                    <span class="fa fa-question-circle form-control-feedback left font-input" aria-hidden="true"></span>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback text-left ">
                <button id="nueva_pregunta" type="button" class=" btn-success btn-mas fix-button"><i class="fa fa-plus"></i><span> Add Pregunta</span></button>
            </div>
            <div class="clearfix"></div>
            <br>

            <hr style="border-width:2px;margin:4.4em 0;">
            <h2 class="h-fix fix-space"> Preguntas:</h2>
            <div class="col-md-10 col-sm-10 col-xs-10 form-group has-feedback">
                    <select id="select_pregruntas" class="form-control" >
                    <option value="" selected disabled class="opcion-disable">Seleccione una pregunta</option>
                    </select>
                    <span class="" aria-hidden="true"></span>
            </div>

            <div class="clearfix"></div>
            <br>
            <h2 class="h-fix fix-space">Respuesta:</h2>
            <div class="col-md-10 col-sm-10 col-xs-10 form-group has-feedback">
                    <input type="number" pattern="^[0-9]" min="1" step="1" class="col-md-1 col-sm-1 col-xs-1 form-control" id="puntuacion_preguntas" style="width:8%;margin-right:20px;padding:1%" placeholder="PT.">
                    <input type="text" class="col-md-9 col-sm-9 col-xs-9 form-control" style="width:89.5%" id="descripcion_pregunta" placeholder="Respuesta">

            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 form-group has-feedback text-left " >
                <button id="nueva_respuesta" type="button" class="btn-success btn-mas fix-button"><i class="fa fa-plus"></i><span> Add Respuesta</span></button>
            </div>
            <div class="clearfix"></div>
            <br>
        </div>


            <!--TABLA DE DATOS -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <hr style="border-width:2px;">
                <div class="x_panel" style="border:none;">
                  <div class="x_title">
                    <h2 class="h-fix">Lista de Formularios </h2>
                    <ul class="nav navbar-right panel_toolbox c-refresh">
                      <li id="refresh" style="float:right;"><a><i class="fa fa-refresh" style="font-size:18px;"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="clearfix"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <select id="select_formulario" class="form-control" >
                      <option value="" selected disabled>Seleccione una encuesta</option>
                        @foreach($formularios_obtenidos as $formulario)
                          <option value="{{$formulario['id']}}">{{$formulario['descripcion']}}</option>
                        @endforeach
                      </select>
                      <span class="" aria-hidden="true"></span>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table id="tabla_preguntas" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Pregunta</th>
                            <th class="column-title ">Opciones </th>
                            <th class="column-title">Respuestas </th>

                            </th>
                          </tr>
                        </thead>
                        <tbody id="body_preguntas">

                        </tbody>
                      </table>
                    </div>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </form>
        </div>
    </div>
  </div>
</div>
