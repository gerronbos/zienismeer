@extends('templates.admin')

<?php
$formnav = 'competence';
$formtopnav = 'questions';
$title = "Vraag: ".$question->name;

?>
@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('admin.questions.form')
    </div>

</div>
@stop