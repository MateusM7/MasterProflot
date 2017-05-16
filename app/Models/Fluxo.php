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

}
