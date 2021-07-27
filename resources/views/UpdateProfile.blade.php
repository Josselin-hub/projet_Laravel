<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Mon profile<br>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full" style=" margin: 10px; ">
                        <a href="{{ URL::previous() }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                            </svg>
                        </a>
                </button>
                <br><br>
                    Modifier mon profile: {{$profile->name_profile}} 
                    {!! Form::open(['route' => 'profile_save']) !!}
                        {!! Form::text('profile') !!}<br>
                        {{ Form::label('description', 'Public:') }}
                        {!! Form::checkbox('{{$profile->type_profile}}', 'Public') !!}
                        <br>
                        <div class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> {!! Form::submit('Modifier mon profile') !!} </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
