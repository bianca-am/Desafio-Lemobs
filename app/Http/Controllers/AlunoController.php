<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('aluno.index',['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validação
        $this->validate($request,[
            'nome'=> 'bail|required|max:255',
            'matricula'=>'bail|required|max:45',
            'nota'=> 'required',
            'endereco_id'=> 'required'
        ]);
        // Aluno recebe os valores da tela
        $aluno = new aluno;
        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->nota = $request->nota;
        $aluno->endereco_id= $request->endereco_id;
        $aluno->save();
        return redirect()->route('aluno.index')->with('alert-success','Aluno criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $nome
     * @return \Illuminate\Http\Response
     */
    public function show($nome)
    {
        // buscando aluno
        $alunos = Aluno::where('nome', 'like', 'teste')->get();
        return view('aluno.search',['alunos' => $alunos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('aluno.edit',compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // validação
        $this->validate($request,[
          'nome'=> 'bail|required|max:255',
          'matricula'=>'bail|required|max:45',
          'nota'=> 'required',
          'endereco_id'=> 'required'
        ]);

        // Aluno recebe os valores da tela
        $aluno = Aluno::findOrFail($id);
        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->nota = $request->nota;
        $aluno->endereco_id= $request->endereco_id;
        $aluno->save();

        return redirect()->route('aluno.index')->with('alert-success','As alterações foram salvas com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('aluno.index')->with('alert-success','Aluno foi deletado com sucesso.');
    
    }
}
