@extends('app')

@section('content')

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-primary">
        {!! Form::open(['route'=>'superuser.action_code.store', 'method'=>'post']) !!}
            <div class="box-header with-border">
                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                <h3 class="box-title">Cadastro de Ação</h3>
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

                    @include('action_code._form')

                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{ Route('superuser.action_code.index') }}" class="btn btn-primary" role="button">Retornar</a>
                {!! Form::submit('Adicionar Ação', ['class'=> 'btn btn-primary']) !!}
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

        $( ".target-label" ).change(function() {
            var content = $( ".target-label" ).val()
            $( ".inner-label" ).empty();
            $( ".inner-label" ).append(content);
        });
    </script>


@endsection