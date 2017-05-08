@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Buscar Aluno</h1>
    </div>
  </div>
  <?php $count=1; ?>
  @foreach($alunos as $aluno)
  <div class="row">
    <h3>{{$count++}}º Aluno - {{$aluno->nome}}</h3>
    <form class="" action="{{route('aluno.update',$aluno->id)}}" method="post">
      <input name="_method" type="hidden" value="PATCH">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}">
          <input type="text" name="nome" class="form-control disabled" value="{{$aluno->nome}}" disabled>
          {!! $errors->first('nome','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('matricula')) ? $errors->first('matricula') : '' }}">
          <input type="text" name="matricula" class="form-control disabled" value="{{$aluno->matricula}}" disabled>
          {!! $errors->first('matricula','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('nota')) ? $errors->first('nota') : '' }}">
          <input type="number" step="0.01" name="nota" class="form-control disabled" value="{{$aluno->nota}}" disabled>
          {!! $errors->first('nota','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('endereco_id')) ? $errors->first('endereco_id') : '' }}">
          <input type="hidden" name="endereco_id" class="form-control disabled" value="{{$aluno->endereco_id}}" disabled>
          {!! $errors->first('endereco_id','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('rua')) ? $errors->first('rua') : '' }}">
          <input type="text" name="rua" class="form-control disabled" value="{{$aluno->rua}}" disabled>
          {!! $errors->first('rua','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('numero')) ? $errors->first('numero') : '' }}">
          <input type="number" name="numero" class="form-control disabled" value="{{$aluno->numero}}" disabled>
          {!! $errors->first('numero','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('bairro')) ? $errors->first('bairro') : '' }}">
          <input type="text" name="bairro" class="form-control disabled" value="{{$aluno->bairro}}" disabled>
          {!! $errors->first('bairro','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group">
      </div>
    </form>
  </div>
  @endforeach
  @stop