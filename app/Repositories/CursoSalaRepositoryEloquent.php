<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\CursoSalaRepository;
use MasterProflot\Models\CursoSala;
use MasterProflot\Validators\CursoSalaValidator;

/**
 * Class CursoSalaRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class CursoSalaRepositoryEloquent extends BaseRepository implements CursoSalaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CursoSala::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
