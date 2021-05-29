@extends('layouts.template')

@section('content')
    <div class="pt-12">
        <section class="py-8 pt-24 min-h-screen">
            <div class="container px-5 mx-auto flex flex-wrap @if(Session::has('darkMode')) text-gray-500  dark-mode @else text-gray-900 @endif">
                <a href="/PreviousShows"
                    class="mx-auto lg:mx-0 hover:underline bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-full my-10 md:mb-20 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <i class="fas fa-arrow-left"></i> Back to Previous Shows
                </a>
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-5xl text-4xl font-medium title-font mb-4">Stream {{$stream_id}} match result</h1>
                </div>
                <div class="w-full mx-auto overflow-auto">
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                      <thead>
                        <tr class="text-gray-800">
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-sm bg-gray-100 rounded-tl rounded-bl">Game</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-sm bg-gray-100">Type</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-sm bg-gray-100">Context</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-sm bg-gray-100">Participants</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-sm bg-gray-100">Winner</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if($match_records)
                            @foreach ($match_records as $record)
                                @if($record->game == 1)
                                    <tr>
                                        <td class="px-4 py-3">{{$record->game}}</td>
                                        <td class="px-4 py-3">{{$record->type}}</td>
                                        <td class="px-4 py-3">{{$record->rule}}</td>
                                        <td class="px-4 py-3 font-bold">{{$record->participants}}</td>
                                        <td class="px-4 py-3 @if($record->result == 'DRAW') text-yellow-500 @else text-red-500 @endif">{{$record->result}}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{$record->game}}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{$record->type}}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3">{{$record->rule}}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3 font-bold">{{$record->participants}}</td>
                                        <td class="border-t-2 border-gray-200 px-4 py-3  @if($record->result == 'DRAW') text-yellow-500 @else text-red-500 @endif">
                                            {{$record->result}}</td>
                                    </tr>
                                @endif
                            @endforeach
                          @endif
                      </tbody>
                    </table>
                  </div>
                <div class="flex flex-col text-center w-full pt-24 mb-10">
                    <h1 class="sm:text-4xl text-3xl font-medium title-font mb-4 ">Stream songs</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">All the songs played in the stream.</p>
                  </div>
                  <div class="w-full flex flex-wrap -m-2">
                    @if($songs_list)
                      @foreach ($songs_list as $song)
                        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                            <div class="w-full border-gray-200 border p-4 rounded-lg">
                                <p class="text-xl md:text-2xl">Played at Game {{$song->played_at}}</p>
                                <div class="flex items-center">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$song->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                      @endforeach
                    @endif
                  </div>

              </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
        $('.lights').click(function(){
            if($('body').hasClass('bg-black')){
                $('.text-gray-900').addClass('text-gray-300 dark-mode');
                $('.text-gray-900').removeClass('text-gray-900');
            }else{
                $('.dark-mode').addClass('text-gray-900');
                $('.dark-mode').removeClass('text-gray-300 dark-mode');
            }
        })
    </script>
@endsection
