@extends('templates.admin')

<?php
$formnav = 'competence';
$title = ""

?>
@section("head")
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{{route('admin.competences.new',["form_id" => $form_id])}}" class="btn btn-primary pull-right" style="margin-bottom: 1%;">Competentie toevoegen</a>
        <table class="table table-bordered">
            <tr>
                <th>Naam</th>
                <th>Vragen</th>
                <th>Opties</th>
            </tr>
            @if(count($competences))
                @foreach($competences as $c)
                    <tr>
                        <td>{{$c->name}}</td>
                        <td>{{$c->questions()->count()}}</td>
                        <td> <input type="checkbox" data-toggle="toggle" data-on="Geselecteerd" data-off="Niet geselecteerd"> </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3">
                Er zijn nog geen competenties beschikbaar.
                </td>
            </tr>
            @endif
        </table>
        <button class="btn btn-primary pull-right">Toevoegen</button>
    </div>

</div>

@stop
@section("scripts")
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@stop