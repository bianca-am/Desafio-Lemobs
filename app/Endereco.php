<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'endereco';
    protected function aluno(){
        return $this->belongsTo('App\Aluno');
    }
}
