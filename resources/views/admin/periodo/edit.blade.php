@extends('app')


@section('content')
<div class="container">
     <h3>Editando Periodo {{$periodo->description }} </h3>
       
         <div class="row">
            @include('errors._errors') <!-- Refatorando o form -->  
           
              <div class="col-xs-12 col-md-8">
                {!! Form::model($periodo, ['route'=>['admin.periodo.update', $periodo->id]]) !!}

                    @include('admin.periodo._form') <!-- Refatorando o form -->  

                   <div class="forme-grup">
                    {!! Form::submit('Atualizar',['class'=>'btn btn-primary']) !!}
                    
                  </div> 
                  
                {!! Form::close() !!}
                 
                </div>

        </div>
</div>   


@endsection