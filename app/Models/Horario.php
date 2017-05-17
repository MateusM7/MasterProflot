<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Horario extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    'start_time',
    'end_time'


    ];
    public function disciplinas(){
         return $this->ManyToMany(Disciplina::class);
          // ou seja, uma Horario tem varias disciplina.	
    }

}
