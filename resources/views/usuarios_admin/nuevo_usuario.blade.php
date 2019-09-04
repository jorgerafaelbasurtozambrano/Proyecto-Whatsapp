<style>

body .container.body .right_col{
  background-color:#ffffff;
}


.x_panel{
  border-radius:5px;
  background-color:#F7F7F7;
}

.nav.child_menu>li>a{
  font-size:14px;
}

a{
  font-size:16px;
}

.c-refresh>li>a:hover{
  background-color:transparent;
}

</style>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-user"></i> Nuevo Usuario</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form data-parsley-validate class="form-horizontal form-label-left">
            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="nombre_usuarionuevo" placeholder="Nombres">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="numero_usuarionuevo" placeholder="Numero de Telefono">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      
                      <div class="form-group text-center">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3 " style="margin:0 auto;">
                            <br />
                          <button type="button" class="btn btn-success btn-mas-form-user" id="nuevo_usuario" value="Añadir"><i class="fa fa-save"></i> Guardar Usuario</button>
                        </div>
                      </div>
            </form>
        </div>
    </div>
  </div>
</div>