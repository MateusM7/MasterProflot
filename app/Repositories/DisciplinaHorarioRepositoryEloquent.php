<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\DisciplinaHorarioRepository;
use MasterProflot\Models\DisciplinaHorario;
use MasterProflot\Validators\DisciplinaHorarioValidator;

/**
 * Class DisciplinaHorarioRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class DisciplinaHorarioRepositoryEloquent extends BaseRepository implements DisciplinaHorarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return DisciplinaHorario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
