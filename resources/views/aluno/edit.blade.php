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
          <input type="number" name="endereco_id" class="form-control" value="{{$aluno->endereco_id}}">
          {!! $errors->first('endereco_id','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Salvar">
      </div>
    </form>
  </div>
  @stop