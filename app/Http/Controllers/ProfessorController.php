<?php

namespace MasterProflot\Http\Controllers;

use Illuminate\Http\Request;

use MasterProflot\Http\Requests;
use MasterProflot\Http\Controllers\Controller;
use MasterProflot\Repositories\ProfessorRepository;
use MasterProflot\Http\Requests\AdminProfessorRequest;
class ProfessorController extends Controller
{


    private $repository;

    public function __construct(ProfessorRepository $repository){

         $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = $this->repository->paginate(10);
        return view('admin.professores.index',compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.professores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminProfessorRequest $request)
    {
        /*$data = $request->all();
        dd($data);*/

        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.professores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = $this->repository->find($id);
        return view('admin.professores.visualizar',compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = $this->repository->find($id);
        return view('admin.professores.edit',compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminProfessorRequest  $request, $id)
    {
           $data = $request->all();
           $this->repository->update($data,$id);
           return redirect()->route('admin.professores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $this->repository->delete($id);
          return redirect()->route('admin.professores.index');
    }
}
