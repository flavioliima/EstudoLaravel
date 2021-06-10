@extends('principal')


@section('conteudo')

<div class="container">

    <a href="/produtos" style="float: right; padding: 2em;"><button class="btn btn-primary">Voltar</button></a>

    <form action="/produtos/adicionarProduto" method="POST">

        <input type="hidden"  name="_token" value="{{csrf_token()}}">

        <h1 style="text-align: center">Cadastro de Produto</h1>

        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
        <div class="form-group">
                <label for="">Nome do produto</label>
                <input type="text" class="form-control" name="nome" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                    <label for="">Quantidade do produto</label>
                    <input type="text" class="form-control" name="quantidade" required>
            </div>

            <div class="col-md-6">
                    <label for="">Valor do produto</label>
                    <input type="text" class="form-control" name="valor" required>
            </div>
        </div>
        

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="date">Data compra</label>
                    <input type="date" class="form-control" name="datacompra" required>
                </div>

                <div class="col-md-6">
                    <label for="tamanho">Tamanho</label>
                    <input type="text" class="form-control" name="tamanho" required>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="">Observação</label>
            <textarea class="form-control" name="observacao" rows="3"></textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
    <br>
    
    <br>
</div>



@stop