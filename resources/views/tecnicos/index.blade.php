@extends('layouts.app')

@section('content')

  
      
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Tecnicos</div>
                    <div class="card-body">
                        <a href="{{ url('/tecnicos/create') }}" class="btn btn-success btn-sm" title="Adicionar Tecnico">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar
                        </a>

                        <form method="GET" action="{{ url('/tecnicos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Pesquisar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nome</th><th>Celular</th><th>CPF</th><th>UF</th><th>Ativo</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($todostecnicos as $tecnico)
                                    <tr>
                                        <td>{{ $tecnico->id }}</td><td>{{ $tecnico->nome }}</td><td>{{ $tecnico->celular }}</td><td>{{ $tecnico->cpf }}</td><td>{{ $tecnico->uf }}</td><td>{{ $tecnico->ativo }}</td>
                                        <td>
                                            <a href="{{ url('/tecnicos/' . $tecnico->id) }}" title="View Tecnico"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/tecnicos/' . $tecnico->id . '/edit') }}" title="Edit Tecnico"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/tecnicos' . '/' . $tecnico->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Tecnico" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
