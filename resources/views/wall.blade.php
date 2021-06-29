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
                    Welcome to the wall <br><br>
                    {!! Form::open(['route' => 'post_create']) !!}
                        {!! Form::text('content') !!}
                        {!! Form::submit('Post on the wall!') !!}
                    {!! Form::close() !!}
                    <br><br>
                    <ul>
                        @foreach($posts as $post)
                            <li>
                                {{$post->content}}
                                ({{$post->created_at}})
                                [<a href="{{route('post_update', $post->id)}}">update</a>]
                                [<a href="{{route('post_delete', $post->id)}}">delete</a>]
                            </li>
                        @endforeach
                        <br>
                        {{ $posts->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
