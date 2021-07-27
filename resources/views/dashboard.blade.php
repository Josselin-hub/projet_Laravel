<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <form action="search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="Search movies"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
        </div>
    </form>

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
                            @php $count = 0 @endphp
                            @foreach($lastcomments as $comment)
                                @if($comment->film_id != $film->id_film)
                                    @continue
                                @endif
                                @if($count < 3)
                                    <li>
                                        {{$comment -> content}}
                                        @php $count += 1 @endphp
                                    </li>
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
