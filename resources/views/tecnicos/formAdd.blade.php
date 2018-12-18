<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="nome" type="text" id="nome"  >
    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>

</div>
<div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    <label for="celular" class="control-label">{{ 'Celular' }}</label>
    <input class="form-control" name="celular" type="text" id="celular"  >
    {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
    {{ ($errors->has('celular')) ? $errors->first('celular') : '' }}<br>

</div>
<div class="form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
    <label for="cpf" class="control-label">{{ 'CPF' }}</label>
    <input class="form-control" name="cpf" type="text" id="cpf"  >
    {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
    {{ ($errors->has('cpf')) ? $errors->first('cpf') : '' }}<br>

</div>
<div class="form-group {{ $errors->has('uf') ? 'has-error' : ''}}">
    <label for="uf" class="control-label">{{ 'UF' }}</label>
    <select class="form-control" name="uf" type="text" id="uf" >
    <option value="sp">SP</option>
    <option value="rj">RJ</option>
    </select>
    {!! $errors->first('uf', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ativo') ? 'has-error' : ''}}">
    <label for="ativo" class="control-label">{{ 'Ativo' }}</label>
    <select class="form-control" name="ativo" type="text" id="ativo" >
    <option value="s">Sim</option>
    <option value="n">Não</option>
    </select>
    {!! $errors->first('ativo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
