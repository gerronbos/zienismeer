<table class="table table-bordered">
    <tr>
        <th>Antwoord</th>
        <th>Waarde</th>
        <th>Opties</th>
    </tr>
    @if(count($answers))
        @foreach($answers as $answer)
            @include("admin.partials.questions.answers.answer",["answer" => $answer,"total_answers" => count($answers),"question" => $question,"amount_competences" => $amount_competences])
        @endforeach
    @else
        <tr>
            <td colspan="1000">Er zijn geen antwoorden</td>
        </tr>
    @endif
</table>                