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
                        <th>FUNCIONÁRIO</th><th>ITEM</th><th>QUANTIDADE</th><th>DATA</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                        @foreach($lista as $list)
                            <tr class="">
                                <td>{{$list->func_nome}}</td><td>{{$list->func_produto}}</td><td>{{$list->func_quant}}</td><td>{{\Carbon\Carbon::parse($list->created_at)->format('d/m/Y H:i')}}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
	<br>
	<br>
	<br>

    
@endsection