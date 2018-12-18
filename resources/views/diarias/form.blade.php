<div class="form-group" style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
<div class="form-group {{ $errors->has('baixa') ? 'has-error' : ''}}" style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="baixa" class="control-label">{{ 'Baixa Activia' }}</label>
    <select class="form-control" name="baixa" type="text" id="baixa" value="{{ $editpage->baixa }}" >
            <option selected>Selecione a Baixa</option>
            <option value="Habilitado">Habilitado</option>
            <option value="Cancelado">Cancelado</option>
            <option value="Reagendado">Reagendado</option>
            <option value="Ausente">Ausente</option>
        </select>
    {!! $errors->first('baixa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="data" class="control-label">{{ 'Data' }}</label>
    <input class="form-control" name="data" type="text" id="datepicker" value="{{ $editpage->data }}"  >
    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
    {{ ($errors->has('data')) ? $errors->first('data') : '' }}<br>
</div>
<div class="form-group {{ $errors->has('cidade') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="cidade" class="control-label">{{ 'Cidade' }}</label>
    <input class="form-control" name="cidade" type="text" id="cidade" value="{{ $editpage->cidade }}"   >
    {!! $errors->first('cidade', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contrato') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="contrato" class="control-label">{{ 'Contrato' }}</label>
    <input class="form-control" name="contrato" type="text" id="contrato" value="{{ $editpage->contrato }}" >
    {!! $errors->first('contrato', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cliente') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
    <input class="form-control" name="cliente" type="text" id="cliente" value="{{ $editpage->cliente }}" >
    {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="endereco" class="control-label">{{ 'Endereço' }}</label>
    <input class="form-control" name="endereco" type="text" id="endereco" value="{{ $editpage->endereco }}" >
    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tp_serv') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="tp_serv" class="control-label">{{ 'Tipo de serviço' }}</label>
    <select class="form-control" name="tp_serv" type="text" id="tp_serv" value="{{ $editpage->tp_serv }}" >
    <option selected>Selecione o Tipo de Serviço</option>
              @foreach ($todosservicos as $servico)
              <option value="{{ $servico->id }}">{{ $servico->tipo }}</option>
              @endforeach
</select>
    {!! $errors->first('tp_serv', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('os') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="os" class="control-label">{{ 'OS' }}</label>
    <input class="form-control" name="os" type="text" id="os" value="{{ $editpage->os }}" >
    {!! $errors->first('os', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('periodo') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="periodo" class="control-label">{{ 'Período' }}</label>
    <select class="form-control" name="periodo" type="text" id="periodo" value="{{ $editpage->periodo }}"   >
    <option selected>Selecione o Horário</option>
              @foreach ($todoshorarios as $horario)
              <option value="{{ $horario->id }}">{{ $horario->horario }}</option>
              @endforeach
</select>
    {!! $errors->first('periodo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nome_tecnico') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="nome_tecnico" class="control-label">{{ 'Técnico' }}</label>
    <select class="form-control" name="nome_tecnico" type="text" id="nome_tecnico" value="{{ $editpage->nome_tecnico }}" >
    <option selected>Selecione o Técnico</option>
              @foreach ($todostecnicos as $tecnico)
              <option value="{{ $tecnico->id }}">{{ $tecnico->nome }}</option>
              @endforeach
         </select>
    {!! $errors->first('nome_tecnico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('obs') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="obs" class="control-label">{{ 'Observações' }}</label>
    <input class="form-control" name="obs" type="text" id="obs" value="{{ $editpage->obs }}" >
    {!! $errors->first('obs', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serial1') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="serial1" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial1" type="text" id="serial1" value="{{ $editpage->serial1 }}" >
    {!! $errors->first('serial1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serial2') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="serial2" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial2" type="text" id="serial2" value="{{ $editpage->serial2 }}" >
    {!! $errors->first('serial2', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serial3') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="serial3" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial3" type="text" id="serial3" value="{{ $editpage->serial3 }}" >
    {!! $errors->first('serial3', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serial4') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="serial4" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial4" type="text" id="serial4" value="{{ $editpage->serial4 }}" >
    {!! $errors->first('serial4', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serial5') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="serial5" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial5" type="text" id="serial5" value="{{ $editpage->serial5 }}" >
    {!! $errors->first('serial5', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serial6') ? 'has-error' : ''}}"style=" margin-right: 0px;margin-left: 0px;margin-bottom: 10px;">
    <label for="serial6" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial6" type="text" id="serial6" value="{{ $editpage->serial6 }}" >
    {!! $errors->first('serial6', '<p class="help-block">:message</p>') !!}
</div>




