<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Résultat de la recherche
        </h2>
    </x-slot>

    @foreach ($films as $film)
        <tr>
            <td>{{ $film->titre }}</td>
            <br>
            <td>{{ $film->resum }}</td>

            <br><br>

    @endforeach






</x-app-layout>
