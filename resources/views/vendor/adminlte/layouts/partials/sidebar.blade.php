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
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu main_menu_side hidden-print main_menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a><i class="fa fa-home"></i> <span>PERIODO</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="crear">NUEVO</a></li>
                    <li><a href="mostrar">LISTAR</a></li>
                    <li><a href="area">AREAS</a></li>
                    <li><a href="perio_mostr">REPORTE</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-tachometer'></i> <span>EVALUAR</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="mostrar_meta_eval">METAS</a></li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
