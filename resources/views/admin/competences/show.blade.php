@extends('templates.admin')

<?php
$title = 'Competenties';
?>
@section("content")
@if(isset($form_id))
    <div class="row">
        <a href="{{route("admin.form.competences",[$form_id])}}" class="btn btn-default">Terug naar competenties</a>
    </div>
@else
    <div class="row">
        <a href="{{route("admin.competences")}}" class="btn btn-default">Terug naar overzicht</a>
    </div>
@endif
<h3>Gegevens
        <a href="#" class="btn btn-primary pull-right">Gegevens wijzigen</a>
</h3>
<table class="table table-responsive">
    <tr><th>Titel</th><td>{{$competence->name}}</td></tr>
    <tr><th>Omschrijving</th><td>{{$competence->description}}</td></tr>
    <tr><th>Vragen</th><td>{{count($competence->questions)}}</td></tr>
</table>
<hr>
<h3>Formulieren</h3>
@include("admin.partials.forms.forms",["forms" => $competence->forms])
<hr>
<h3>Vragen
    @if(isset($form_id))
        <a href="{{route("admin.questions.list",["form_id" => $form_id,"competence_id" => $competence->id])}}" class="btn btn-primary pull-right">Vraag toevoegen</a>
    @else
        <a href="{{route("admin.questions.list",["competence_id" => $competence->id])}}" class="btn btn-primary pull-right">Vraag toevoegen</a>
    @endif
</h3>
@include("admin.partials.questions.questions",["questions" => $competence->questions, "form_id" => @$form_id, "competence_id" => @$competence->id])



@stop