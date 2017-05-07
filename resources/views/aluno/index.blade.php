@extends('master')
  @section('content')
    <div class="row">
    <div class="col-md-12">
        <h1>Simple Ajax CRUD</h1>
    </div>
    </div>
    <div class="row">
    <table class="table table-striped">
        <tr>
        <th>No.</th>
        <th>Nome</th>
        <th>Nota</th>
        <th>Rua</th>
        </tr>
        <?php $no=1; ?>
        @foreach($alunos as $aluno)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->nota}}</td>
            </tr>
        @endforeach
    </table>
    </div>
  @stop