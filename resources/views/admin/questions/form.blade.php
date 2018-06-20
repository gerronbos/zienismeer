{!! Form::open() !!}
    @if(isset($form_id))
        <input type="hidden" name="form_id" value="{{$form_id}}">
    @endif
    @if(isset($competence_id))
        <input type="hidden" name="competence_id" value="{{$competence_id}}">
    @endif
    <div class="form-group">
        {!! Form::label('name','Vraag') !!}
        {!! Form::text('name',$question->name,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','Omschrijving') !!}
        {!! Form::textarea('description',$question->description,['class'=>'form-control']) !!}
    </div>
    {{-- <a href="{{route('admin.form.competences.questions',[$form->id,$competence->id])}}" class="btn btn-default">Annuleren</a> --}}
    <button class="btn btn-primary">Opslaan</button>
{!! Form::close() !!}