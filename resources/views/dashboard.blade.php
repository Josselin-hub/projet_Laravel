<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin: 25px auto ;">
            <form action="search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="q"
                        placeholder="Search movies"> <span class="input-group-btn">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" style="margin: 25px 20px ;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    </button>
                </span>
                </div>
            </form>
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
