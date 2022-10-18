@extends('layouts.default')

@section('title', 'Contato')

@section('content')

<h1 class="h1_index pt-5">Cadastro de Fornecedores</h1>
	<br>
	<br>
	<br>
        <div class="form_forne">
            <div class="container1">
                <form action="/cadas_forne" method="post">
                    @csrf
                    <div class="row ">
                        <div class="col-6">
                            <label for="" class="form-label">Empresa:</label>
                            <input type="text" name="forne_empresa" id="" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Contato:</label>
                            <input type="text" name="forne_contato" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-4">
                            <label for="" class="form-label">Telefone:</label>
                            <input type="text" name="forne_telefone" id="" class="form-control">
                        </div>
                        <div class="col-8">
                            <label for="" class="form-label">E-mail:</label>
                            <input type="text" name="forne_email" id="" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">SALVAR</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container2">
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="px-3">Empresa</th><th class="px-3">Contato</th><th class="px-3">Telefone</th><th class="px-3">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($forne as $fornecedor)
                        <tr>
                            <td class="px-3">{{$fornecedor->empresa}}</td><td class="px-3">{{$fornecedor->contato}}</td><td class="px-3"><a class="list-group-item list-group-item-action" href="tel:41{{$fornecedor->telefone}}">{{$fornecedor->telefone}}</a></td><td class="px-3"><a class="list-group-item list-group-item-action" href="mailto:{{$fornecedor->email}}">{{$fornecedor->email}}</a> </td>
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