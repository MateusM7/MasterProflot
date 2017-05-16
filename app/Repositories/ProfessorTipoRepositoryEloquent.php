<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\ProfessorTipoRepository;
use MasterProflot\Models\ProfessorTipo;
use MasterProflot\Validators\ProfessorTipoValidator;

/**
 * Class ProfessorTipoRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class ProfessorTipoRepositoryEloquent extends BaseRepository implements ProfessorTipoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProfessorTipo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
