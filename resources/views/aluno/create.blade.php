@extends('master')
  @section('content')
  <div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">Cadastrar Aluno</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <form class="" action="{{route('aluno.store')}}" method="post">
            {{csrf_field()}}
            <h4>Nome</h4>
            <div class="form-group{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}">
              <input type="text" name="nome" class="form-control" placeholder="Digite o Nome do Aluno">
              {!! $errors->first('nome','<p class="help-block">:message</p>') !!}
            </div>
            <h4>Matrícula</h4>
            <div class="form-group{{ ($errors->has('matricula')) ? $errors->first('matricula') : '' }}">
              <input type="text" name="matricula" class="form-control" placeholder="Digite a Matrícula do Aluno">
              {!! $errors->first('matricula','<p class="help-block">:message</p>') !!}
            </div>
            <h4>Nota</h4>
            <div class="form-group{{ ($errors->has('nota')) ? $errors->first('nota') : '' }}">
              <input type="number" step="0.01" name="nota" class="form-control" placeholder="Digite a Nota">
              {!! $errors->first('nota','<p class="help-block">:message</p>') !!}
            </div>
            <h4>Rua</h4>
            <div class="form-group{{ ($errors->has('rua')) ? $errors->first('rua') : '' }}">
              <input type="text" name="rua" class="form-control" placeholder="Digite a rua">
              {!! $errors->first('rua','<p class="help-block">:message</p>') !!}
            </div>
            <h4>Número</h4>
            <div class="form-group{{ ($errors->has('numero')) ? $errors->first('numero') : '' }}">
              <input type="number" name="numero" class="form-control" placeholder="Digite o número">
              {!! $errors->first('numero','<p class="help-block">:message</p>') !!}
            </div>
            <h4>Bairro</h4>
            <div class="form-group{{ ($errors->has('bairro')) ? $errors->first('bairro') : '' }}">
              <input type="text" name="bairro" class="form-control" placeholder="Digite o bairro">
              {!! $errors->first('bairro','<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success" value="Criar">
            </div>
          </form>
        </div>
      </div>
    </div>
  @stop