<?php

namespace MasterProflot\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use MasterProflot\Http\Requests;
use MasterProflot\Http\Controllers\Controller;
use MasterProflot\Repositories\DisciplinaRepository;
use MasterProflot\Repositories\FluxoRepository;
use MasterProflot\Repositories\PeriodoRepository;

class DisciplinaController extends Controller
{

    private $repository;
    private $fluxoRepository;
    private $periodoRepository;

    public function __construct(DisciplinaRepository $repository, FluxoRepository $fluxoRepository, PeriodoRepository $periodoRepository) {
        $this->repository = $repository;
        $this->fluxoRepository = $fluxoRepository;
        $this->periodoRepository = $periodoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$disciplinas = $this->repository->paginate(10);
        $disciplinas = DB::table('disciplinas')->where('active', '=', 1)->post();
        return view('admin.disciplinas.index', compact('disciplinas'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fluxos = $this->fluxoRepository->lists(['description', 'id']);
        $periodos = $this->periodoRepository->lists(['description', 'id']);
        return view('admin.disciplinas.create', compact('fluxos', 'periodos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.disciplinas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
