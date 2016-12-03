@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Novedades</div>

					<div class="panel-body">
						<p>Poner aca algun grafico, por ejemplo cantidad de vistas al perfil</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
