<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\TipoRepository;
use MasterProflot\Models\Tipo;
use MasterProflot\Validators\TipoValidator;

/**
 * Class TipoRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class TipoRepositoryEloquent extends BaseRepository implements TipoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Tipo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
