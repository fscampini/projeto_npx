<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/felipe.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Felipe Scampini</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Funcionalidades</li>

            @foreach(auth()->user()->menus as $menu)

                @if($menu->child_menus->count() >= 1)
                    <li id="{{ $menu->id }}" class="treeview">
                        <a href="#">
                            {!! $menu->font_awesome_description !!}
                            <span>{{ $menu->name }}</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            @include('sidebar_submenus', ['menus' => $menu->child_menus ])
                        </ul>
                    </li>
                @else
                    <!-- Optionally, you can add icons to the links -->
                    <li id="{{ $menu->id }}">
                        <a href="{{ route($menu->route_description) }}">
                            {!! $menu->font_awesome_description !!}
                            <span>{{ $menu->name }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

