@extends('layouts.app')

@section('content')

  
      
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Produtos</div>
                    <div class="card-body">
                        <a href="{{ url('/produtos/create') }}" class="btn btn-success btn-sm" title="Add New Produto">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/produtos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
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
                                        <th>#</th><th>Serial</th><th>Smart</th><th>Modelo</th><th>Categoria</th><th>Quantidade</th><th>Nota Fiscal</th><th>Status</th><th>Data de Recebimento</th><th>Observações</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($todosprodutos as $produto)
                                    <tr>
                                        <td>{{ $produto->id }}</td><td>{{ $produto->serial }}</td><td>{{ $produto->smart }}</td><td>{{ $produto->modelo }}</td><td>{{ $produto->categoria }}</td><td>{{ $produto->qtd }}</td><td>{{ $produto->nf }}</td><td>{{ $produto->status }}</td><td>{{ $produto->dataRecebimento }}</td><td>{{ $produto->obs }}</td>
                                        <td>
                                            <a href="{{ url('/produtos/' . $produto->id) }}" title="View Produto"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/produtos/' . $produto->id . '/edit') }}" title="Edit Produto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/produtos' . '/' . $produto->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Produto" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
