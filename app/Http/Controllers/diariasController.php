<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Diaria;

use App\Tecnico;

use App\Servico;

use App\Periodo;



class diariasController extends Controller
{
     public function index()
    {
        $diarias = Diaria::join('tecnicos', 'tecnicos.id', '=', 'diaria.tecnico')
        ->join('tp_servico', 'tp_servico.id', '=', 'diaria.tp_serv')
        ->join('periodos', 'periodos.id', '=', 'diaria.periodo')
        ->select('tecnicos.nome as nome_tecnico', 'tp_servico.tipo as tipo_servico', 'periodos.horario as horario', 'diaria.*')
        ->get();
        return view('diarias.index',['todosdiarias' => $diarias]);
        
    }
  
    public function create()
    {
        $tecnicos = Tecnico::all('id', 'nome');
        $servicos = Servico::all('id', 'tipo');
        $horarios = Periodo::all('id', 'horario');

        return view('diarias.create')
        ->with('todostecnicos', $tecnicos)

        ->with('todosservicos', $servicos)

        ->with('todoshorarios', $horarios);

    }
  
    public function store(Request $request)
    {

        $diaria = new Diaria;
        $diaria->data        = $request->data;
        $diaria->cidade = $request->cidade;
        $diaria->contrato    = $request->contrato;
        $diaria->cliente    = $request->cliente;
        $diaria->endereco    = $request->endereco;
        $diaria->tp_serv    = $request->tp_serv;
        $diaria->os    = $request->os;
        $diaria->periodo    = $request->periodo;
        $diaria->tecnico    = $request->tecnico;
        $diaria->obs    = $request->obs;
        $diaria->serial1    = $request->serial1;
        $diaria->serial2    = $request->serial2;
        $diaria->serial3    = $request->serial3;
        $diaria->serial4    = $request->serial4;
        $diaria->serial5    = $request->serial5;
        $diaria->serial6    = $request->serial6;

        $diaria->save();
        return redirect()->route('diarias.index')->with('message', 'Diaria created successfully!');
    }
  
    public function show($id)
    {
        $diarias = Diaria::find($id);
        return view('diarias.details')->with('detailpage', $diarias);        
    }
  
    public function edit($id)
    {
        $diarias = Diaria::findOrFail($id);
        $tecnicos = Tecnico::all('id', 'nome');
        $servicos = Servico::all('id', 'tipo');
        $horarios = Periodo::all('id', 'horario');

        return view('diarias.edit')
        ->with('editpage', $diarias)

        ->with('todostecnicos', $tecnicos)

        ->with('todosservicos', $servicos)

        ->with('todoshorarios', $horarios);

        
    }
  
    public function update(Request $request, $id)
    {
        $diaria = Diaria::findOrFail($id);
        $diaria->data        = $request->data;
        $diaria->cidade = $request->cidade;
        $diaria->contrato    = $request->contrato;
        $diaria->cliente    = $request->cliente;
        $diaria->endereco    = $request->endereco;
        $diaria->tp_serv    = $request->tp_serv;
        $diaria->baixa    = $request->baixa;
        $diaria->os    = $request->os;
        $diaria->periodo    = $request->periodo;
        $diaria->tecnico    = $request->tecnico;
        $diaria->obs    = $request->obs;
        $diaria->serial1    = $request->serial1;
        $diaria->serial2    = $request->serial2;
        $diaria->serial3    = $request->serial3;
        $diaria->serial4    = $request->serial4;
        $diaria->serial5    = $request->serial5;
        $diaria->serial6    = $request->serial6;
        $diaria->save();
        return redirect()->route('diarias.index')->with('message', 'Diaria updated successfully!');
    }
  
    public function destroy($id)
    {
        $diaria = Diaria::findOrFail($id);
        $diaria->delete();
        return redirect()->route('diarias.index')->with('alert-success','Diaria hasbeen deleted!');
    }
}
