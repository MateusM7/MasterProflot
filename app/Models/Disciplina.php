<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Disciplina extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    'fluxos_id',
    'periodos_id',
    'name',
    'optativa',
    'pratica',
    'carga_horaria'

    ];

    public function fluxo(){
         return $this->hasOne(Fluxo::class);
          // ou seja, uma disciplina  pertence a um fluxo.   
      }

     public function periodo(){
         return $this->hasOne(Periodo::class);
          // ou seja, uma disciplina  pertence a um periodo.   
      } 

      public function turmas(){
         return $this->hasMany(Turma::class);
          // ou seja, uma disciplina tem varias turmas.	
    }
    
     public function horarios(){
         return $this->ManyToMany(Horario::class);
          // ou seja, uma disciplina tem varias horarios.	
    }

    public function professores(){
         return $this->ManyToMany(Professor::class);
          // ou seja, uma disciplina possui varios professroes.	
    }

    public function salas(){
         return $this->ManyToMany(Sala::class);
          // ou seja, uma disciplina tem varias salas.	
    }



}
