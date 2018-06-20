@extends('templates.admin')

<?php
$title = 'Competenties';
?>
@section("content")

@include("admin.partials.competences.competences",[$competences])
<div style="text-align: right">
{{ $competences->links() }}
</div>

@stop