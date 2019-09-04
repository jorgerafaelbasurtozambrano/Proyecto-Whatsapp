<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
    @include('adminlte::layoutsnuevo.partials.htmlheader')
@show
  <body class="nav-md">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="container body">
      <div class="main_container">
        @include('adminlte::layoutsnuevo.partials.izquierda')
        @include('adminlte::layoutsnuevo.partials.login')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <section>
              <!-- Your Page Content Here -->
              @yield('main-content1')
            </section>
          </div>
        </div>
        <!-- /page content -->
        @include('adminlte::layoutsnuevo.partials.footer')
      </div>
    </div>
    @section('scripts')
        @include('adminlte::layoutsnuevo.partials.scripts')
    @show
  </body>
</html>
