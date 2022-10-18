@extends('layouts.default')

@section('title', 'Consulta')

@section('content')

<h1 class="pt-5">Listagem de itens do almoxarifado</h1>
	<br>
	<br>
    <br>
        <div class="tabela_consulta">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr class="">
                        <th>ITEM</th><th>QUANTIDADE</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                        @foreach($produtos as $prod)
                            <tr class="">
                                <td>{{$prod->produto}}</td><td>{{$prod->quant}}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
	<br>
	<br>
	<br>
@endsection