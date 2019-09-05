<div class="x_title x_title_fix">
    <h2>Lista de Paises </h2>
    <div class="clearfix"></div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="clearfix"></div>
                  <h4 class="h-fix">Buscar:</h4>
                  <div class="col-md-4 col-sm-4 col-xs-4 form-group has-feedback">
                    <select id="select_busqueda_paises" class="form-control" >
                      <option value="default" selected disabled class="opcion-disable">Seleccione una opción</option>
                      <option value="nombre">Nombres</option>
                      <option value="numero">Codigo</option>
                    </select>
                    <span class="" aria-hidden="true"></span>
                  </div>


                  <div class="col-md-8 col-sm8 col-xs-8 form-group top_search">
                  			<input  id="filtrar_paises" type="text" class="form-control" placeholder="Buscar">
                  </div>
                  <div class="clearfix"></div>
                  <hr style="border-width:2px;">
                    <h4 class="h-fix"> Usuarios Disponibles</h4>

                  <div class="x_content">
                      <div class="table-responsive">
                      <table id="listaPaises" class="table table-striped jambo_table">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Nombres </th>
                            <th class="column-title">ABREVIATURA </th>
                            <th class="column-title">Codigo </th>
                            <th class="column-title ">Logo </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($paises_datos as $data)
                            <tr class="even pointer" >
                               <td>{{$data['nombre']}}</td>
                               <td>{{$data['abreviatura']}}</td>
                               <td>{{$data['codigo']}}</td>
                               <td class="fix-table">
                                     <div class=" fix-image-table" > 
                                       <img src="{{$data['imagen']}}" alt="image" />
                                </div>
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
