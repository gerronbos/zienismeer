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
        <div class="form-group">
            {!! Form::label('type','Antwoorden') !!}
            {!! Form::select('type',$answertypesq,'',['class'=>'form-control']) !!}
        </div>
    </div>

</div>

@stop

@section('scripts')

     @stop