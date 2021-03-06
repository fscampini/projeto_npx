@extends('app')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
                </div>

                <div class="modal-body">
                    Olá, <strong>{{ auth()->user()->name }}</strong>! Você confirma a exclusão do registro, abaixo:

                    <br>
                    <br>
                    <strong><div class="inner_2"></div></strong>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a href="" class="btn btn-primary inner" role="button">Confirmar</a>
                </div>

            </div>

        </div>

    </div>
    <!-- Fim Modal -->

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    <h3 class="box-title">Cadastro de Ações</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    @if ($errors->any())
                        <div class="col-md-11">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                                <ul class="alert">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <a href="{{ Route('superuser.action_code.create') }}" class="btn btn-primary" role="button">Adicionar Ação</a>
                    <br>
                    <br>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Índice</th>
                            <th>Descrição</th>
                            <th>Font Awesome</th>
                            <th>Label do Status</th>
                            <th>Atualizado Por</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($action_codes as $action_code)
                            <tr>
                                <td><a href="#">{{ $action_code->id}}</a></td>
                                <td>{{ $action_code->description}}</td>
                                <td>{!! $action_code->font_awesome_description !!} </td>
                                <td>{!! $action_code->status_label !!} </td>
                                <td>{{ $action_code->user_updated->name}}</td>

                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default">Ação</button>
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ Route('superuser.action_code.edit', $action_code->id) }}">Editar</a></li>
                                            <li><a onclick="show_modal('{{ Route('superuser.action_code.destroy', $action_code->id) }}', '{{ $action_code->description }}')" data-toggle="modal" data-target="#myModal" href="#">Excluir</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td class="" colspan="7">
                                    <p> Nenhum item encontrado.</p>
                                </td>
                            </tr>

                        @endforelse

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Índice</th>
                            <th>Descrição</th>
                            <th>Font Awesome</th>
                            <th>Label do Status</th>
                            <th>Atualizado Por</th>
                            <th>Ação</th>
                        </tr>
                        </tfoot>
                    </table>

                    {!! $action_codes->render() !!}
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

    <input type="hidden" value="{{ $indice = '9' }}">

@endsection

@section('javascript')
    <script>
        function show_modal(url, content)
        {
            $( ".inner_2" ).empty();

            $(".inner").attr("href", url);
            $(".inner_2").append(content);
        }
    </script>

@endsection
