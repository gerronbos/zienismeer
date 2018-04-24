<div class="list-group">
    <a href="{{route('admin.forms.edit',[$form->id])}}" class="list-group-item @if(isset($formnav) && $formnav && $formnav == 'edit') active @endif">Gegevens wijzigen</a>
    <a href="{{route('admin.form.competences',[$form->id])}}" class="list-group-item @if(isset($formnav) && $formnav && $formnav == 'competence') active @endif">Competenties</a>
</div>