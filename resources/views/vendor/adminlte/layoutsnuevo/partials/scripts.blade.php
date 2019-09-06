<!-- jQuery -->
<script src='{{asset("/css/jquery/dist/jquery.min.js")}}'></script>
<!-- Bootstrap -->
<script src='{{asset("/css/bootstrap/dist/js/bootstrap.min.js")}}'></script>
<!-- FastClick -->
<script src='{{asset("/css/fastclick/lib/fastclick.js")}}'></script>
<!-- Dropzone.js -->
<script src='{{asset("/css/dropzone/dist/min/dropzone.min.js")}}'></script>
<!-- NProgress -->
<script src='{{asset("/css/nprogress/nprogress.js")}}'></script>
<!-- bootstrap-progressbar -->
<script src='{{asset("/css/bootstrap-progressbar/bootstrap-progressbar.min.js")}}'></script>
<!-- iCheck -->
<script src='{{asset("/css/iCheck/icheck.min.js")}}'></script>
<!-- Chart.js -->
<script src='{{asset("/css/Chart.js/dist/Chart.min.js")}}'></script>
<!-- jQuery Sparklines -->
<script src='{{asset("/css/jquery-sparkline/dist/jquery.sparkline.min.js")}}'></script>
<!-- Flot -->
<script src='{{asset("/css/Flot/jquery.flot.js")}}'></script>
<script src='{{asset("/css/Flot/jquery.flot.pie.js")}}'></script>
<script src='{{asset("/css/Flot/jquery.flot.time.js")}}'></script>
<script src='{{asset("/css/Flot/jquery.flot.stack.js")}}'></script>
<script src='{{asset("/css/Flot/jquery.flot.resize.js")}}'></script>
<!-- Flot plugins -->
<script src='{{asset("/css/flot.orderbars/js/jquery.flot.orderBars.js")}}'></script>
<script src='{{asset("/css/flot-spline/js/jquery.flot.spline.min.js")}}'></script>
<script src='{{asset("/css/flot.curvedlines/curvedLines.js")}}'></script>
<!-- DateJS -->
<script src='{{asset("/css/DateJS/build/date.js")}}'></script>
<!-- bootstrap-daterangepicker -->
<script src='{{asset("/css/moment/min/moment.min.js")}}'></script>
<script src='{{asset("/css/bootstrap-daterangepicker/daterangepicker.js")}}'></script>

<!-- Custom Theme Scripts -->
<script src='{{asset("/css/build/js/custom.min.js")}}'></script>

<!-- bootstrap-wysiwyg -->
<script src='{{asset("/css/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js")}}'></script>
<script src='{{asset("/css/jquery.hotkeys/jquery.hotkeys.js")}}'></script>
<script src='{{asset("/css/google-code-prettify/src/prettify.js")}}'></script>
<!-- jQuery Tags Input -->
<script src='{{asset("/css/jquery.tagsinput/src/jquery.tagsinput.js")}}'></script>
<!-- Switchery -->
<script src='{{asset("/css/switchery/dist/switchery.min.js")}}'></script>
<!-- Select2 -->
<script src='{{asset("/css/select2/dist/js/select2.full.min.js")}}'></script>
<!-- Parsley -->
<script src='{{asset("/css/parsleyjs/dist/parsley.min.js")}}'></script>
<!-- Autosize -->
<script src='{{asset("/css/autosize/dist/autosize.min.js")}}'></script>
<!-- jQuery autocomplete -->
<script src='{{asset("/css/devbridge-autocomplete/dist/jquery.autocomplete.min.js")}}'></script>
<!-- starrr -->
<script src='{{asset("/css/starrr/dist/starrr.js")}}'></script>
<!-- Datatables -->
<script src='{{asset("/css/datatables.net/js/jquery.dataTables.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-bs/js/dataTables.bootstrap.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-buttons/js/dataTables.buttons.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-buttons-bs/js/buttons.bootstrap.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-buttons/js/buttons.flash.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-buttons/js/buttons.html5.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-buttons/js/buttons.print.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-keytable/js/dataTables.keyTable.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-responsive/js/dataTables.responsive.min.js")}}'></script>
<script src='{{asset("/css/datatables.net-responsive-bs/js/responsive.bootstrap.js")}}'></script>
<script src='{{asset("/css/datatables.net-scroller/js/dataTables.scroller.min.js")}}'></script>
<script src='{{asset("/css/jszip/dist/jszip.min.js")}}'></script>
<script src='{{asset("/css/pdfmake/build/pdfmake.min.js")}}'></script>
<script src='{{asset("/css/pdfmake/build/vfs_fonts.js")}}'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('js/envio.js')}}"></script>
<script src="{{asset('js/data_usuarios.js')}}"></script>
<script src="{{asset('js/gestionFormulario.js')}}"></script>
<script src="{{asset('js/paises.js')}}"></script>
<script src="{{asset('js/edicion.js')}}"></script>
<script>
    //document.oncontextmenu = function(){return false;}
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>