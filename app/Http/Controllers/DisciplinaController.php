<?php

namespace MasterProflot\Http\Controllers;

use Illuminate\Http\Request;


use MasterProflot\Http\Requests;
use MasterProflot\Http\Controllers\Controller;
use MasterProflot\Repositories\DisciplinaRepository;
use MasterProflot\Repositories\FluxoRepository;
use MasterProflot\Repositories\PeriodoRepository;

use MasterProflot\Models\Disciplina;

class DisciplinaController extends Controller
{

    private $repository;
    private $fluxoRepository;
    private $periodoRepository;
    private $disciplinas;

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

        $disciplinas = $this->repository->list_active();

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
        $disciplina = $this->repository->find($id);

        return view('admin.disciplinas.show', compact('disciplina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fluxos = $this->fluxoRepository->lists(['description', 'id']);
        $periodos = $this->periodoRepository->lists(['description', 'id']);
        $disciplina = $this->repository->find($id);
        return view('admin.disciplinas.edit', compact('disciplina', 'fluxos', 'periodos'));
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
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.disciplinas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Deixa o campo active falso (0).
        $disciplina = Disciplina::find($id);
        $disciplina->active = 0;
        $disciplina->save();
        return redirect()->route('admin.disciplinas.index');
        
    }
}
