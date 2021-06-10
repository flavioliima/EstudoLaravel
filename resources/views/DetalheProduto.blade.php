@extends('principal')

@section('conteudo')
    <div class="container">
        <h1 style="text-align: center">Detalhe do produto: {{$p->nome}}</h1>
        <table class="table table-dark"> 
            <tr>
                <th>Observacao</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Opções</th>
            </tr>

            <tbody>
                <tr>
                    <td>{{$p->observacao}}</td>
                    <td>{{$p->valor}}</td>
                    <td>{{$p->quantidade}}</td>
                    <td>
                        <a href="/produtos"><button class="btn btn-primary">Voltar</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@stop