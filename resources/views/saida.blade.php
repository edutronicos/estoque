@extends('layouts.default')

@section('title', 'Saída')

@section('content')

<h1 class="h1_index pt-5">Retirada de items do almoxarifado. </h1>
	<br>
	<br>
	<br>
        <div class="form_cad">
            <form action="/entrada_down" method="post">
                @csrf
                <div class="row">
                    <div class="col-5">
                        <label for="" class="form-label">Nome funcionário:</label>
                        <input type="text" name="funcionario" id="" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-3">
                        <label for="" class="form-label">Selecione o item:</label>
                        <select class="form-select" name="produto_s">
                            <option selected>Selecione o item:</option>
                            @foreach($produtos as $prod)
                                <option value="{{$prod->id}}">{{$prod->produto}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <label for="" class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" placeholder="QUANTIDADE" name="saida_quant">
                    </div>
                    <div class="col-2">
                        <label for="" class="form-label" id="confirm">Confirme</label>
                        <button class="btn btn-primary" type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
	<br>
	<br>
	<br>
<script>
    window.addEventListener('resize', function () {
        //var altura = window.innerHeight;
        var largura = window.innerWidth;

        if (largura < 540) 
            document.getElementsByClassName('row')[0].className = 'container';
            document.getElementsByClassName('col-5')[0].className = 'col-12';
            document.getElementsByClassName('col-3')[0].className = 'col-12';
            document.getElementsByClassName('col-2')[0].className = 'col-12';
            document.getElementsByClassName('col-2')[0].className = 'col-12';
            
    });
</script>

@endsection