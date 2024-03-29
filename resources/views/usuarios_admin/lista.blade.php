<div class="x_title x_title_fix">
    <h2>Lista de numeros </h2>
    <div class="clearfix"></div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="clearfix"></div>
                  <h4 class="h-fix">Buscar:</h4>
                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                    <select id="select_busqueda" class="form-control" >
                      <option value="default" selected disabled class="opcion-disable">Seleccione una opción</option>
                      <option value="nombre">Nombres</option>
                      <option value="numero">Numero</option>
                    </select>
                    <span class="" aria-hidden="true"></span>
                  </div>


                  <div class="col-md-8 col-sm8 col-xs-8 form-group top_search">
                  			<input  id="filtrar" type="text" class="form-control" placeholder="Buscar">
                  </div>
                  <div class="clearfix"></div>
                  <hr style="border-width:2px;margin:2.4em 0;">
                    <h4 class="h-fix"> Numeros disponibles</h4>

                  <div class="x_content">
                      <div class="table-responsive">
                      <table  id="tabla_usuarios" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat estatico">
                            </th>
                            <th class="column-title">Nombres </th>
                            <th class="column-title">Numero </th>
                            <th class="column-title">Chat ID </th>
                            <th class="column-title">Pais </th>
                            <th class="column-title ">Opciones </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" ><span class="action-cnt"> </span> </a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($usuarios_obtenidos as $data)
                            <tr class="even pointer" >
                              <td class="a-center">
                                <input type="checkbox" class="flat" name="table_records" value="{{$data['id']}}">
                              </td>
                               <?php
                                 $seleccion_nombre = $data['id'].'nombre';
                                 $seleccion_numero = $data['id'].'numero';
                                 $seleccion_pais = $data['id'].'pais';
                               ?>
                               <td class=" " id=<?php echo $seleccion_nombre?> >{{$data['nombre']}}</td>
                               <td class=" " id=<?php echo $seleccion_numero?> >{{$data['numero_telefono']}}</td>
                               <td>{{$data['chatid']}}</td>
                               @foreach($data->getPais as $value)
                                <td id=<?php echo $seleccion_pais?> >
                                      {{$value['nombre']}}
                                </td>
                               @endforeach

                               <td>
                                     <button  class="eliminar_usuario btn btn-danger btn-red" value="{{$data['id']}}"><i class="fa fa-trash"></i> Eliminar</button>
                                     <button class="actualizar_usuario btn btn-success btn-mas" value="{{$data['id']}}"><i class="fa fa-pencil-square-o"></i>   Editar</button>
                               </td>
                               </td>
                             </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" style="text-align:center;">
                      <button class="enviar btn btn-success btn-lista">Seleccione una encuesta</button>
                      <span class="" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" style="text-align:center;">
                      <button id="recibir" class="btn btn-success btn-lista">envio</button>
                      <span class="" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" style="text-align:center;">
                      <button id="llegada" class="btn btn-success btn-lista">recibir</button>
                      <span class="" aria-hidden="true"></span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
