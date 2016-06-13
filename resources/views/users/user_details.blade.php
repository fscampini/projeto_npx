@extends('app')

@section('content')

    <section class="content">

        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset("/bower_components/AdminLTE/dist/img/felipe.jpg") }}" alt="User profile picture">

                        <h3 class="profile-username text-center">Felipe Scampini</h3>

                        <p class="text-muted text-center">Software Engineer - TKS Founder</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>E-mail</b> <a class="pull-right">fscampini@gmail.com</a>
                            </li>
                            <li class="list-group-item">
                                <b>Área</b> <a class="pull-right">Financeiro</a>
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
                            13/12/2016
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
                            <div class="row">
                                <!-- Menus disponíveis -->
                                <div class="col-md-5">
                                    <div class="box box-warning">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Menus disponíveis</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Task</th>
                                                </tr>
                                                <tr>
                                                    <td> {{ Form::checkbox('permissions[]',1,false) }}</td>
                                                    <td>Update software</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ Form::checkbox('permissions[]',1,false) }}</td>
                                                    <td>Clean database</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ Form::checkbox('permissions[]',1,false) }}</td>
                                                    <td>Cron job running</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Fix and squish bugs</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer clearfix">
                                            <a href="#" class="btn btn-primary btn-sm pull-right"><b>Conceder acesso <i class="fa fa-step-forward" aria-hidden="true"></i></b></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Menus disponíveis -->

                                <!-- Menus associados -->
                                <div class="col-md-5">
                                    <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Menus atribuídos</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Task</th>
                                            </tr>
                                            <tr>
                                                <td>1.</td>
                                                <td>Update software</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Clean database</td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Cron job running</td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer clearfix">
                                        <a href="#" class="btn btn-primary btn-sm pull-left"><b><i class="fa fa-step-backward" aria-hidden="true"></i> Remover acesso</b></a>
                                    </div>
                                </div>
                                </div>
                                <!-- /.Menus associados -->
                            </div>

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
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

    </section>

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
