@extends('app')

@section('content')

        <!-- Main content -->

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                            <h3 class="box-title">Dados simples dos documentos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>Nome Arquivo</th>
                                    <th>Operadora</th>
                                    <th>Enviado Por</th>
                                    <th>Data Envio</th>
                                    <th>Dt Process</th>
                                    <th>Envios</th>
                                    <th>Ação</th>
                                    <th>Histórico</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td><small class="label pull-left bg-gray">Aguardando transmissão</small></td>
                                    <td>1243131231.xml</td>
                                    <td>Unimed</td>
                                    <td>Felipe Scampini</td>
                                    <td>17/05/2016 11:00:00</td>
                                    <td>17/05/2016 11:00:05</td>
                                    <td>1</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Ação</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Editar</a></li>
                                                <li><a href="#">Excluir</a></li>
                                                <li><a href="#">Reenviar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#">Histórico</a></td>
                                </tr>

                                <tr>
                                    <td><small class="label pull-left bg-yellow">Aguardando retorno</small></td>
                                    <td>1243131231.xml</td>
                                    <td>Unimed</td>
                                    <td>Felipe Scampini</td>
                                    <td>17/05/2016 11:00:00</td>
                                    <td>17/05/2016 11:00:05</td>
                                    <td>1</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Ação</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Editar</a></li>
                                                <li><a href="#">Excluir</a></li>
                                                <li><a href="#">Reenviar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#">Histórico</a></td>
                                </tr>

                                <tr>
                                    <td><small class="label pull-left bg-green">Retorno Sucesso</small></td>
                                    <td>1243131231.xml</td>
                                    <td>Unimed</td>
                                    <td>Felipe Scampini</td>
                                    <td>17/05/2016 11:00:00</td>
                                    <td>17/05/2016 11:00:05</td>
                                    <td>1</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Ação</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Editar</a></li>
                                                <li><a href="#">Excluir</a></li>
                                                <li><a href="#">Reenviar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#">Histórico</a></td>
                                </tr>

                                <tr>
                                    <td><small class="label pull-left bg-red">Retorno Erro</small></td>
                                    <td>1243131231.xml</td>
                                    <td>Unimed</td>
                                    <td>Felipe Scampini</td>
                                    <td>17/05/2016 11:00:00</td>
                                    <td>17/05/2016 11:00:05</td>
                                    <td>1</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Ação</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Editar</a></li>
                                                <li><a href="#">Excluir</a></li>
                                                <li><a href="#">Reenviar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><a href="#">Histórico</a></td>
                                </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Status</th>
                                    <th>Nome Arquivo</th>
                                    <th>Operadora</th>
                                    <th>Enviado Por</th>
                                    <th>Data Envio</th>
                                    <th>Dt Process</th>
                                    <th>Envios</th>
                                    <th>Ação</th>
                                    <th>Histórico</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        <!-- /.content -->

<!-- page script -->
<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
{{ $indice = '2' }}

@endsection


