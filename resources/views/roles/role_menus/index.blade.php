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
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <h3 class="box-title">Atribuição de acesso à função <strong>{{ $role->name }}</strong></h3>
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

                    <form class="form-horizontal">
                        <select id='searchable' multiple='multiple'>
                            @foreach($menus as $menu)
                                <option value='{{ $menu->id }}'>{{ $menu->name }}</option>
                            @endforeach
                        </select>

                        <!-- /.Menus disponíveis -->
                        <br>
                    </form>

                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary" onclick="attach_role_access()">Salvar</a>
                    <a href="{{ Route('superuser.role.index') }}" class="btn btn-primary" role="button">Retornar</a>
                    <br>
                    <br>

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
            @foreach($selected_menus->lists('id') as $id_menu)
                '{{ $id_menu }}',
            @endforeach
        ];


        $('#searchable').multiSelect('select',selected_menus);

        function teste()
        {
            alert($('#searchable').val());
        }

        function attach_role_access(){

            var content = $('#searchable').val();

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': '{{csrf_token()}}' }
            });

            $.ajax({
                type: "POST",
                data:
                    {
                        menu_ids: content,
                        role_id: {{ $role->id }}
                    },
                dataType: "json",
                url: "{{ route("superuser.role.menu.attach", $role->id) }}",
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
