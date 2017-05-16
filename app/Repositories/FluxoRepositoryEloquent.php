<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\FluxoRepository;
use MasterProflot\Models\Fluxo;
use MasterProflot\Validators\FluxoValidator;

/**
 * Class FluxoRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class FluxoRepositoryEloquent extends BaseRepository implements FluxoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Fluxo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
