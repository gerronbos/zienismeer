@extends('templates.admin')

<?php
$title = 'Competenties';
?>
@section("content")

<table class="table table-responsive">
    <tr>
        <th>Titel</th>
        <th>Omschrijving</th>
        <th>Gekoppelde formulieren</th>
        <th>Vragen</th>
        <th>Opties</th>
    </tr>
    @foreach($competences as $competence)
        <tr>
            <td>{{$competence->name}}</td>
            <td>{{$competence->description}}</td>
            <td>1</td>
            <td>{{$competence->questions()->count()}}</td>
            <td><button class="btn btn-primary">Wijzig</button><button class="btn btn-danger">Verwijder</button> </td>
        </tr>
    @endforeach
</table>
<div style="text-align: right">
{{ $competences->links() }}
</div>

@stop