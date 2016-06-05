@extends('app')

@section('content')

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-primary">
        {!! Form::open(['route'=> ['superuser.menu.update', $menu->id], 'method'=>'post']) !!}
            <div class="box-header with-border">
                <i class="fa fa-plug" aria-hidden="true"></i>
                <h3 class="box-title">Editar Menu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">

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

                    <div class="col-md-6">

                        <div class="form-group">

                            {!! Form::label('name', 'Nome:') !!}
                            {!! Form::text('name', $menu->name , ['class'=>'form-control', 'placeholder' => 'Informe o nome do Menu']) !!}

                        </div>

                        {!! Form::label('font_awesome_description', 'Font Awesome Icon:') !!}
                        <div class="input-group">
                            {!! Form::text('font_awesome_description', $menu->font_awesome_description, ['class'=>'form-control target', 'placeholder' => 'Informe o código do ícone - Font Awesome']) !!}
                            <span class="input-group-addon inner"></span>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">

                            {!! Form::label('route_description', 'Descrição da Rota:') !!}
                            {!! Form::text('route_description', $menu->route_description, ['class'=>'form-control', 'placeholder' => 'Informe a Rota']) !!}

                        </div>

                        <div class="form-group">

                            <br>
                            <br>

                            {!! Form::hidden('treeview_flag', 0) !!}
                            {!! Form::checkbox('treeview_flag', 1, $menu->treeview_flag) !!}
                            {!! Form::label('treeview_flag', 'Treeview Flag') !!}

                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ Route('superuser.menu.index') }}" class="btn btn-primary" role="button">Retornar</a>
                {!! Form::submit('Atualizar Menu', ['class'=> 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
    <!-- /.box -->

@endsection

@section('javascript')
    <script>
        $( ".target" ).change(function() {
            var content = $( ".target" ).val()
            $( ".inner" ).empty();
            $( ".inner" ).append(content);
        });


    </script>
@endsection