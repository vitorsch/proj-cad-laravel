@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" 
                       id="nomeProduto" placeholder="Produto">
                <label for="estoqueProduto">Estoque</label>
                <input type="text" class="form-control" name="estoqueProduto" 
                       id="estoqueProduto" placeholder="Estoque">
                <label for="precoProduto">Preço</label>
                <input type="text" class="form-control" name="precoProduto" 
                       id="precoProduto" placeholder="Preço">
                <label for="nomeCategoria">Categoria</label>
                <select class="form-control" id="nomeCategoria" name="nomeCategoria">
                    @foreach($cats as $cat)
                    <option value="{{$cat->nome}}">{{$cat->nome}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm" >Salvar</button>
            <button type="button" class="btn btn-danger btn-sm" onclick="window.history.back();">Cancel</button>
        </form>
    </div>
</div>

@endsection