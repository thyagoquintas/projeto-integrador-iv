<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index')->with('products', Product::all());
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        session()->flash('success', 'Produto criado com sucesso!');
        return redirect(route('products'));
    }

    public function show($id)
    {
        return view('products.show')->with('product', Product::find($id));
    }

    public function edit($id)
    {
        return view('products.edit')->with('product', Product::find($id));
    }

    public function update(Request $request, $id)
    {
        $produto = Product::find($id);
        $produto->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price
        ]);
        session()->flash('success', 'Produto atualizado com sucesso!');
        return redirect(route('products'));

    }

    public function destroy($id)
    {
        $produto = Product::find($id);
        $produto->delete();
        session()->flash('success', 'Produto removido com sucesso!');
        return redirect(route('products'));
    }
}
