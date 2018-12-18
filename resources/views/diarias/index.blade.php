@extends('layouts.app')

@section('content')


<div class="central" style="margin-right: 350px;margin-left: -107px;border-left-width: 0px;border-left-style: solid;border-right-width: 0px;border-right-style: solid;padding-left: 0px;padding-right: 0px;">

    <div class="container">

        <div class="card-header" style="border-bottom: 0px;">Diaria</div>
        <div class="card-body">
            <a href="{{ url('/diarias/create') }}" class="btn btn-success btn-sm" title="Add New Diaria">
                <i class="fa fa-plus" aria-hidden="true"></i> Novo Serviço
            </a>



            <br />
            <br />
            <div class="table-responsive" style="display:contents;">

                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Data</th>
                            <th class="text-center">Cidade</th>
                            <th class="text-center">Contrato</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Tipo de Serviço</th>
                            <th class="text-center">OS</th>
                            <th class="text-center">Período</th>
                            <th class="text-center">Tecnico</th>
                            <th class="text-center">Observações</th>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Serial</th>
                            <th class="text-center">Baixa Activia</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($todosdiarias as $diaria)
                        <tr class="diaria{{$diaria->id}}">
                            <td>{{$diaria->id}}</td>
                            <td>{{$diaria->data}}</td>
                            <td>{{$diaria->cidade}}</td>
                            <td>{{$diaria->contrato}}</td>
                            <td>{{$diaria->cliente}}</td>
                            <td>{{$diaria->tipo_servico}}</td>
                            <td>{{$diaria->os}}</td>
                            <td>{{$diaria->horario}}</td>
                            <td>{{$diaria->nome_tecnico}}</td>
                            <td>{{$diaria->obs}}</td>
                            <td>{{$diaria->serial1}}</td>
                            <td>{{$diaria->serial2}}</td>
                            <td>{{$diaria->serial3}}</td>
                            <td>{{$diaria->serial4}}</td>
                            <td>{{$diaria->serial5}}</td>
                            <td>{{$diaria->serial6}}</td>
                            <td>{{$diaria->baixa}}</td>

                            <td> 
                                <a href="{{ url('/diarias/' . $diaria->id . '/edit') }}" title="Edit Diaria"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Edit</button></a>

                                <form method="POST" action="{{ url('/diarias' . '/' . $diaria->id) }}" accept-charset="UTF-8"
                                    style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Diaria" onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <script>
        </script>



    </div>
</div>
@endsection
