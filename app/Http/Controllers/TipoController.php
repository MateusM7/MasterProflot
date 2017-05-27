<?php

namespace MasterProflot\Http\Controllers;

use Illuminate\Http\Request;

use MasterProflot\Http\Requests;
use MasterProflot\Http\Controllers\Controller;
use MasterProflot\Repositories\TipoRepository;
use MasterProflot\Http\Requests\AdminTipoRequest;

class TipoController extends Controller
{
    

     private $repository;
    
    public function __construct( TipoRepository $repository){

            $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = $this->repository->paginate(10);
        return view('admin.tipos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminTipoRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.tipos.index');
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
         $tipo = $this->repository->find($id);
         return view('admin.tipos.edit',compact('tipo'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminTipoRequest $request, $id)
    {
        $data =$request->all();
        $this->repository->update($data,$id);
        return redirect()->route('admin.tipos.index'); 
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
