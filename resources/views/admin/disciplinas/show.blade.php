@extends('app')

@section('content')
<div class="container">
     <h3>Disciplinas</h3>
       
         <div class="row">
           
              <div class="col-xs-12 col-md-8">
                 <a href="" class="btn btn-default"><span class="glyphicon glyphicon-equalizer"></span>Periodo</a>
                 </br>
                 </br>
                 <table class="table table-bordered">
                    <thead>
                        <tr>
                           <th>Id</th>
                           <th>Disciplina</th>
                           <th>Fluxo</th>
                           <th>Período</th>
                           <th>Optativa</th>
                           <th>Pratica</th>
                           <th>Carga horaria</th>
                            <th colspan="3">Ações</th>
                            
                         </tr>
                    </thead>
                    <tbody>   
                           <tr>
                               <td>{{$disciplina->id}}</td>
                               <td>{{$disciplina->name}}</td>
                               <td>{{$disciplina->fluxos_id}}</td>
                               <td>{{$disciplina->periodos_id}}</td>
                               <td>{{$disciplina->optativa}}</td>
                               <td>{{$disciplina->pratica}}</td>
                               <td>{{$disciplina->carga_horaria}}</td>
                                <td><a href="{{ route('admin.disciplinas.edit',['id'=>$disciplina->id])}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                            </tr>
                                
                     </tbody>
                  </table>
                   
                </div>

        </div>
</div>   


@endsection