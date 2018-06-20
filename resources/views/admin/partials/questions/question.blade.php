<tr>
    <td>{{$question->name}}</td>
    <td>{{$question->description}}</td>
    <td>{{$question->questionLabel}}</td>
    <td>
        <a href="{{route("admin.questions.show",[$question->id,"form_id" => @$form_id,"competence_id" => @$competence_id])}}" class="btn btn-primary">Inzien</a>
        <button type="button" class="btn btn-danger" id="delete_{{$question->id}}">Verwijderen</button>
    </td>
</tr>

@section("scripts")
@parent
<script>
$("#delete_{{$question->id}}").prettydeletion({
    url : "{!! route("admin.questions.delete",[$question->id,'form_id'=>@$form_id,'competence_id'=>@$competence_id]) !!}",
    csrf_token: "{{csrf_token()}}",
});
</script>

@stop