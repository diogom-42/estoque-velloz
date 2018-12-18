<div class="form-group {{ $errors->has('serial') ? 'has-error' : ''}}">
    <label for="serial" class="control-label">{{ 'Serial' }}</label>
    <input class="form-control" name="serial" type="text" id="serial">
    {!! $errors->first('serial', '<p class="help-block">:message</p>') !!}
    {{ ($errors->has('serial')) ? $errors->first('serial') : '' }}<br>
</div>
<div class="form-group {{ $errors->has('smart') ? 'has-error' : ''}}">
    <label for="smart" class="control-label">{{ 'Smart' }}</label>
    <input class="form-control" name="smart" type="text" id="smart">
    {!! $errors->first('smart', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
    <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
    <input class="form-control" name="modelo" type="text" id="modelo">
    {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('categoria') ? 'has-error' : ''}}">
    <label for="categoria" class="control-label">{{ 'Categoria' }}</label>
    <input class="form-control" name="categoria" type="text" id="categoria">
    {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('qtd') ? 'has-error' : ''}}">
    <label for="qtd" class="control-label">{{ 'Quantidade' }}</label>
    <input class="form-control" name="qtd" type="text" id="qtd" >
    {!! $errors->first('qtd', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nf') ? 'has-error' : ''}}">
    <label for="nf" class="control-label">{{ 'Nota Fiscal' }}</label>
    <input class="form-control" name="nf" type="text" id="nf">
    {!! $errors->first('nf', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="status" type="text" id="status">
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dataRecebimento') ? 'has-error' : ''}}">
    <label for="dataRecebimento" class="control-label">{{ 'Data de Recebimento' }}</label>
    <input class="form-control" name="dataRecebimento" type="text" id="dataRecebimento">
    {!! $errors->first('dataRecebimento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('obs') ? 'has-error' : ''}}">
    <label for="obs" class="control-label">{{ 'Observações' }}</label>
    <input class="form-control" name="obs" type="text" id="obs">
    {!! $errors->first('obs', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
