<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin: 25px auto ;">
                <div class="flex">
                    <div class="input-group w-2/4">
                    <form action="search" method="POST" role="search">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="q" placeholder="Rechercher un film"> 
                        <span class="input-group-btn">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full" style="margin: 25px 20px ;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            </button>
                        </span>    
                    </form> 
                </div>
            </div>
                <div class="p-6 bg-white border-b border-gray-200">
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <h6>Les derniers films à l'affiche :</h6>
                                    {{--Affiche les trois derniers films--}}
                       
                                    <div class="grid grid-flow-col-4 grid-cols-4 gap-3">
                                        @foreach($lastfilm as $film)
                                            <div class="flex flex- space-y-2 items-center justify-center h-full py-4 bg-gray-200 rounded-xl space-x-5">
                                                <div class="w-2/4">                                  
                                                    <button class="bg-transparent hover:bg-green-400 text-green-500 font-semibold hover:text-white py-2 px-4 border border-green-400 hover:border-transparent rounde">
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
                            <br>
                        @endforeach
                        <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
