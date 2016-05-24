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


        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Funcionalidades</li>
            <!-- Optionally, you can add icons to the links -->
            <li id="1">
                <a href="{{ route('documents.upload_documents') }}">
                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                    <span>Integração com as Operadoras</span>
                </a>
            </li>
            <li id="2">
                <a href="{{ route('documents.monitor') }}">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    <span>Monitoramento de XMLs</span>
                </a>
            </li>
            <li id="3">
                <a href="#">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <span>Distribuidor de Registros</span>
                </a>
            </li>
            <li id="4">
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Gerir equipe</span>
                </a>
            </li>
            <li id="5">
                <a href="#">
                    <i class="fa fa-file-code-o" aria-hidden="true"></i>
                    <span>Editar XML's</span>
                </a>
            </li>
            <li id="6">
                <a href="#">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <span>Reprocessar XML's</span>
                </a>
            </li>
            <li id="7" class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Dashboards</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Reports 1</a></li>
                    <li><a href="#">Reports 2</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->


    </section>
    <!-- /.sidebar -->
</aside>