<tr>
    <td>{{$answer->name}}</td>
    <td>{{$answer->weight}}</td>
    <td>
        <div class="btn-group">
            <a href="{{route("admin.questions.changeposition",[$question,$answer,"type" => "up"])}}" class="btn btn-default" @if($answer->position == 1) disabled @endif ><span class="glyphicon glyphicon-arrow-up"></span></a>
            <a href="{{route("admin.questions.changeposition",[$question,$answer,"type" => "down"])}}" class="btn btn-default" @if($answer->position == ($total_answers)) disabled @endif ><span class="glyphicon glyphicon-arrow-down"></span></a>
        </div>
        <button data-toggle="modal" type="button" data-target="#edit_answer_{{$answer->id}}" class="btn btn-primary">Wijzig</button>
        <a href="#" class="btn btn-danger">Verwijder</a>
    </td>
</tr>



<div class="modal fade" id="edit_answer_{{$answer->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Wijzig antwoord</h4>
        </div>
        {!! Form::open(["url" => route("admin.questions.answer.edit",[$question->id,$answer->id])]) !!}
        <div class="modal-body">
                @if($amount_competences > 1)
                    <p class="alert alert-danger"><b>LET OP</b> Deze vraag is aan meerdere competenties gekoppeld! Dit kan daarom consequenties hebben voor meerdere competenties.</p>
                @endif

                @if(isset($form_id))
                    <input type="hidden" name="form_id" value="{{$form_id}}">
                @endif
                @if(isset($competence_id))
                    <input type="hidden" name="competence_id" value="{{$competence_id}}">
                @endif
                <div class="form-group">
                    {!! Form::label("name","Antwoord") !!}
                    {!! Form::text("name",$answer->name,["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("weight","Waarde") !!}
                    {!! Form::text("weight",$answer->weight,["class" => "form-control"]) !!}
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-primary">Opslaan</button>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>


