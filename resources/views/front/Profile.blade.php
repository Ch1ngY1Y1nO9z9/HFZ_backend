@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('content')
<div class="pt-12">
    <section class="text-gray-600 body-font min-h-screen">
        <div class="container mx-auto flex px-5 pt-12 md:flex-row flex-col items-center">
            <a href="/WrestlersProfile"
                class="mx-auto lg:mx-0 hover:underline bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <i class="fas fa-arrow-left"></i> Back to Wrestlers Profile
            </a>
        </div>

        <div class="container mx-auto flex px-5 pb-12 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded mx-auto md:mx-0 md:ml-auto" alt="hero"
                    src="{{$profile->picture}}" style="height: 600px;">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h2 class="text-sm title-font text-gray-500 tracking-widest ml-1">
                    @if($profile->generations_id == 0)
                    Management
                    @else
                    {{$profile->gens->generations}}
                    @endif
                </h2>
                <h1 class="text-3xl title-font font-medium mb-1 font-bold mt-1 @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">
                    @if($profile->isHolochampion == 1)
                        <div class="holo_champion text-2xl md:text-3xl">
                            <i class="fas fa-crown text-yellow-500" title="HOLO CHAMPION"></i>
                            CURRENT HOLO CHAMPION
                        </div>
                    @endif
                    @if($profile->isTagTeamChampion == 1)
                        <div class="holo_champion text-2xl md:text-3xl">
                            <i class="fas fa-tags text-yellow-500" title="TAG TEAM CHAMPION"></i>
                            CURRENT TAG TEAM CHAMPION
                        </div>
                    @endif
                    @if($profile->isQoj == 1)
                        <div class="holo_champion text-2xl md:text-3xl">
                            <i class="fab fa-accessible-icon text-yellow-500" title="QUEEN OF JOBBER"></i>
                            CURRENT QUEEN OF JOBBER
                        </div>
                    @endif
                    @if($profile->haveBriefcase == 1)
                        <div class="holo_champion text-2xl md:text-3xl">
                            <i class="fas fa-briefcase text-blue-500" title="briefcase owner"></i>
                            BRIEFCASE OWNER
                        </div>
                    @endif
                    @if($profile->name_short == 'Luna' || $profile->name_short == 'Miko')
                        <i class="fas fa-baby text-pink-500" title="ばぶばぶ..."></i>
                    @endif
                    @if($profile->name_short == 'Rushia')
                        <i class="fas fa-book-dead" title="DOKI DOKI WAKU WAKU"></i>
                    @endif
                    @if($profile->name_short == 'Botan')
                        <i class="fas fa-shopping-cart" title="Master of shopping-cart"></i>
                    @endif
                    @if($profile->name_short == 'Yagoo')
                        <i class="fas fa-pray" title="Kneel"></i>
                        <i class="fas fa-pray" title="Kneel"></i>
                        <i class="fas fa-pray" title="Kneel"></i>
                    @endif

                    {{$profile->name_jp}}/ {{$profile->name_en}}
                </h1>
                <div class="flex mb-4">
                    <span class="flex items-center">
                        <span class="text-gray-600 ml-1">@ {{$profile->aka}}</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                        <a target="_blank" href="{{$profile->twitter_link}}" class="text-gray-500 hover_twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="{{$profile->youtube_link}}"
                            class="ml-2 text-gray-500 hover_youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </span>
                </div>
                <p>Debut: <span class="font-bold">{{$data->debut ?? ''}}</span></p>
                <p><br>Birthday: <span class="font-bold">{{$data->birth_day ?? ''}}</span></p>
                <p><br>Weight: <span class="font-bold">{{$data->weight ?? ''}} lb</span></p>
                <p><br>Fan base name: <span class="font-bold">{{$data->fan_name ?? ''}}</span></p>
                <p><br>Signature: <span class="font-bold">{{$data->signature ?? ''}}</span></p>
                <p>Finisher: <span class="font-bold">{{$data->finisher ?? ''}}</span></p>

                <p>
                    <br>tag team name:
                    <span class="font-bold">{{$data->team_name ?? 'none'}}</span>
                </p>
                @if($data->team_name)
                    <p>
                        <br>teamate:
                        <a href="/WrestlersProfile/{{$team_mate_name}}">
                            <span class="font-bold">{{$data->tag_with ?? ''}}</span>
                        </a>

                    </p>
                @endif
            </div>
        </div>
        <div class="container px-5 pb-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-10 lg:mb-20">
                <h1 class="text-5xl font-medium title-font font-bold @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">Match Records</h1>
            </div>
            <div x-data={show:false} class="-my-8 divide-y-2 divide-gray-100">
                @if($wreslter_records)

                    <?php
                        $record_number = count($wreslter_records);
                    ?>
                    @if ($record_number < 4)
                        @foreach ($wreslter_records as $record)
                            <div class="py-8 block md:flex flex-wrap md:flex-nowrap">
                                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0  block md:flex flex-col">
                                    <span class="font-semibold title-font @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">Stream {{$record->stream_id}}</span>
                                </div>
                                <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium title-font mb-2 @if(Session::has('darkMode')) text-gray-300  dark-mode-gray @else text-gray-700 @endif">{{$record->type}} - {{$record->rule}}</h2>
                                    <p class="leading-relaxed">Participants:</p>
                                    <p class="leading-relaxed font-bold">{{$record->participants}}</p>
                                    <p class="leading-relaxed"><br>Winners:</p>
                                    <p class="leading-relaxed font-bold @if($record->result == 'Draw') text-yellow-500 @else text-red-500 @endif ">{{$record->result}}</p>
                                </div>
                            </div>
                        @endforeach

                    @else

                        @foreach ($wreslter_records as $key => $record)
                            @if($key < 3)
                            <div class="py-8 block md:flex flex-wrap md:flex-nowrap">
                                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0  block md:flex flex-col">
                                    <span class="font-semibold title-font @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">Stream {{$record->stream_id}}</span>
                                </div>
                                <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium title-font mb-2 @if(Session::has('darkMode')) text-gray-300  dark-mode-gray @else text-gray-700 @endif">{{$record->type}} - {{$record->rule}}</h2>
                                    <p class="leading-relaxed">Participants:</p>
                                    <p class="leading-relaxed font-bold">{{$record->participants}}</p>
                                    <p class="leading-relaxed"><br>Winners:</p>
                                    <p class="leading-relaxed font-bold @if($record->result == 'Draw') text-yellow-500 @else text-red-500 @endif ">{{$record->result}}</p>
                                </div>
                            </div>
                            @endif
                        @endforeach

                        <p class="flex" x-show="!show">
                            <a x-on:click.prevent="show=!show" x-show="!show" class="bg-indigo-500 text-gray-200 rounded hover:bg-indigo-600 px-4 py-3 cursor-pointer focus:outline-none my-3">
                            Show All
                            </a>
                        </p>
                        <div x-show="show" class="divide-y-2 divide-gray-100">
                            @foreach ($wreslter_records as $key => $record)
                                @if($key >= 3)
                                <div class="py-8 block md:flex flex-wrap md:flex-nowrap">
                                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0  block md:flex flex-col">
                                        <span class="font-semibold title-font @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">Stream {{$record->stream_id}}</span>
                                    </div>
                                    <div class="md:flex-grow">
                                        <h2 class="text-2xl font-medium title-font mb-2 @if(Session::has('darkMode')) text-gray-300  dark-mode-gray @else text-gray-700 @endif">{{$record->type}} - {{$record->rule}}</h2>
                                        <p class="leading-relaxed">Participants:</p>
                                        <p class="leading-relaxed font-bold">{{$record->participants}}</p>
                                        <p class="leading-relaxed"><br>Winners:</p>
                                        <p class="leading-relaxed font-bold @if($record->result == 'Draw') text-yellow-500 @else text-red-500 @endif ">{{$record->result}}</p>
                                    </div>
                                </div>
                                @endif
                            @endforeach

                        </div>
                    @endif

                @endif
            </div>
        </div>
        <div class="container px-5 pb-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-10 lg:mb-20">
                <h1 class="text-5xl font-medium title-font font-bold @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">Win Lose Ratio</h1>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                    <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                        <div class="table-responsive">
                            <table class="table text-grey-darkest">
                                <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">Type</th>
                                        <th scope="col">Total Matches</th>
                                        <th scope="col">Win</th>
                                        <th scope="col">Lose</th>
                                        <th scope="col">Draw</th>
                                        <th scope="col">Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        $total = count($wreslter_records);
                                        $single_total = 0;
                                        $single_win = 0;
                                        $tag_total = 0;
                                        $tag_win = 0;
                                        $multi_total = 0;
                                        $multi_win = 0;

                                        $single_draw = 0;
                                        $tag_draw = 0;
                                        $multi_draw = 0;

                                        foreach($wreslter_records as $record){
                                            $winners = explode(',',$record->result);
                                            $check_multi_winners = count($winners);

                                            if($record->rule == 'Royal Rumble'){

                                                if($record->result == $profile->name_short) {
                                                    $multi_total+= 1;
                                                    $multi_win += 1;

                                                    continue;
                                                }else{
                                                    $total = $total - 1;

                                                    continue;
                                                }
                                            }

                                            if($record->type == '1v1'){
                                                $single_total += 1;
                                            }elseif ($record->type == '2v2'){
                                                $tag_total += 1;
                                            }else{
                                                $multi_total += 1;
                                            }

                                            foreach($winners as $key => $winer){
                                                if($winer == $profile->name_short){
                                                    if($record->type == '1v1'){
                                                        $single_win += 1;
                                                    }elseif ($record->type == '2v2'){
                                                        $tag_win += 1;
                                                    }else{
                                                        $multi_win +=1;
                                                    }

                                                }elseif($winer == 'Draw'){
                                                    if($record->type == '1v1'){
                                                        $single_draw += 1;
                                                    }elseif ($record->type == '2v2'){
                                                        $tag_draw += 1;
                                                    }else{
                                                        $multi_draw += 1;
                                                    }
                                                }
                                            }

                                        }

                                        $single_lose = $single_total - $single_win - $single_draw;
                                        $tag_lose = $tag_total - $tag_win - $tag_draw;
                                        $multi_lose = $multi_total - $multi_win - $multi_draw;

                                        $total_win = $single_win + $tag_win + $multi_win;
                                        $total_draw = $single_draw + $tag_draw + $multi_draw;
                                        $total_lose = $single_lose + $tag_lose  + $multi_lose;

                                        if($single_win == 0 && $single_total ==0){
                                            $single_win_rate = 0;
                                        }else{
                                            $single_win_rate = round($single_win / $single_total * 100);
                                        }

                                        if($tag_win == 0 && $tag_total ==0){
                                            $tag_win_rate = 0;
                                        }else{
                                            $tag_win_rate = round($tag_win / $tag_total * 100);
                                        }

                                        if($multi_win == 0 && $multi_total ==0){
                                            $multi_win_rate = 0;
                                        }else{
                                            $multi_win_rate = round($multi_win / $multi_total * 100);
                                        }

                                        if($total_win == 0 && $total ==0){
                                            $total_win_rate = 0;
                                        }else{
                                            $total_win_rate = round($total_win / $total * 100);
                                        }


                                    ?>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            all
                                        </td>
                                        <td>{{$total}}</td>
                                        <td>{{$total_win}}</td>
                                        <td>{{$total_lose}}</td>
                                        <td>{{$total_draw}}</td>
                                        <td>
                                            <span class="text-green-500 font-bold">{{$total_win_rate}}%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            1 v 1
                                        </td>
                                        <td>{{$single_total}}</td>
                                        <td>{{$single_win}}</td>
                                        <td>{{$single_lose}}</td>
                                        <td>{{$single_draw}}</td>
                                        <td>
                                            <span class="text-green-500 font-bold">{{$single_win_rate}}%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            2 v 2
                                        </td>
                                        <td>{{$tag_total}}</td>
                                        <td>{{$tag_win}}</td>
                                        <td>{{$tag_lose}}</td>
                                        <td>{{$tag_draw}}</td>
                                        <td>
                                            <span class="text-green-500 font-bold">{{$tag_win_rate}}%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            Specail event
                                        </td>
                                        <td>{{$multi_total}}</td>
                                        <td>{{$multi_win}}</td>
                                        <td>{{$multi_lose}}</td>
                                        <td>{{$multi_draw}}</td>
                                        <td>
                                            <span class="text-green-500 font-bold">{{$multi_win_rate}}%</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(!$profile->clips->isEmpty())

        <div class="container px-5 pb-24 mx-auto hidden sm:block">
            <div class="flex flex-col text-center w-full mb-10 lg:mb-20">
                <h1 class="text-5xl font-medium title-font font-bold @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">Match Clips</h1>
            </div>
            <div class="flex flex-wrap -m-4">

                @foreach ($profile->clips as $clip)
                    @if($clip->type == 'finisher')
                        <div class="p-4 lg:w-1/2 w-full">
                            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                        <i class="fas fa-hand-sparkles"></i>
                                    </div>
                                    <h2 class="text-lg title-font font-medium @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$clip->clip_title}}</h2>
                                </div>
                                <div class="flex-grow">
                                    {!! $clip->embed_code !!}
                                </div>
                            </div>
                        </div>

                    @elseif($clip->type == 'signature')
                        <div class="p-4 lg:w-1/2 w-full">
                            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                        <i class="fas fa-hand-middle-finger"></i>
                                    </div>
                                    <h2 class="text-lg title-font font-medium @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$clip->clip_title}}</h2>
                                </div>
                                <div class="flex-grow">
                                    {!! $clip->embed_code !!}
                                </div>
                            </div>
                        </div>

                    @else
                        <div class="p-4 lg:w-1/2 w-full">
                            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                                <div class="flex items-center mb-3">
                                    <div
                                        class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                        <i class="fas fa-fist-raised"></i>
                                    </div>
                                    <h2 class="text-lg title-font font-medium @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$clip->clip_title}}</h2>
                                </div>
                                <div class="flex-grow">
                                    {!! $clip->embed_code !!}
                                </div>
                            </div>
                        </div>

                    @endif
                @endforeach

            </div>
        </div>

        @endif
    </section>
</div>
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script>
    $('.lights').click(function(){
        if($('body').hasClass('bg-black')){
            $('.text-gray-900').addClass('text-white dark-mode');
            $('.text-gray-900').removeClass('text-gray-900');

            $('.text-gray-700').addClass('text-gray-300 dark-mode-gray');
            $('.text-gray-700').removeClass('text-gray-700');
        }else{
            $('.dark-mode').addClass('text-gray-900');
            $('.dark-mode').removeClass('text-white dark-mode');

            $('.text-gray-700').removeClass('text-gray-300 dark-mode-gray');
            $('.text-gray-700').addClass('text-gray-700');

        }
    })
</script>
@endsection
