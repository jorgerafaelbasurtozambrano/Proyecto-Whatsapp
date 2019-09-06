<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>GAIA-ADMIN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Bootstrap -->
  <link href='{{asset("/css/bootstrap/dist/css/bootstrap.min.css")}}' rel="stylesheet">
  <!-- Font Awesome -->
  <link href='{{asset("/css/font-awesome/css/font-awesome.min.css")}}' rel="stylesheet">
  <!-- NProgress -->
  <link href='{{asset("/css/nprogress/nprogress.css")}}' rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href='{{asset("/css/bootstrap-daterangepicker/daterangepicker.css")}}' rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href='{{asset("/css/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css")}}' rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href='{{asset("/css/normalize-css/normalize.css")}}' rel="stylesheet">
  <link href='{{asset("/css/ion.rangeSlider/css/ion.rangeSlider.css")}}' rel="stylesheet">
  <link href='{{asset("/css/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css")}}' rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href='{{asset("/css/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css")}}' rel="stylesheet">
  <link href='{{asset("/css/cropper/dist/cropper.min.css")}}' rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href='{{asset("/css/build/css/custom.min.css")}}' rel="stylesheet">
  <!-- Custom Theme Style CUSTOM JG-->
  <link href='{{asset("/css/build/css/style-custom.css")}}' rel="stylesheet">
  <!-- iCheck -->
  <link href='{{asset("/css/iCheck/skins/flat/green.css")}}' rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href='{{asset("/css/google-code-prettify/bin/prettify.min.css")}}' rel="stylesheet">
  <!-- Select2 -->
  <link href='{{asset("/css/select2/dist/css/select2.min.css")}}' rel="stylesheet">
  <!-- Switchery -->

  <link href='{{asset("/css/switchery/dist/switchery.min.css")}}' rel="stylesheet">
  <!-- starrr -->
  <link href='{{asset("/css/starrr/dist/starrr.css")}}' rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href='{{asset("/css/bootstrap-daterangepicker/daterangepicker.css")}}' rel="stylesheet">
  <!-- Datatables -->
  <link href='{{asset("/css/datatables.net-bs/css/dataTables.bootstrap.min.css")}}' rel="stylesheet">
  <link href='{{asset("/css/datatables.net-buttons-bs/css/buttons.bootstrap.min.css")}}' rel="stylesheet">
  <link href='{{asset("/css/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css")}}' rel="stylesheet">
  <link href='{{asset("/css/datatables.net-responsive-bs/css/responsive.bootstrap.min.css")}}' rel="stylesheet">
  <link href='{{asset("/css/datatables.net-scroller-bs/css/scroller.bootstrap.min.css")}}' rel="stylesheet">

  <!-- Dropzone.js -->
  <link href='{{asset("/css/dropzone/dist/min/dropzone.min.css")}}' rel="stylesheet">

  <script src="https://use.fontawesome.com/119ed3079a.js"></script>
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>

</head>
