<?php

namespace MasterProflot\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use MasterProflot\Repositories\DisciplinaRepository;
use MasterProflot\Models\Disciplina;
use MasterProflot\Validators\DisciplinaValidator;

use Illuminate\Support\Facades\DB;

/**
 * Class DisciplinaRepositoryEloquent
 * @package namespace MasterProflot\Repositories;
 */
class DisciplinaRepositoryEloquent extends BaseRepository implements DisciplinaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Disciplina::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }



    //Retorna somente as disciplinas ativas
    public function list_active() {
        $disciplinas = DB::table('disciplinas')
        ->where('active', '=', true)->get();
        return $disciplinas;
    }
}
