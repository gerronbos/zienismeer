@extends('templates.admin')

<?php
$formnav = 'competence';
$formtopnav = 'edit';
$title = $form->name;


?>
@section('content')
<div class="row">
    <div class="col-lg-2">
        @include('admin.forms.nav')
    </div>
    <div class="col-lg-10">
        @include('admin.forms.competences.nav')
        @include('admin.forms.competences.form')
    </div>

</div>

@stop

@section('scripts')

     @stop