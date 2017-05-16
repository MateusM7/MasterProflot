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

}
