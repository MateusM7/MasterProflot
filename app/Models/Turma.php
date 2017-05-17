<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Turma extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
     'number'
    ];

    public function disciplina(){
         return $this->hasOne(Disciplina::class);
          // ou seja, uma turma  pertence a uma disciplina.   
      } 

}
