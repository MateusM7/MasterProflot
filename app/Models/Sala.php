<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Sala extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    'campus',
    'capacity',
    'mumber'

    ];
    public function cursos(){
    	return $this->belongsToMany(Curso::class);
    	// Uma Sala pertence varias cursos.
    }

    public function disciplina(){
         return $this->ManyToMany(Disciplina::class);
          // ou seja, uma sala possui varias disciplinas.   
    }

    public function professores(){
         return $this->ManyToMany(Professor::class);
          // ou seja, uma sala possui varios professores.   
    }

}
