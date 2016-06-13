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

                                @forelse($documents as $document)
                                <tr>

                                    <td>
                                        {!! $document->documentStatus->status_label !!}
                                    </td>
                                    <td><a href="#">{{ $document->original_file_name }}</a></td>
                                    <td>{{ $document->partner }}</td>
                                    <td>{{ $document->user_created->name }}</td>
                                    <td>{{ $document->created_at }}</td>
                                    <td>{{ $document->ws_send_date }}</td>
                                    <td>{{ $document->sending_quantity }}</td>
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
                                    <td><a href="{{ route('document.history', ['id' => $document->id]) }}">Histórico</a></td>
                                </tr>

                                @empty

                                <tr>
                                    <td class="" colspan="9">
                                        <p> Nenhum item encontrado.</p>
                                    </td>
                                </tr>

                                @endforelse

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

                            {!! $documents->render() !!}
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

</script>

<input type="hidden" value="{{ $indice = '2' }}">

@endsection


