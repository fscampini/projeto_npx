@extends('auth.partial.header')

@section('content')

<div class="modal-dialog modal-sm">
	<div class="modal-content">
		<div class="modal-header">
			<h1 class="text-center">Bem Vindos</h1>
			<img src="{{asset("assets/logo-grupo-fleury.png")}}">
			@if (count($errors) > 0)
				<br>
				<br>
				<div class="alert alert-danger">
					<strong>Opa!</strong> Alguns problemas surgiram com sua tentativa de acesso.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>
		<div class="modal-body">

			<form role="form" method="POST" action="{{ url('/auth/login') }}">
				{!! csrf_field() !!}

				<div class="form-group">
					<input type="text" name="email" class="form-control input-mini" placeholder="Username" value="{{ old('email') }}"/>
				</div>

				<div class="form-group">
					<input type="password" name="password" class="form-control input-mini" placeholder="Password"/>
				</div>

				<div class="form-group">
					<div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember"> Continuar conectado
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
					<span class="pull-right"><a href="{{ url('/auth/register') }}">Registrar</a></span>
					<span><a href="{{ url('/password/email') }}">Esqueci a Senha</a></span>
				</div>

			</form>
		</div>
	</div>
</div>

@endsection