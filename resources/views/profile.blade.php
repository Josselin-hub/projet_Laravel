<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Mon profile<br>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"><br><br>
                    Pseudo: {{$profile->name_profile}}
                    <br><br>
                    Type du profile : {{$profile->type_profile}}
                    <br><br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>