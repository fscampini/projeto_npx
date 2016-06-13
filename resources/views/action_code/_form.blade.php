    <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::text('description', null, ['class'=>'form-control', 'placeholder' => 'Informe a descrição da Ação']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('font_awesome_description', 'Font Awesome Icon:') !!}
            {!! Form::text('font_awesome_description', null, ['class'=>'form-control target', 'placeholder' => 'Informe o código do ícone - Font Awesome']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Preview', 'Preview Font Awesome Icon:') !!} <br>
            <div class="inner"></div>
        </div>

    </div>

    <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('status_label', 'Label do Status:') !!}
            {!! Form::text('status_label', null, ['class'=>'form-control target-label', 'placeholder' => 'Informe o Label do Status']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('Preview', 'Preview do Label:') !!} <br>
            <div class="inner-label"></div>
        </div>

    </div>