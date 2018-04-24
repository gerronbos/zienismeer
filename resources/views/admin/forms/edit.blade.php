@extends('templates.admin')

<?php
$formnav = 'edit';
$title = $form->name;
?>
@section('content')
<div class="row">
    <div class="col-lg-2">
        @include('admin.forms.nav')
    </div>
    <div class="col-lg-10">
        @include('admin.forms.form')
    </div>

</div>

@stop