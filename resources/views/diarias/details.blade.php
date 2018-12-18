

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Diaria {{ $detailpage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/diarias') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/diarias/' . $detailpage->id . '/edit') }}" title="Edit Diaria"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('diarias' . '/' . $detailpage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Diaria" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detailpage->id }}</td>
                                    </tr>
                                    <tr><th> Data </th><td>{{ $detailpage->data }}</td></tr><tr><th> Cidade </th><td>{{ $detailpage->cidade }}</td></tr><tr><th> Contrato </th><td>{{ $detailpage->contrato }}</td></tr><tr><th> Cliente </th><td>{{ $detailpage->cliente }}</td></tr><tr><th> Tipo de Serviço </th><td>{{ $detailpage->tp_serv }}</td></tr><tr><th> Baixa Activia </th><td>{{ $detailpage->baixa }}</td></tr><tr><th> OS </th><td>{{ $detailpage->os }}</td></tr><tr><th> período </th><td>{{ $detailpage->periodo }}</td></tr><tr><th> Tecnico </th><td>{{ $detailpage->tecnico }}</td></tr><tr><th> Observações </th><td>{{ $detailpage->obs }}</td></tr><tr><th> Serial </th><td>{{ $detailpage->serial1 }}</td></tr><tr><th> Serial </th><td>{{ $detailpage->serial2 }}</td></tr><tr><th> Serial </th><td>{{ $detailpage->serial3 }}</td></tr><tr><th> Serial </th><td>{{ $detailpage->serial4 }}</td></tr><tr><th> Serial </th><td>{{ $detailpage->serial5 }}</td></tr><tr><th> Serial </th><td>{{ $detailpage->serial6 }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
