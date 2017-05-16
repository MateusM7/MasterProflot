<?php

namespace MasterProflot\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class DisciplinaHorario extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
         'disciplinas_id',
         'horarios_id'

    ];

}
