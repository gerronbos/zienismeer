<tr>
    <td>{{$f->name}}</td>
    <td>{{count($f->competences)}}</td>
    <td>@if($f->active) <span class="label label-success">Ja</span> @else <span class="label label-danger">Nee</span> @endif</td>
    <td><a href="{{route('admin.forms.show',[$f->id])}}" class="btn btn-primary">Inzien</a> <button class="btn btn-danger" id="delete_{{$f->id}}">Verwijderen</button> </td>
</tr>

@section("scripts")
@parent
<script>
$("#delete_{{$f->id}}").prettydeletion({
    url : "{!! route("admin.forms.delete",[$f->id]) !!}",
    csrf_token: "{{csrf_token()}}",
    password: true,
});
</script>

@stop