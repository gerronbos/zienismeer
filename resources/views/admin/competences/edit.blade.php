@extends('templates.admin')

<?php
$formnav = 'competence';
$formtopnav = 'edit';
$title = $competence->name;


?>
@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('admin.competences.form')
    </div>

</div>

@stop

@section('scripts')

     @stop