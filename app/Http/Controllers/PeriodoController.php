<?php

namespace MasterProflot\Http\Controllers;

use Illuminate\Http\Request;

use MasterProflot\Http\Requests;
use MasterProflot\Http\Controllers\Controller;
use MasterProflot\Repositories\PeriodoRepository;
use MasterProflot\Http\Requests\AdminPeriodoRequest;
class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $repository;
    
    public function __construct( PeriodoRepository $repository){

            $this->repository = $repository;
    }

    public function index()
    {
        $periodos = $this->repository->paginate(10);
        return view('admin.periodo.index',compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.periodo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPeriodoRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.periodo.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $periodo = $this->repository->find($id);
         return view('admin.periodo.edit',compact('periodo'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPeriodoRequest $request, $id)
    {
        $data =$request->all();
        $this->repository->update($data,$id);
        return redirect()->route('admin.periodo.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
