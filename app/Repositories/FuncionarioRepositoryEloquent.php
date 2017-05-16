<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\funcionarioRepository;
use MasterProflot\Models\Funcionario;
use MasterProflot\Validators\FuncionarioValidator;

/**
 * Class FuncionarioRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class FuncionarioRepositoryEloquent extends BaseRepository implements FuncionarioRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Funcionario::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
