<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tous les profils<br>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h6>Liste des profils</h6>
            <div class="grid grid-flow-col-4 grid-cols-4 gap-3">
                @foreach($profiles as $profile)
                    <div class="flex flex-row space-y-2 items-center justify-center h-full py-4 bg-gray-200 rounded-xl space-x-5">
                        <div class="w-2/4">                                  
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">
                                <a href="profile/{{$profile->id}}">{{$profile->name_profile}}</a>
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
