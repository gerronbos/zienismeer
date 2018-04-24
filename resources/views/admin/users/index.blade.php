@extends('templates.admin')

<?php
$title = 'Gebruikers';
?>
@section('content')
    {!! Form::open() !!}
        <div class="row" >
            <div class="col-lg-4" style="margin-bottom: 1%;">
                    {!! Form::text('q','',['class'=>'form-control','placeholder'=>'Zoeken...']) !!}
            </div>
            <div class="col-lg-2">
                {!! Form::label('licenceonly','Alleen Licenties') !!}
                {!! Form::checkbox('licenceonly') !!}
            </div>
            </div>
            <div class="row" style="margin-bottom: 1%;">
            <div class="col-lg-4">
                <button class="btn btn-primary">Zoeken</button>
            </div>
        </div>

    {!! Form::close() !!}
    <table class="table table-responsive">
        <tr>
            <th>Naam</th>
            <th>Email</th>
            <th>Licentie</th>
            <th>Opties</th>
        </tr>

        @foreach($users as $u)
            <tr>
                <td>{{$u->fullname}}</td>
                <td>{{$u->email}}</td>
                <td></td>
                <td><button class="btn btn-primary">Wijzig</button><button class="btn btn-danger">Verwijder</button></td>
            </tr>
        @endforeach

    </table>

@endsection