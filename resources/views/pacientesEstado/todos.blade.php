@extends('layouts.app')
@section('title', 'Estados de Paciente')

@section('content')

<h2>Estados de Paciente</h2><br><br>


<div class="table-responsive">

	<div class="tablapersonas col-sm-12">

			<table class="table col-sm-12">
				<thead>
					<tr>
						<th>Nombres</th>
						<th>Eliminar</th>

					</tr>
				</thead>
				<tbody>
					@foreach($tabla as $estado)
						<tr>
							<td>{{$estado->nombre}}</td>
							<td><a href="{{asset('pacientes')}}{{'/estados/'.$estado->id.'/eliminar'}}">
  							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

	</div>

</div>

@endsection
