

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Técnico {{ $detailpage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/tecnicos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/tecnicos/' . $detailpage->id . '/edit') }}" title="Edit Tecnico"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('tecnicos' . '/' . $detailpage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Tecnico" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detailpage->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $detailpage->nome }} </td></tr><tr><th> Celular </th><td> {{ $detailpage->celular }} </td></tr><tr><th> CPF </th><td> {{ $detailpage->cpf }} </td></tr><tr><th> UF </th><td> {{ $detailpage->uf }} </td></tr><tr><th> Ativo </th><td> {{ $detailpage->ativo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
