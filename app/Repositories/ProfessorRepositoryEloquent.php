<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\ProfessorRepository;
use MasterProflot\Models\Professor;
use MasterProflot\Validators\ProfessorValidator;

/**
 * Class ProfessorRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class ProfessorRepositoryEloquent extends BaseRepository implements ProfessorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Professor::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
