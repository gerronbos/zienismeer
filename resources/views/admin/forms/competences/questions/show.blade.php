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
        @include('admin.forms.competences.nav')
        <h4>{{$question->name}}</h4>
        <p>{{$question->description}}</p>
        <a href="{{route('admin.form.competences.questions.edit',[$form->id,$competence->id,$question->id])}}" class="btn btn-primary" style="margin-bottom: 1%;">Gegevens wijzigen</a>
        <hr>
        <h3>Antwoorden</h3>
        <a href="{{route('admin.form.competences.questions.answer.new',[$form->id,$competence->id,$question->id])}}" class="btn btn-primary" style="margin-bottom: 1%;">Nieuw antwoord(en) toevoegen</a>
        <table class="table table-borderd">
            <tr>
                <th>Antwoord</th>
                <th>Weging</th>
                <th>Opties</th>
            </tr>
            @if(count($answers))
                @foreach($answers as $a)
                    <tr>
                        <td>{{$a->name}}</td>
                        <td>{{$a->weight}}</td>
                        <td>....</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">Er zijn nog geen antwoorden toegevoegd.</td>
                </tr>
            @endif
        </table>



    </div>

</div>

@stop

@section('scripts')

     @stop