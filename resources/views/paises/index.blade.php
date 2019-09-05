<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
  <div id="title_pais" class="x_title">
            <h2 id="titulo">Nuevo Pais</h2>
            <div class="clearfix"></div>
  </div>
    <div class="x_panel">
        <div class="x_content">
            <br />
            <form data-parsley-validate class="form-horizontal form-label-left" style="margin:0 0 0 13%;">
            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <label for="nombre">Nombre de pais:</label>
              <input type="text" class="form-control has-feedback-left btn-form-nuevouser" id="nombre_pais" placeholder="Nombres" style="margin-bottom: 20px;" name="nombre">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="clearfix"></div>
            <br>
            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input type="text" class="col-md-3 col-sm-3 col-xs-3 form-control" id="codigo_pais" style="width:8%;margin-right:20px;padding:1%" placeholder="CODIGO">
                    <input type="text" class="col-md-9 col-sm-9 col-xs-9 form-control" style="width:70%" id="abrev_pais" placeholder="ABREVIATURA">
            </div>

            <div class="btn-group col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
              <input accept="image/jpeg,image/jpg,image/ico,.svg" id="imagen" type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
            </div>

            <div class="col-md-55">
                <div class="image view view-first" style="background-repeat:no-repeat;background-size:cover;" >
                  <img id="imagen_pais" width="100%" height="100%" src="img/Logo.jpg" alt="image" />
                </div>
            </div>
          </div>
        </div>


          </div>
        </div>

                      <div class="form-group text-center">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3 boton-guardar">
                            <br />
                          <button type="button" class="btn btn-success btn-mas-form-user" id="nuevo_pais" value="AnadirPais">Guardar Pais</button>
                        </div>
                      </div>
            </form>
        </div>
    </div>
  </div>
</div>
<input id="dataImagen" type="hidden" name="name" value="">

<script>
  document.getElementById("imagen").onchange=function() {
    var reader = new FileReader();
    reader.readAsDataURL(event.srcElement.files[0]);
    var me = this;
    reader.onload = function () {
      var fileContent = reader.result;
      $("#imagen_pais").attr('src',fileContent);
      $("#dataImagen").val(fileContent);
    }
  }
</script>
