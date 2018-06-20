@extends('templates.admin')
<?php $title = "Formulieren"; ?>
@section('content')


<a href="{{route('admin.forms.new')}}" class="btn btn-primary" style="margin-bottom: 1%;">Nieuw formulier</a>
@include("admin.partials.forms.forms",["forms" => $forms])



@endsection