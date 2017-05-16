<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\DisciplinaProfessorSalaRepository;
use MasterProflot\Models\DisciplinaProfessorSala;
use MasterProflot\Validators\DisciplinaProfessorSalaValidator;

/**
 * Class DisciplinaProfessorSalaRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class DisciplinaProfessorSalaRepositoryEloquent extends BaseRepository implements DisciplinaProfessorSalaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return DisciplinaProfessorSala::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
