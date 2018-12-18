

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Produto {{ $detailpage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/produtos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/produtos/' . $detailpage->id . '/edit') }}" title="Edit Produto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('produtos' . '/' . $detailpage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Produto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detailpage->id }}</td>
                                    </tr>
                                    <tr><th> Serial </th><td>{{ $detailpage->serial }}</td></tr><tr><th> Smart </th><td>{{ $detailpage->smart }}</td></tr><tr><th> Modelo </th><td>{{ $detailpage->modelo }}</td></tr><tr><th> Categoria </th><td>{{ $detailpage->categoria }}</td></tr><tr><th> Quantidade </th><td>{{ $detailpage->qtd }}</td></tr><tr><th> Nota Fiscal </th><td>{{ $detailpage->nf }}</td></tr><tr><th> Status </th><td>{{ $detailpage->status }}</td></tr><tr><th> Data de Recebimento </th><td>{{ $detailpage->dataRecebimento }}</td></tr><tr><th> Observações </th><td>{{ $detailpage->obs }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
