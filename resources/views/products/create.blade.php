@extends('layouts.app')

@section('content')
<h2>Criar um produto</h2>
<form method="POST" class="mt-3" action="{{ route('products-store') }}">
    @csrf
    <div class="form-group">
        <label for="">Nome:</label>
        <input type="text" class="form-control" name="name" placeholder="Digite o nome do produto">
    </div>
    <div class="form-group">
        <label for="">Descrição:</label>
        <input type="text" class="form-control" name="description" placeholder="Digite a descrição">
    </div>
    <div class="form-group">
        <label for="">Preço:</label>
        <input type="number" class="form-control" name="price" placeholder="Digite o valor em reais">
    </div>
    <button type="submit" class="btn btn-success">Criar Produto</button>
</form>
@endsection