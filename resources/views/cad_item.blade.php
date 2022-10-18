@extends('layouts.default')

@section('title', 'Cadastro')

@section('content')

<h1 class="h1_index pt-5">Formulário de cadastro</h1>
	<br>
	<br>
	<br>
        <div class="form_cad position-absolute top-30 start-50 translate-middle">
            <form action="/cad_store" method="post">
                @csrf
            <div class="row">
                <div class="col-6">
                    <label for="" class="form-label">Informe o nome do Item:</label>
                    <input type="text" class="form-control" placeholder="NOME" name="item">
                </div>
                <div class="col-4">
                    <label for="" class="form-label">Informe a quantidade:</label>
                    <input type="number" class="form-control" placeholder="QUANTIDADE" name="quantidade">
                </div>
                <div class="col-2">
                    <label for="" class="form-label">Confirme</label>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </div>
            </form>
        </div>
	<br>
	<br>
	<br>
    	

@endsection