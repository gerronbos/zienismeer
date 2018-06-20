@extends('templates.admin')
@section("head")
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop
<?php
$title = 'Vragen';
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
    @if(isset($form_id))
        <a href="{{route("admin.competences.show",[$competence_id,"form_id"=>$form_id])}}" class="btn btn-default" style="margin-bottom:1%;">Terug naar competentie</a>
    @else
        <a href="{{route("admin.competences.show",[$competence_id])}}" class="btn btn-default" style="margin-bottom:1%;">Terug naar competentie</a>
    @endif
@endif
<a href="{{route("admin.questions.new",$routeparams)}}" class="btn btn-primary pull-right" style="margin-bottom:1%;">Vraag toevoegen</a>
{!! Form::open() !!}
@if(isset($form_id))
<input type="hidden" name="form_id" value="{{$form_id}}">
@endif
@if(isset($competence_id))
<input type="hidden" name="competence_id" value="{{$competence_id}}">
@endif
<table class="table table-responsive">
    <tr>
        <th>Vraag</th>
        <th>Omschrijving</th>
        <th>Antwoord mogelijkheden</th>
        <th>Opties</th>
    </tr>
    @if(!count($questions))
        <tr>
            <td colspan="1000">Geen vragen beschikbaar</td>
        </tr>
    @else    
        @foreach($questions as $question)
            <tr>
                <td>{{$question->name}}</td>
                <td>{{$question->description}}</td>
                <td>{{$question->questionLabel}}</td>
                <td><input type="checkbox" data-toggle="toggle" name="questions[]" value="{{$question->id}}" data-on="Geselecteerd" data-off="Niet geselecteerd"></td>
            </tr>
        @endforeach
    @endif    
</table>
<button class="btn btn-primary pull-right">Toevoegen</button>
{!! Form::close() !!}
<div style="text-align: right">
{{ $questions->links() }}
</div>

@stop

@section("scripts")
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@stop