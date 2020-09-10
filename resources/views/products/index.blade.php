@extends('layouts.app')

@section('content')
<h2>Lista de Produtos</h2>
<div class="d-flex justify-content-end">
    <a href="{{ route('products-create') }}" class="btn btn-success mb-2">Novo Produto</a>
</div>
<ul class="list-group">
    @foreach($products as $product)
    <li class="list-group-item">
       <span>{{ $product->name }}</span>
       <a href="{{route('products-show', $product->id)}}" class="btn btn-primary btn-sm float-right">Visualizar</a>
       <a href="{{route('products-edit', $product->id)}}" class="btn btn-warning btn-sm float-right mr-1">Editar</a>
       <form action="{{ route('products-destroy', $product->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Você quer realmente apagar o produto?')">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm float-right mr-1">Remover</button>
       </form>
    </li>
    @endforeach
</ul>
@endsection