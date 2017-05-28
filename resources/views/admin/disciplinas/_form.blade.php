<div class="forme-grup">
 	{!! Form::label('Fluxo','Fluxo:') !!}
 	{!! Form::select('fluxos_id',$fluxos,null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Periodo','Periodo:') !!}
 	{!! Form::select('periodos_id',$periodos,null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Nome','Nome:') !!}
 	{!! Form::text('name',null,['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Optativa','Optativa:') !!}
 	{!! Form::text('optativa','Não',['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Pratica','Pratica:') !!}
 	{!! Form::text('pratica','Sim',['class'=>'form-control']) !!}
 </div>
 <div class="forme-grup">
 	{!! Form::label('Carga Horaria','Carga Horária:') !!}
 	{!! Form::text('carga_horaria',null,['class'=>'form-control']) !!}
 </div>
 
 <br> 