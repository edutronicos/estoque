@extends('layouts.default')

@section('title', 'Entrada')

@section('content')

<h1 class="h1_index pt-5">Entrada de produtos </h1>
	<br>
	<br>
	<br>
        <div class="form_cad">
            <form action="/entrada_up" method="post">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <label for="" class="form-label">Selecione o item:</label>
                        <select class="form-select" name="produto">
                            <option selected>Selecione o item:</option>
                            @foreach($produtos as $prod)
                                <option value="{{$prod->id}}">{{$prod->produto}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label">Informe a quantidade:</label>
                        <input type="number" class="form-control" placeholder="QUANTIDADE" name="inse_quant">
                    </div>
                    <div class="col-2">
                        <label for="" class="form-label" id="confirm">Confirme</label>
                        <button class="btn btn-primary" type="submit">INSERIR</button>
                    </div>
                    <div class="col-2">
                        <label for="" class="form-label" id="confirm">Cadastrar</label>
                        <button class="btn btn-secondary" type="button" aria-expanded="false"><a href="/cad_item" class="text-white" style="text-decoration: none;">NOVO ITEM</a></button>
                    </div>
                </div>
                <br>
                <br>
                <br>
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
            document.getElementsByClassName('col-4')[0].className = 'col-12';
            document.getElementsByClassName('col-4')[0].className = 'col-12';
            document.getElementsByClassName('col-2')[0].className = 'col-12';
            document.getElementsByClassName('col-2')[0].className = 'col-12';
            
    });
</script>
@endsection