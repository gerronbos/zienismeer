<table class="table table-responsive">
    <tr>
        <th>Titel</th>
        <th>Aantal competenties</th>
        <th>Actief</th>
        <th>Opties</th>
    </tr>
    @if(!count($forms))
        <tr>
            <td colspan="4">Er zijn nog geen formulieren aangemaakt.</td>
        </tr>
    @else
        @foreach($forms as $f)
            @include("admin.partials.forms.form",["f" => $f])
        @endforeach
    @endif
</table>