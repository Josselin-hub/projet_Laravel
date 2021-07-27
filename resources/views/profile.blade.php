<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Mon profil<br>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full" style=" margin: 10px; ">
                        <a href="{{ URL::previous() }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                            </svg>
                        </a>
                </button>

                <div class="p-6 bg-white border-b border-gray-200"><br><br>
                    Pseudo: {{$profile->name_profile}}
                    <br><br>
                    Type du profil : {{$profile->type_profile}}
                   
                    <br><br>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">
                        <a href="UpdateProfile/{{$profile->id_profile}}">Modifier</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
