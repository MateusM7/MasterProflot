<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\horarioRepository;
use MasterProflot\Models\Horario;
use MasterProflot\Validators\HorarioValidator;

/**
 * Class HorarioRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class HorarioRepositoryEloquent extends BaseRepository implements HorarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Horario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
