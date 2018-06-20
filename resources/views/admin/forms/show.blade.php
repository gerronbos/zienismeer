@extends('templates.admin')
<?php $title = "Formulier: <i>".$form->name."</i>" ; ?>
@section('content')
<div class="row">
    <div class="col-md-4">
        <img src="{{asset($form->layoutImage)}}" class="img-responsive" alt="Responsive image">
    </div>
    <div class="col-md-8">
        <table class="table table-bordered">
            <tr><th style="width:250px;">Titel</th><td>{{$form->name}}</td></tr>
            <tr><th>Aantal competenties</th><td><a href="{{route('admin.form.competences',[$form->id])}}"> {{count($form->competences)}} </a></td></tr>
            <tr><th>Totaal aantal vragen</th><td>{{$totalamountquestions}}</td></tr>
        </table>
        <a href="{{route('admin.forms.edit',[$form->id])}}" class="btn btn-primary">Formulier wijzigen</a>
        <a href="{{route('admin.form.competences',[$form->id])}}" class="btn btn-primary">Competenties inzien</a>
    </div>

</div>


@endsection