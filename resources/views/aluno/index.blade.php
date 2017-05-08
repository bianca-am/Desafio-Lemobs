@extends('master')
  @section('content')
    <div class="row">
    <div class="col-md-12">
        <h1>Notas</h1>
    </div>
    </div>
    <div class="row">
    <table class="table table-striped">
        <tr>
        <th>Nome</th>
        <th>Nota</th>
        <th>Opções</th>
        </tr>
        <a href="{{route('aluno.create')}}" class="btn btn-info pull-right">Criar Aluno</a><br><br>
        @foreach($alunos as $aluno)
            <tr>
                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->nota}}</td>
                <td>
                    <form class="" action="{{route('aluno.destroy',$aluno->id)}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="{{route('aluno.edit',$aluno->id)}}" class="btn btn-primary">Editar</a>
                        <input type="submit" class="btn btn-danger" onclick="return confirm('Deseja deletar?');" name="name" value="Deletar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
  @stop