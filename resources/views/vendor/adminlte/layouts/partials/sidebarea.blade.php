<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-tachometer'></i> <span>PROYECTO</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/home1/crearproyecto">NUEVO PROYECTO</a></li>
                    <li><a href="/home1/mostrar_proyecto">LISTAS DE PROYECTOS</a></li>
                    <li><a href="/home1/mostrarindicador">LISTA DE INDICADORES</a></li>
                    <li><a id="metas_view" href="/home1/metas">LISTA DE METAS</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-tachometer'></i> <span>META</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/home1/meta_evaluacion">EVALUACIONES</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-tachometer'></i> <span>EVALUAR</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/home1/subareas">SUBAREA</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
