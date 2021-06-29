<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            The wall
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <b>Fiche film :</b> <br><br>
                    Titre du film : {{$film->titre}}
                    <br><br>
                    Résumé : {{$film->resum}}
                    <br><br>
                    Année de production : {{$film->annee_production}}
                    <br><br>
                    Durée (minutes) : {{$film->duree_minutes}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
