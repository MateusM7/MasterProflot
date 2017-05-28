<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\PeriodoRepository;
use MasterProflot\Models\Periodo;
use MasterProflot\Validators\PeriodoValidator;

/**
 * Class PeriodoRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class PeriodoRepositoryEloquent extends BaseRepository implements PeriodoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Periodo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

        public function lists ($value, $key = null){
        return $this->model->lists('description', 'id');
    }
}
