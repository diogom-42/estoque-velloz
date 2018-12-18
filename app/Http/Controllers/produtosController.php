<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Produto;

class produtosController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('created_at', 'desc')->paginate(10);
        return view('produtos.index',['todosprodutos' => $produtos]);
    }
  
    public function create()
    {
        return view('produtos.create');
    }
  
    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->serial        = $request->serial;
        $produto->smart = $request->smart;
        $produto->modelo    = $request->modelo;
        $produto->categoria    = $request->categoria;
        $produto->qtd    = $request->qtd;
        $produto->nf    = $request->nf;
        $produto->status    = $request->status;
        $produto->dataRecebimento    = $request->dataRecebimento;
        $produto->obs    = $request->obs;

        $produto->save();
        return redirect()->route('produtos.index')->with('message', 'Produto created successfully!');
    }
  
    public function show($id)
    {
        $produtos = Produto::find($id);
        return view('produtos.details')->with('detailpage', $produtos);        
    }
  
    public function edit($id)
    {
        $produtos = Produto::findOrFail($id);
        return view('produtos.edit')->with('editpage', $produtos);
    }
  
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->serial        = $request->serial;
        $produto->smart = $request->smart;
        $produto->modelo    = $request->modelo;
        $produto->categoria    = $request->categoria;
        $produto->qtd    = $request->qtd;
        $produto->nf    = $request->nf;
        $produto->status    = $request->status;
        $produto->dataRecebimento    = $request->dataRecebimento;
        $produto->obs    = $request->obs;
        $produto->save();
        return redirect()->route('produtos.index')->with('message', 'Produto updated successfully!');
    }
  
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('alert-success','Produto hasbeen deleted!');
    }
}
