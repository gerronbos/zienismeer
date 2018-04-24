{!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('name','Titel') !!}
        {!! Form::text('name',$competence->name,['class'=>'form-control typeahead','autocomplete'=>'off','data-provide'=>'typeahead']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','Omschrijving') !!}
        {!! Form::textarea('description',$competence->description,['class'=>'form-control']) !!}
    </div>
    <a href="{{route('admin.form.competences',[$form->id])}}" class="btn btn-default">Annuleren</a>
    <button class="btn btn-primary">Opslaan</button>

{!! Form::close() !!}


