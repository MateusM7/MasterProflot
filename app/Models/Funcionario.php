<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Funcionario extends Model implements Transformable
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

    ];

     public function curso(){
         return $this->hasOne(Curso::class);
          // ou seja um funcionario pertence a um curso.  
    }
    public function tipo(){
         return $this->hasOne(Tipo::class);
          // um funcionario pertence a um tipo   
      }




}
