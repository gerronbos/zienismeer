@extends('templates.admin')

<?php
$formnav = 'competence';
$formtopnav = 'questions';
$title = $form->name;

?>
@section('content')
<div class="row">
    <div class="col-lg-2">
        @include('admin.forms.nav')
    </div>
    <div class="col-lg-10">
        <a href="{{route('admin.form.competences.questions.new',[$form->id,$competence->id])}}" class="btn btn-primary pull-right">Nieuwe vraag toevoegen</a>
        @include('admin.forms.competences.nav')
        <table class="table table-bordered">
            <tr>
                <th>Vraag</th>
                <th>Antwoorden</th>
                <th>Opties</th>
            </tr>
            @if(count($questions))
            @foreach($questions as $question)
                <tr>
                    <td>{{$question->name}}</td>
                    <td>2</td>
                    <td><a href="{{route('admin.form.competences.questions.show',[$form->id,$competence->id,$question->id])}}" class="btn btn-primary">Bekijk</a> </td>
                </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3">Er zijn nog geen vragen toegevoegd.</td>
            </tr>
            @endif
        </table>
    </div>

</div>

@stop

@section('scripts')

     @stop