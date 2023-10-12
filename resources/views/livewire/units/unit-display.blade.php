<div>
    {{ $orgUnit->name }}
    <table class="table-auto">
            <tr>
                <th>Name</th>
                <th>Short Name</th>
            </tr>
        @forelse ($orgUnit->children as $unit)
            <tr>
                <td>{{ $unit->name }}</td>
                <td>{{ $unit->short_name }} </td>
            </tr>   
        @empty
            <tr>
                <td colspan=2>No data</td>
            </tr>
        @endforelse
    </table>

</div>
