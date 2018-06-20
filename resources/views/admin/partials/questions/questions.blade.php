<table class="table table-responsive">
    <tr>
        <th>Vraag</th>
        <th>Omschrijving</th>
        <th>Antoowrd mogelijkheden</th>
        <th>Opties</th>
    </tr>
    @if(!count($competence->questions))
        <tr>
            <td colspan="1000">Er zijn geen vragen beschikbaar</td>
        </tr>
    @else
        @foreach($competence->questions as $question)
            @include("admin.partials.questions.question",["question" => $question])
        @endforeach
    @endif
</table>