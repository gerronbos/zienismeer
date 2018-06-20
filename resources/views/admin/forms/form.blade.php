{!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('name','Titel') !!}
        {!! Form::text('name',$form->name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('active','Actief') !!}
        {!! Form::select('active',[1=>"Ja",0=>"Nee"],$form->name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type','Type formulier') !!}
        {!! Form::select('type',$types,$form->name,['class'=>'form-control']) !!}
    </div>

    <a href="{{route('admin.forms')}}" class="btn btn-default">Annuleren</a>
    <button class="btn btn-primary">Opslaan</button>

{!! Form::close() !!}