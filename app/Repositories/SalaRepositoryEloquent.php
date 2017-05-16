<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\SalaRepository;
use MasterProflot\Models\Sala;
use MasterProflot\Validators\SalaValidator;

/**
 * Class SalaRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class SalaRepositoryEloquent extends BaseRepository implements SalaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sala::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
