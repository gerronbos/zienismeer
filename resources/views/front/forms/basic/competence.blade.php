@extends("templates.forms.basic")
<?php
$body_class = $type;
$body_id = "inter";
?>
@section("head")

<link rel="stylesheet" href="/forms_layouts/basic/assets/css/{{$type}}.css">
@stop

@section("content")
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"><a class="btn btn-default btn-sm" role="button" href="{{route("form.basic",[$form->id])}}"><i class="glyphicon glyphicon-chevron-left"></i>Terug </a>
                <h1 class="competence_title">{{$competence->name}} </h1>
                @foreach($competence->questions as $question)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default input-panel-inter">
                                <div class="panel-heading inter-heading">
                                    <h3 class="panel-title">{{$question->name}}<i class="glyphicon glyphicon-question-sign pull-right" data-toggle="tooltip" data-placement="bottom" title="{{$question->description}}"></i></h3></div>
                                <div class="panel-body inter-body">
                                    <div class="btn-group" role="group">
                                        @foreach($question->answers()->orderBy("position","asc")->get() as $answer)
                                            <button class="btn btn-default">{{$answer->name}}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
                            
     
@stop