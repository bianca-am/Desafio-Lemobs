@extends('master')
  @section('content')
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Resultados da busca por "{{$nome}}"</h3>
    </div>
    <div class="panel-body">
      <ul class="list-group">
          <?php $count=1; ?>
          @foreach($alunos as $aluno)
          <li class="list-group-item">
            <div class="container-fluid">
              <div class="row">
                <h4>{{$count++}}º Aluno - {{$aluno->nome}}</h4>
                <form class="form-group">
                  <input name="_method" type="hidden" value="PATCH">
                  {{csrf_field()}}
                  <div class="form-group{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}">
                      <h5>Nome</h5>
                      <input type="text" name="nome" class="form-control disabled" value="{{$aluno->nome}}" disabled>
                      {!! $errors->first('nome','<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('matricula')) ? $errors->first('matricula') : '' }}">
                      <h5>Matrícula</h5>
                      <input type="text" name="matricula" class="form-control disabled" value="{{$aluno->matricula}}" disabled>
                      {!! $errors->first('matricula','<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('nota')) ? $errors->first('nota') : '' }}">
                      <h5>Nota</h5>
                      <input type="number" step="0.01" name="nota" class="form-control disabled" value="{{$aluno->nota}}" disabled>
                      {!! $errors->first('nota','<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('endereco_id')) ? $errors->first('endereco_id') : '' }}">
                      <input type="hidden" name="endereco_id" class="form-control disabled" value="{{$aluno->endereco_id}}" disabled>
                      {!! $errors->first('endereco_id','<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('rua')) ? $errors->first('rua') : '' }}">
                      <h5>Rua</h5>
                      <input type="text" name="rua" class="form-control disabled" value="{{$aluno->rua}}" disabled>
                      {!! $errors->first('rua','<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('numero')) ? $errors->first('numero') : '' }}">
                      <h5>Número</h5>
                      <input type="number" name="numero" class="form-control disabled" value="{{$aluno->numero}}" disabled>
                      {!! $errors->first('numero','<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group{{ ($errors->has('bairro')) ? $errors->first('bairro') : '' }}">
                      <h5>Bairro</h5>
                      <input type="text" name="bairro" class="form-control disabled" value="{{$aluno->bairro}}" disabled>
                      {!! $errors->first('bairro','<p class="help-block">:message</p>') !!}
                    </div>
                    <div class="form-group">
                  </div>
                </form>
              </div>
            </div>
          </li> 
        @endforeach
       </ul>
    </div>
  </div>
  @stop