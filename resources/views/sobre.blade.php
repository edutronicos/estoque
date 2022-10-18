@extends('layouts.default')

@section('title', 'Sobre')

@section('content')

<h1 class="h1_index pt-5">Controle Papéis A4</h1>
	<br>
	<br>
	<br>
		<div class="form_papeis">
			
			<div class="papeis1">
				<form action="/papeis" method="post">
				@csrf
					<label for="" class="form-label">Escolha o setor:</label>
					<select class="form-select" name="setores" id="">
						<option selected>SETOR</option>
						@foreach ($papeis as $papel)
							<option value="{{$papel->id}}">{{$papel->papel_setor}}</option>
						@endforeach
						
						
					</select>
					<br>
					<label class="form-label" for="">Quantidade de Resmas:</label>
					<input class="form-control" type="number" name="papeis_quanti" id="">
					<br>
					<button class="btn btn-secondary" type="submit">REGISTRAR</button>
				</form>
			</div>

			<div class="papeis2">
				<table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="px-3">Setor</th><th class="px-3">Quantidade</th><th class="px-3">Data</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach ($database as $base)
							<tr>
								<td>{{$base->data_setor}}</td><td>{{$base->data_quant}}</td><td>{{\Carbon\Carbon::parse($base->created_at)->format('d/m/Y')}}</td>
							</tr>
						@endforeach
                        
                    </tbody>
                </table>
			</div>
		</div>
	<br>
	<br>
	<br>
    	

@endsection