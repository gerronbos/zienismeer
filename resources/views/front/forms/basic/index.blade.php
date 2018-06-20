@extends('templates.forms.basic')

@section("content")
<div style="height:100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-12"></div>
                <div class="col-md-8 img-blocks">
                    <a href="{{route("form.basic.competence",[$form->id,$competences["interpersoonlijk"]->id])}}" class="interpersoonlijk pull-left"> </a>
                    <a href="{{route("form.basic.competence",[$form->id,$competences["samenwerken"]->id])}}" class="samenwerken pull-left"> </a>
                    <a href="{{route("form.basic.competence",[$form->id,$competences["overlegvaardigheden"]->id])}}" class="overlegvaardigheden pull-left"> </a>
                    <a href="{{route("form.basic.competence",[$form->id,$competences["ondernemend"]->id])}}" class="ondernemend pull-left"> </a>
                </div>
                <div class="col-md-12"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@stop


