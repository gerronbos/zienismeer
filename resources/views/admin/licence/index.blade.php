@extends('templates.admin')

<?php
$title = 'Licenties';
?>
@section('content')
    {!! Form::open() !!}
        <div class="row" >
            <div class="col-lg-4" style="margin-bottom: 1%;">
                    {!! Form::text('q','',['class'=>'form-control','placeholder'=>'Zoeken...']) !!}
            </div>
            </div>
            <div class="row" style="margin-bottom: 1%;">
            <div class="col-lg-4">
                <button class="btn btn-primary">Zoeken</button>
            </div>
            <div class="col-lg-2 pull-right">
                <a href="{{route('admin.licence.new')}}" class="btn btn-primary">Licentie toevoegen</a>
            </div>
        </div>

    {!! Form::close() !!}
    <table class="table table-responsive">
        <tr>
            <th>Code</th>
            <th>Titel</th>
            <th>Tijd</th>
            <th>Koop baar</th>
            <th>Prijs</th>
            <th>Opties</th>
        </tr>
        @foreach($licences as $l)
            <tr>
                <td>{{$l->code}}</td>
                <td>{{$l->title}}</td>
                <td>{{$l->duration_time}} {{$l->duration_type}}</td>
                <td>{{$l->buyable}}</td>
                <td>{{$l->price}}</td>
                <td><button class="bnt btn-primary">Wijzig</button> <button class="btn btn-danger">Verwijder</button> </td>
            </tr>
        @endforeach

    </table>

@endsection