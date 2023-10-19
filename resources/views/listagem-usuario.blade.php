<x-layout>

    <table>
        @foreach($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->nome }}</td>
                <td>{{ $u->email }}</td>
            </tr>
        @endforeach
    </table>

</x-layout>