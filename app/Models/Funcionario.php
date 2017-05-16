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

}
