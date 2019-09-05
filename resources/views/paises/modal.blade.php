<input id="id_pais_" type="hidden" name="name" value="">

<div class="modal fade" id="actualizar_pais" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Pais</h4>
      </div>
      <div class="modal-body">
        <br>
        @include('paises.index')
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


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
