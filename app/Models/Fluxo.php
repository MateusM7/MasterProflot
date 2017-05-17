<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Fluxo extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    'cursos_id',
    'description'

    ];

    public function curso(){
         return $this->hasOne(Curso::class);
          // ou seja, um fluxo  pertence a um curso.   
      }

      public function disciplinas(){
         return $this->hasMany(Disciplina::class);
          // ou seja, um fluxo  tem varias disciplinas.   
      }


}
