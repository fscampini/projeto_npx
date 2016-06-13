    <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Informe o nome do Menu']) !!}

        </div>

        {!! Form::label('font_awesome_description', 'Font Awesome Icon:') !!}
        <div class="input-group">
            {!! Form::text('font_awesome_description', null, ['class'=>'form-control target', 'placeholder' => 'Informe o código do ícone - Font Awesome']) !!}
            <span class="input-group-addon inner"></span>
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('route_description', 'Descrição da Rota:') !!}
            {!! Form::text('route_description', null, ['class'=>'form-control', 'placeholder' => 'Informe a Rota']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('menu', 'Menu Pai:') !!}
            {!! Form::select('parent_menu_id', array('' => '') + $menus->toArray(), null, ['class'=>'form-control']) !!}

        </div>

    </div>