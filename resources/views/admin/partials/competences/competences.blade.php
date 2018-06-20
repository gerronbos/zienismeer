<table class="table table-bordered">
    <tr>
        <th>Titel</th>
        <th>Omschrijving</th>
        <th>Gekoppelde formulieren</th>
        <th>Vragen</th>
        <th>Opties</th>
    </tr>
    @foreach($competences as $competence)
        @include("admin.partials.competences.competence",[$competence])
    @endforeach
</table>