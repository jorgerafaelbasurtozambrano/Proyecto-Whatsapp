<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-wpforms"></i> Nuevo Formulario</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
        <div class="x_panel border-r">
            <form data-parsley-validate class="form-horizontal form-label-left"">
            <h2>Titulo:</h2>
            <div class="col-md-11 col-sm-11 col-xs-11 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="titulo_formulario" placeholder="Titulo del formulario">
                    <span class="fa fa-tag form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback text-center " >
                <button id="guardar_formulario" type="button" class="fa fa-plus btn-success btn-mas"></button>
            </div>

            <div class="clearfix"></div>
            <br>
            <h2>Preguntas:</h2>
            <div class="col-md-11 col-sm-11 col-xs-11 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="titulo_pregunta" placeholder="Pregunta">
                    <span class="fa fa-question form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback text-center " >
                <button id="nueva_pregunta" type="button" class="glyphicon glyphicon-plus btn-success btn-mas" ></button>
            </div>
            <div class="clearfix"></div>
            <br>

            <div class="clearfix"></div>
            <h2> Seleccione una Pregunta:</h2>
            <div class="col-md-11 col-sm-11 col-xs-11 form-group has-feedback">
                    <select id="select_pregruntas" class="form-control" >
                    <option value="" selected disabled class="opcion-disable">Seleccione una opción</option>
                    </select>
                    <span class="" aria-hidden="true"></span>
            </div>
        
            <div class="clearfix"></div>
            <br>
            <h2>Respuesta:</h2>
            <div class="col-md-11 col-sm-11 col-xs-11 form-group has-feedback">
                    <input type="number" class="col-md-1 col-sm-1 col-xs-1 form-control" id="puntuacion_preguntas" style="width:8%;margin-right:20px;padding:1%" placeholder="N°">
                    <input type="text" class="col-md-11 col-sm-11 col-xs-11 form-control" style="width:89.7%" id="descripcion_pregunta" placeholder="Respuesta">
                    
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 form-group has-feedback text-center " >
                <button id="nueva_respuesta" type="button" class="glyphicon glyphicon-plus btn-success btn-mas"></button>
            </div>
            <div class="clearfix"></div>
            <br>
        </div>


            <!--TABLA DE DATOS -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel border-r">
                  <div class="x_title">
                    <h2><i class="fa fa-list-ul"></i> Lista de Formularios </h2>
                    <ul class="nav navbar-right panel_toolbox c-refresh">
                      <li id="refresh" style="float:right;"><a><i class="fa fa-refresh" style="font-size:18px;"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="clearfix"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <select id="select_formulario" class="form-control" >
                      <option value="" selected disabled>Seleccione una opción</option>
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
            <!-------------------->
            </form>
        </div>
    </div>
  </div>
</div>