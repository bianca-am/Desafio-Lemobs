<?php

use Illuminate\Database\Seeder;
use App\Endereco;
use App\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aluno')->delete();
        DB::table('endereco')->delete();

        $endereco1 = Endereco::create([
            'rua' => 'rua teste',
            'numero' => 1,
            'bairro' => 'centro'
        ]);

        $aluno1 = Aluno::create([
            'nome' => 'teste2',
            'matricula' => 'mat1234',
            'nota' => 10,
            'endereco_id' => $endereco1->id
        ]);
    }
}
