@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Create Aluno</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="" action="{{route('aluno.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}">
          <input type="text" name="nome" class="form-control" placeholder="Digite o Nome do Aluno">
          {!! $errors->first('nome','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('matricula')) ? $errors->first('matricula') : '' }}">
          <input type="text" name="matricula" class="form-control" placeholder="Digite a Matrícula do Aluno">
          {!! $errors->first('matricula','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('nota')) ? $errors->first('nota') : '' }}">
          <input type="number" step="0.01" name="nota" class="form-control" placeholder="Digite a Nota">
          {!! $errors->first('nota','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('rua')) ? $errors->first('rua') : '' }}">
          <input type="text" name="rua" class="form-control" placeholder="Digite ">
          {!! $errors->first('rua','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('numero')) ? $errors->first('numero') : '' }}">
          <input type="number" name="numero" class="form-control" placeholder="Digite ">
          {!! $errors->first('numero','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('bairro')) ? $errors->first('bairro') : '' }}">
          <input type="text" name="bairro" class="form-control" placeholder="Digite ">
          {!! $errors->first('bairro','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Criar">
        </div>
      </form>
    </div>
  </div>
  @stop