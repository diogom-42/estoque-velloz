<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tecnico;

class tecnicosController extends Controller
{
    public function index()
    {
        $tecnicos = Tecnico::orderBy('created_at', 'desc')->paginate(10);
        return view('tecnicos.index',['todostecnicos' => $tecnicos]);
    }
  
    public function create()
    {
        return view('tecnicos.create');
    }

    public function store(Request $request)
    {
        $tecnico = new Tecnico;
        $tecnico->nome        = $request->nome;
        $tecnico->uf = $request->uf;
        $tecnico->celular = $request->celular;
        $tecnico->cpf = $request->cpf;
        $tecnico->ativo    = $request->ativo;
        $tecnico->save();
        return redirect()->route('tecnicos.index')->with('message', 'Tecnico created successfully!');
    }
  
    public function show($id)
    {
        $tecnicos = Tecnico::find($id);
        return view('tecnicos.details')->with('detailpage', $tecnicos);        
    }
  
    public function edit($id)
    {
        $tecnicos = Tecnico::findOrFail($id);
        return view('tecnicos.edit')->with('editpage', $tecnicos);
    }
  
    public function update(Request $request, $id)
    {
        $tecnico = Tecnico::findOrFail($id);
        $tecnico->nome        = $request->nome;
        $tecnico->uf = $request->uf;
        $tecnico->celular = $request->celular;
        $tecnico->cpf = $request->cpf;
        $tecnico->ativo    = $request->ativo;
        $tecnico->save();
        return redirect()->route('tecnicos.index')->with('message', 'Tecnico updated successfully!');
    }
  
    public function destroy($id)
    {
        $tecnico = Tecnico::findOrFail($id);
        $tecnico->delete();
        return redirect()->route('tecnicos.index')->with('alert-success','Tecnico hasbeen deleted!');
    }
}
