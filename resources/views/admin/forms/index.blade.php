@extends('templates.admin')
<?php $title = "Formulieren"; ?>
@section('content')


<a href="{{route('admin.forms.new')}}" class="btn btn-primary" style="margin-bottom: 1%;">Nieuw formulier</a>
<table class="table table-responsive">
    <tr>
        <th>Titel</th>
        <th>Aantal competenties</th>
        <th>Actief</th>
        <th>Opties</th>
    </tr>
    @if(!count($forms))
        <tr>
            <td colspan="4">Er zijn nog geen formulieren aangemaakt.</td>
        </tr>
    @else
        @foreach($forms as $f)
            <tr>
                <td>{{$f->name}}</td>
                <td>0</td>
                <td>{{$f->active}}</td>
                <td><a href="{{route('admin.forms.edit',[$f->id])}}" class="btn btn-primary">Wijzigen</a> <button class="btn btn-danger">Verwijderen</button> </td>
            </tr>
        @endforeach
    @endif
</table>

@endsection