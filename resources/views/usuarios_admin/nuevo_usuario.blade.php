<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_title" id="title">
            <h2 id="titulo">Nuevo número</h2>
            <div class="clearfix"></div>
  </div>
    <div class="x_panel">
        <div class="x_content">
            <br />
            <form data-parsley-validate class="form-horizontal form-label-left" style="margin:0 0 0 13%;">
            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label for="nombre">Nombres:</label>
              <input type="text" class="form-control has-feedback-left btn-form-nuevouser" id="nombre_usuarionuevo" placeholder="Nombres" style="margin-bottom: 20px;" name="nombre">
                    <span class="fa fa-id-card form-control-feedback left" aria-hidden="true" style="font-size:18px;"></span>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback ">
                    <label for="nombre">Numero:</label>
                    <input type="number" class="form-control has-feedback-left btn-form-nuevouser" id="numero_usuarionuevo" placeholder="Numero de Telefono">
                    <span class="fa fa-whatsapp form-control-feedback left" aria-hidden="true" style="font-size:18px;"></span>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback ">
                       <label for="nombre">Pais:</label>
                       <select id="select_pais" class="form-control has-feedback-left btn-form-nuevouser" >
                          <option selected disabled class="opcion-disable">Seleccione una pregunta</option>
                          @foreach ($paises_datos as $paises)
                            <option value="{{$paises['id']}}">{{$paises['nombre']}}</option>
                          @endforeach
                       </select>
                       <span class="" aria-hidden="true"></span>
               </div>
               <div class="form-group text-center">
                 <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3 boton-guardar">
                   <br />
                   <button type="button" class="btn btn-success btn-mas-form-user" id="nuevo_usuario" value="Añadir">Guardar usuario</button>
                 </div>
               </div>
            </form>
        </div>
    </div>
  </div>
</div>
