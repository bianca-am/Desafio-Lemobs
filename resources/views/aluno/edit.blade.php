@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Edit Aluno</h1>
    </div>
  </div>
  <div class="row">
    <form class="" action="{{route('aluno.update',$aluno->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}">
          <input type="text" name="nome" class="form-control" value="{{$aluno->nome}}">
          {!! $errors->first('nome','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('matricula')) ? $errors->first('matricula') : '' }}">
          <input type="text" name="matricula" class="form-control" value="{{$aluno->matricula}}">
          {!! $errors->first('matricula','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('nota')) ? $errors->first('nota') : '' }}">
          <input type="number" step="0.01" name="nota" class="form-control" value="{{$aluno->nota}}">
          {!! $errors->first('nota','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('endereco_id')) ? $errors->first('endereco_id') : '' }}">
          <input type="hidden" name="endereco_id" class="form-control" value="{{$aluno->endereco_id}}">
          {!! $errors->first('endereco_id','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('rua')) ? $errors->first('rua') : '' }}">
          <input type="text" name="rua" class="form-control" value="{{$aluno->rua}}">
          {!! $errors->first('rua','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('numero')) ? $errors->first('numero') : '' }}">
          <input type="number" name="numero" class="form-control" value="{{$aluno->numero}}">
          {!! $errors->first('numero','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('bairro')) ? $errors->first('bairro') : '' }}">
          <input type="text" name="bairro" class="form-control" value="{{$aluno->bairro}}">
          {!! $errors->first('bairro','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Salvar">
      </div>
    </form>
  </div>
  @stop