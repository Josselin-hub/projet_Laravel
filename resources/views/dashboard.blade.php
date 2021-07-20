<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p> Les derniers films à l'affiche : </p> <br>
                    <ul>
                        {{--Affiche les trois derniers films--}}
                        @foreach($lastfilm as $film)
                            <li>
                                [<a href="film/{{$film->id_film}}">{{$film->titre}}</a>] <br>
                            </li>
                            {{--Affiche les trois derniers commentaires liés au film--}}
                            @foreach($lastcomments as $comment)
                                @if($loop->index == 0)
                                    @continue
                                @endif
                                    @if($comment->film_id === $film->id_film)
                                        <li>
                                            {{$comment -> content}}
                                        </li>
                                    @endif
                                @if($loop->index == 3)
                                    @break($loop->index = 0)
                                @endif
                            @endforeach
                            <br>
                        @endforeach
                        <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
