@extends('templates.admin')
@section("head")
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop
<?php
$title = 'Vraag: '.$question->name;
?>
<?php
$routeparams = [];
if(isset($form_id)){
    $routeparams["form_id"] = $form_id;
}
if(isset($competence_id)){
    $routeparams["competence_id"] = $competence_id;
}
?>
@section("content")
@if(isset($competence_id))  
    <a href="{{route("admin.competences.show",["competence_id" => $competence_id,"form_id" => @$form_id])}}" class="btn btn-default">Terug naar competentie</a>
@endif    

    <h3>Gegevens <a href="{{route("admin.questions.edit",[$question->id,"competence_id" => $competence_id,"form_id" => @$form_id])}}" class="btn btn-primary pull-right">Wijzig gegevens</a></h3>
    <table class="table table-bordered">
        <tr><th>Vraag</th><td>{{$question->name}}</td></tr>
        <tr><th>Omschrijving</th><td>{{$question->description}}</td></tr>
        <tr><th>Aantal competenties</th><td>{{count($question->competences)}}</td></tr>
        <tr><th>Aantal antwoorden</th><td>3</td></tr>
    </table>

    <hr>
    <h3>Competenties</h3>
    @include("admin.partials.competences.competences",["competences" => $question->competences])
    <hr>
    <h3>Antwoorden</h3>
    @include("admin.partials.questions.answers.answers",["answers" => $question->answers()->orderBy("position",'asc')->get(),"question" => $question,"amount_competences" => count($question->competences)])

@stop
