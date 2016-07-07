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

                    </div>

                </div>

            </div>

        </div>
        <!-- Fim Modal -->

    <section class="content">
        <form>
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="{{ asset("/bower_components/AdminLTE/dist/img/felipe.jpg") }}" alt="User profile picture">

                            <h3 class="profile-username text-center">{{ $user->name }}</h3>

                            <p class="text-muted text-center">Software Engineer - TKS Founder</p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>E-mail</b> <a class="pull-right">{{ $user->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Perfil:</b>
                                    {!! Form::select('role_id', array('' => '') + $roles->lists('name', 'id')->toArray(), isset($user->role->id) ? $user->role->id : null, ['class'=>'form-control target_role']) !!}
                                </li>
                                <li class="list-group-item">
                                    <b>Grupo</b> <a class="pull-right">XPTO</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Liberar Acesso</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detalhes</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-book margin-r-5"></i> Data Criação</strong>

                            <p class="text-muted">
                                {{ $user->created_at }}
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker margin-r-5"></i> Unidade</strong>

                            <p class="text-muted">Rio de Janeiro</p>

                            <hr>

                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Motivo para acesso</strong>

                            <p>Necessário para trabalhar na frente funcional da área Financeira.</p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#access-control" data-toggle="tab">Controle de Acesso</a></li>
                            <li><a href="#settings" data-toggle="tab">Dados do Usuário</a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="active tab-pane" id="access-control">

                                    <br>
                                        <!-- Menus disponíveis -->
                                    <div class="form-horizontal">
                                        <select id='searchable' multiple='multiple'>
                                            @foreach($menus as $menu)
                                                <option value={{ $menu->id }}>{{ $menu->name }}</option>
                                            @endforeach
                                        </select>

                                        <!-- /.Menus disponíveis -->
                                        <br>
                                    </div>

                                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary" onclick="attach_user_access()">Salvar</a>
                                <a href="{{ Route('admin.user.index') }}" class="btn btn-primary" role="button">Retornar</a>

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">

                                <br>

                                <div class="form-horizontal">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nome:', ['class' => "col-sm-2 control-label"]) !!}

                                        <div class="col-sm-10">
                                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Informe o nome do Menu']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('email', 'E-mail:', ['class' => "col-sm-2 control-label"]) !!}

                                        <div class="col-sm-10">
                                            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'Informe o e-mail do Usuário']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('password', 'Password:', ['class' => "col-sm-2 control-label"]) !!}

                                        <div class="col-sm-10">
                                            {!! Form::password('password', null, ['class'=>'form-control', 'placeholder' => 'Informe o password do Usuário']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('repeat-password', 'Repetir o Password:', ['class' => "col-sm-2 control-label"]) !!}

                                        <div class="col-sm-10">
                                            {!! Form::password('repeat-password', null, ['class'=>'form-control', 'placeholder' => 'Informe o password do Usuário']) !!}
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('image', 'Foto:', ['class' => "col-sm-2 control-label"]) !!}

                                        <div class="col-sm-10">
                                            {!! Form::file('image', null, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary" onclick="attach_user_access()">Salvar</a>
                                <a href="{{ Route('admin.user.index') }}" class="btn btn-primary" role="button">Retornar</a>
                            </div>
                            <!-- /.tab-pane -->

                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </form>

    </section>

    <input type="hidden" value="{{ $indice = '9' }}">

@endsection

@section('javascript')
    <script>

        $( ".target_role" ).change(function() {

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': '{{csrf_token()}}' }
            });

            $.ajax({
                type: "GET",
                data: {role_id: $( ".target_role" ).val() },
                dataType: "json",
                url: "{{ route("superuser.role.menu.menulist") }}",
                async: false
            }).done(function(data) {
                var content = "";
                if(data.status=="false"){

                    content = "<strong>Erro!</strong> Houve algum erro de processamento dos seus regitros!" + data.error_message;

                } else {
                    var menus = data.menu_ids;
                    menus = menus.map(String);

                    $('#searchable').multiSelect('deselect_all');
                    $('#searchable').multiSelect('select', menus);
                }

                $( ".modal-body" ).empty();
                $(".modal-body").append(content);

            });

        });

        function show_modal(url, content)
        {
            $( ".inner_2" ).empty();

            $(".inner").attr("href", url);
            $(".inner_2").append(content);
        }


        $('#searchable').multiSelect({
            selectableHeader: "<input type='text' class='form-control input-sm' autocomplete='off' placeholder='Busca'>",
            selectionHeader: "<input type='text' class='form-control input-sm' autocomplete='off' placeholder='Busca'>",
            afterInit: function(ms){
                var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function(e){
                            if (e.which === 40){
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function(e){
                            if (e.which == 40){
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
            },
            afterSelect: function(){
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function(){
                this.qs1.cache();
                this.qs2.cache();
            }
        });

        var selected_menus = [
            @foreach($user_menus->lists('id') as $id_menu)
                    '{{ $id_menu }}',
            @endforeach
        ];

        $('#searchable').multiSelect('select', selected_menus);

        function attach_user_access(){

            var selected_menus = $('#searchable').val();


            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': '{{csrf_token()}}' }
            });

            $.ajax({
                type: "POST",
                data:   {
                            menu_ids: selected_menus,
                            user_id: {{ $user->id }},
                            content: $( 'form' ).serializeArray()
                        },
                dataType: "json",
                url: "{{ route("admin.user.attach") }}",
                async: false
            }).done(function(data) {
                var content = "";
                if(data.status=="false"){

                    content = "<strong>Erro!</strong> Houve algum erro de processamento dos seus regitros!" + data.error_message;

                } else {

                    content = "<strong>Ótimo!</strong> Registros processados com sucesso!";

                }

                $( ".modal-body" ).empty();
                $(".modal-body").append(content);

            });
        }

    </script>
@endsection
