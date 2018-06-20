<tr>
    <td>{{$competence->name}}</td>
    <td style="width:50%;">{{$competence->description}}</td>
    <td>1</td>
    <td>{{$competence->questions()->count()}}</td>
    <td><a href="{{route("admin.competences.show",[$competence->id])}}" class="btn btn-primary">Inzien</a><button class="btn btn-danger">Verwijder</button> </td>
</tr>