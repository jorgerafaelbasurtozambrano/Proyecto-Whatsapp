<style>
  th{
    border-right:4px solid #ffffff;
    text-align:center;
    text-transform: uppercase;
  }

  td{text-align:center;vertical-align:middle!important;border-right:4px solid #ffffff;}

  td:last-child{
    border:none;
  }

  button{
    border:none;
  }

  .btn-mas{background:#95B359!important;border:none}
  .btn-mred{border:none}
</style>
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-users"></i> Lista de usuarios </h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table id="tabla_usuarios" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Nombres </th>
                            <th class="column-title">Numero </th>
                            <th class="column-title">Chat ID </th>
                            <th class="column-title " colspan="2">Opciones </th>
                            </th>
                          </tr>
                        </thead>
                
                        <tbody>
                       @foreach($usuarios_obtenidos as $data)
                          <tr class="even pointer">
                           <?php 
                           $seleccion_nombre = $data['id'].'nombre';
                           $seleccion_numero = $data['id'].'numero';
                                     ?>                 
                           <td class=" " id=<?php echo $seleccion_nombre?> >{{$data['nombre']}}</td>
                            <td class=" " id=<?php echo $seleccion_numero?> >{{$data['numero_telefono']}}</td>
                            <td class=" " >{{$data['chatid']}}</td>
                            <td>
                                  <button  class="eliminar_usuario btn btn-danger btn-red" value="{{$data['id']}}"><i class="fa fa-trash"></i> Eliminar</button>
                                  <button class="actualizar_usuario btn btn-success btn-mas" value="{{$data['id']}}"><i class="fa fa-refresh"></i> Actualizar</button>
                            </td>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
							
              
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>