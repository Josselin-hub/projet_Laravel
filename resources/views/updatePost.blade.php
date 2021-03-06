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
                    Updating post #{{$post->id}} <br><br>
                    {!! Form::open(['route' => 'post_save']) !!}

                    {!! Form::hidden('id', $post->id) !!}
                    {!! Form::text('content', $post->content) !!}

                        {!! Form::submit('Update post') !!}
                    {!! Form::close() !!}
                    <br><br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
