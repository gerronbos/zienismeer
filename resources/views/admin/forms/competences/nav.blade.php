<ul class="nav nav-tabs">
  <li role="presentation" @if(isset($formtopnav) && $formtopnav == 'edit')class="active" @endif><a href="{{route('admin.form.competences.edit',[$form->id,$competence->id])}}">Gegevens wijzigen</a></li>
  <li role="presentation" @if(isset($formtopnav) && $formtopnav == 'questions')class="active" @endif><a href="{{route('admin.form.competences.questions',[$form->id,$competence->id])}}">Vragen</a></li>
</ul>