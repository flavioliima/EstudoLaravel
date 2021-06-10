@extends('principal')


@section('conteudo')

<div class="container">

    <form action="/login" method="POST">

        <input type="hidden"  name="_token" value="{{csrf_token()}}">

        <h1 style="text-align: center">Login</h1>

        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        
        <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@email.com.br">
        </div>

        <div class="form-group">
                <label for="">Senha</label>
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
        </div>

        <br>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
    <br>
    
    <br>
</div>



@stop