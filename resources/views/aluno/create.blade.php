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
          <input type="text" name="nota" class="form-control" placeholder="Digite a Nota">
          {!! $errors->first('nota','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('endereco_id')) ? $errors->first('endereco_id') : '' }}">
          <input type="text" name="endereco_id" class="form-control" placeholder="Digite ">
          {!! $errors->first('endereco_id','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Criar">
        </div>
      </form>
    </div>
  </div>
  @stop