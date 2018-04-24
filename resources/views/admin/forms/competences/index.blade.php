@extends('templates.admin')

<?php
$formnav = 'competence';
$title = $form->name;

?>
@section('content')
<div class="row">
    <div class="col-lg-2">
        @include('admin.forms.nav')
    </div>
    <div class="col-lg-10">
        <a href="{{route('admin.form.competences.new',[$form->id])}}" class="btn btn-primary pull-right" style="margin-bottom: 1%;">Competentie toevoegen</a>
        <table class="table table-bordered">
            <tr>
                <th>Naam</th>
                <th>Vragen</th>
                <th>Opties</th>
            </tr>
            @if(count($competences))
                @foreach($competences as $c)
                    <tr>
                        <td>{{$c->name}}</td>
                        <td>{{$c->questions()->count()}}</td>
                        <td>
                            <a href="{{route('admin.form.competences.edit',[$form->id,$c->id])}}" class="btn btn-primary">Wijzigen</a>
                            <button class="btn btn-danger">Verwijderen</button>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3">
                Er zijn nog geen competenties toegevoegd.
                </td>
            </tr>
            @endif
        </table>
    </div>

</div>

@stop