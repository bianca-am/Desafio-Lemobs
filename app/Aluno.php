<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{   
    protected $table = 'aluno';

    protected function endereco(){
        return $this->hasOne('App\Endereco', 'foreign_key');
    }
}
