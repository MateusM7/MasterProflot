<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Professor extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    'tipos_id',
    'cursos_id',
    'name',
    'email',
    'phone',
    'birth_date',
    'sex',
    'username',
    'password',
    'regiment',
    'lates'

    ];

    public function tipos(){
        return $this->ManyToMany(Tipo::class);
          // ou seja, um professor possui á varios tipos

    }

    public function disciplinas(){
         return $this->ManyToMany(Disciplinas::class);
          // ou seja, um professor ministra varias disciplinas.   
    }

    public function salas(){
         return $this->ManyToMany(Sala::class);
          // ou seja, um professor esta em varias salas.   
    }
}