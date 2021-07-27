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
                <br><br>
                    {!! Form::open(['route' => 'profile_save']) !!}
                        {!! Form::text('id') !!}<br>
                        {{ Form::label('description', 'Privé:') }}
                        {!! Form::checkbox('') !!}
                        <br>
                        <div class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"> {!! Form::submit('Modifier mon profile') !!} </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
