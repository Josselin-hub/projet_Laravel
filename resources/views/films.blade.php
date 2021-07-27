<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Films
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h6>Liste des films</h6>
            <div class="grid grid-flow-col-4 grid-cols-4 gap-3">
                @foreach($films as $film)
                    <div class="flex flex- space-y-2 items-center justify-center h-full py-4 bg-gray-200 rounded-xl space-x-5">
                        <div class="w-2/4">                                  
                            <button class="bg-transparent hover:bg-blue-500 text-gray-800 font-semibold hover:text-white py-2 px-4 border border-gray-800 hover:border-transparent rounded">
                                <a href="film/{{$film->id_film}}">{{$film->titre}}</a>
                            </button>
                        </div>
                        <div class="w-auto h-">
                            <img class="flex-1 h-full rounded-lg" src="https://via.placeholder.com/96x136" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
