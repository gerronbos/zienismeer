@extends('templates.admin')

<?php
$formnav = 'edit';
$title = $form->name;
?>
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{{route("admin.forms.show",[$form->id])}}" class="btn btn-default" style="margin-bottom:1%;">Terugn naar overzicht</a>
        @include('admin.forms.form')
    </div>

</div>

@stop