@extends('templates.admin')

<?php
$formnav = 'competence';
$title = "Competentie toevoegen";

?>
@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('admin.competences.form')
    </div>

</div>

@stop

@section('scripts')
<script src="/js/bootstrap3-typeahead.js"></script>

<script>
$(document).ready(function(){
    var $input = $(".typeahead");
    $input.typeahead({
      source: [
        {id: "someId1", name: "Display name 1"},
        {id: "someId2", name: "Display name 2"}
      ],
      autoSelect: true
    });
    $input.change(function() {
      var current = $input.typeahead("getActive");
      if (current) {
        if (current.name == $input.val()) {
          // Data van Geselecteerde competentie invullen
        } else {
          // Data allemaal leegzetten omdat er een nieuwe geselecteerd is.
        }
      }
    });
});
</script>
@stop