@extends('app')


@section('content')
<div class="container">
     <h3>Cria Novo Periodo</h3>
       
         <div class="row">
           @include('errors._errors')
           
              <div class="col-xs-12 col-md-8">
                {!! Form::open(['route'=>'admin.periodo.store','class'=>'form']) !!}

                    @include('admin.periodo._form') <!-- Refatorando o form --> 

                   <div class="forme-grup">
                    {!! Form::submit('Criar nova categoria',['class'=>'btn btn-primary']) !!}
                    
                  </div> 
                  
                {!! Form::close() !!}
                 
                </div>

        </div>
</div>   


@endsection