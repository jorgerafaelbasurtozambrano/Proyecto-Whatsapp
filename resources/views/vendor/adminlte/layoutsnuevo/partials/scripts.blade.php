
<!-- jQuery -->
<script src="{{'/css/jquery/dist/jquery.min.js'}}"></script>
<!-- Bootstrap -->
<script src="{{'/css/bootstrap/dist/js/bootstrap.min.js'}}"></script>
<!-- FastClick -->
<script src="{{'/css/fastclick/lib/fastclick.js'}}"></script>
<!-- NProgress -->
<script src="{{'/css/nprogress/nprogress.js'}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{'/css/bootstrap-progressbar/bootstrap-progressbar.min.js'}}"></script>
<!-- iCheck -->
<script src="{{'/css/iCheck/icheck.min.js'}}"></script>
<!-- Chart.js -->
<script src="{{'/css/Chart.js/dist/Chart.min.js'}}"></script>
<!-- jQuery Sparklines -->
<script src="{{'/css/jquery-sparkline/dist/jquery.sparkline.min.js'}}"></script>
<!-- Flot -->
<script src="{{'/css/Flot/jquery.flot.js'}}"></script>
<script src="{{'/css/Flot/jquery.flot.pie.js'}}"></script>
<script src="{{'/css/Flot/jquery.flot.time.js'}}"></script>
<script src="{{'/css/Flot/jquery.flot.stack.js'}}"></script>
<script src="{{'/css/Flot/jquery.flot.resize.js'}}"></script>
<!-- Flot plugins -->
<script src="{{'/css/flot.orderbars/js/jquery.flot.orderBars.js'}}"></script>
<script src="{{'/css/flot-spline/js/jquery.flot.spline.min.js'}}"></script>
<script src="{{'/css/flot.curvedlines/curvedLines.js'}}"></script>
<!-- DateJS -->
<script src="{{'/css/DateJS/build/date.js'}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{'/css/moment/min/moment.min.js'}}"></script>
<script src="{{'/css/bootstrap-daterangepicker/daterangepicker.js'}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{'/css/build/js/custom.min.js'}}"></script>

<!-- bootstrap-wysiwyg -->
<script src="{{'/css/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js'}}"></script>
<script src="{{'/css/jquery.hotkeys/jquery.hotkeys.js'}}"></script>
<script src="{{'/css/google-code-prettify/src/prettify.js'}}"></script>
<!-- jQuery Tags Input -->
<script src="{{'/css/jquery.tagsinput/src/jquery.tagsinput.js'}}"></script>
<!-- Switchery -->
<script src="{{'/css/switchery/dist/switchery.min.js'}}"></script>
<!-- Select2 -->
<script src="{{'/css/select2/dist/js/select2.full.min.js'}}"></script>
<!-- Parsley -->
<script src="{{'/css/parsleyjs/dist/parsley.min.js'}}"></script>
<!-- Autosize -->
<script src="{{'/css/autosize/dist/autosize.min.js'}}"></script>
<!-- jQuery autocomplete -->
<script src="{{'/css/devbridge-autocomplete/dist/jquery.autocomplete.min.js'}}"></script>
<!-- starrr -->
<script src="{{'/css/starrr/dist/starrr.js'}}"></script>
<!-- Datatables -->
<script src="{{'/css/datatables.net/js/jquery.dataTables.min.js'}}"></script>
<script src="{{'/css/datatables.net-bs/js/dataTables.bootstrap.min.js'}}"></script>
<script src="{{'/css/datatables.net-buttons/js/dataTables.buttons.min.js'}}"></script>
<script src="{{'/css/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'}}"></script>
<script src="{{'/css/datatables.net-buttons/js/buttons.flash.min.js'}}"></script>
<script src="{{'/css/datatables.net-buttons/js/buttons.html5.min.js'}}"></script>
<script src="{{'/css/datatables.net-buttons/js/buttons.print.min.js'}}"></script>
<script src="{{'/css/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'}}"></script>
<script src="{{'/css/datatables.net-keytable/js/dataTables.keyTable.min.js'}}"></script>
<script src="{{'/css/datatables.net-responsive/js/dataTables.responsive.min.js'}}"></script>
<script src="{{'/css/datatables.net-responsive-bs/js/responsive.bootstrap.js'}}"></script>
<script src="{{'/css/datatables.net-scroller/js/dataTables.scroller.min.js'}}"></script>
<script src="{{'/css/jszip/dist/jszip.min.js'}}"></script>
<script src="{{'/css/pdfmake/build/pdfmake.min.js'}}"></script>
<script src="{{'/css/pdfmake/build/vfs_fonts.js'}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('js/data_usuarios.js')}}"></script>
<script src="{{asset('js/gestionFormulario.js')}}"></script>
<script>
    //document.oncontextmenu = function(){return false;}
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
