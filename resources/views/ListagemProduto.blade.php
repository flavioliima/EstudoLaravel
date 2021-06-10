@extends('principal')

@section('conteudo')
    <div class="container">
        <h1 style="text-align: center">Listagem dos produtos</h1>
        @if(old('nome'))
        <div class="alert alert-success">
            <h5 style="text-align: center">Produto <strong>{{old('nome')}}</strong> adicionado com sucesso!</h5>
        </div>
        @endif
        <table class="table"> 
            <tr class="table-dark">
                <th>Nome</th>
                <th>Data Compra</th>
                <th>Quantidade</th>
                <th>Tamanho</th>
                <th>Opções</th>
                <a href="/produtos/novoProduto"><button class="btn btn-success">Cadastrar Produto</button></a>
            </tr>

            <tbody>
            @foreach ($produtos as $p)
                <tr> <!--class="{{$p->quantidade <=10 ? 'btn-danger' : ''}}"-->
                    <td>{{$p->nome}}</td>
                    <td>{{date('d/m/Y', strtotime($p->datacompra))}}</td>
                    <td>{{$p->quantidade}}</td>
                    <td>{{$p->tamanho}}</td>
                    <td>
                        <a href="/produtos/detalheProduto/{{$p->id}}">
                            <button class="btn btn-warning"><span class="glyphicon glyphicon-search"></button></span>   
                        </a>

                        <a href="/produtos/removerProduto/{{$p->id}}">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button></span>
                        </a>
                    </td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop