<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tipo extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    'description'
    ];

    public function alunos(){
    	return $this->hasMany(Aluno::class);
          // ou seja, um tipo possui varios alunos    
    }

    public function funcionarios(){
    	return $this->hasMany(Funcionario::class);
          // ou seja, um tipo possui varios funcionario    
    }

    public function professores(){
        return $this->ManyToMany(Professor::class);
          // ou seja, mais de um tipo pertecem a um professor    
    }



}
