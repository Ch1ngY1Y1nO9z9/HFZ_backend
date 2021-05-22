@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('content')
<div class="pt-12">
    <section class="text-gray-600 body-font bg-white  min-h-screen">
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
                <h2 class="text-sm title-font text-gray-500 tracking-widest ml-1">{{$profile->generations->generations}}</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 font-bold mt-1">{{$profile->name_jp}}/ {{$profile->name_en}}</h1>
                <div class="flex mb-4">
                    <span class="flex items-center">
                        <span class="text-gray-600 ml-1">{{$profile->aka}}</span>
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
                    <br>tag with:
                    <span class="font-bold">{{$data->tag_with ?? ''}}</span>
                </p>
            </div>
        </div>
        <div class="container px-5 pb-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-10 lg:mb-20">
                <h1 class="text-5xl font-medium title-font text-gray-900 font-bold">Match Records</h1>
            </div>
            <div class="-my-8 divide-y-2 divide-gray-100">
                <div class="py-8 block md:flex flex-wrap md:flex-nowrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0  block md:flex flex-col">
                        <span class="font-semibold title-font text-gray-700">Stream 17</span>
                    </div>
                    <div class="md:flex-grow">
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Fatal 5-Way</h2>
                        <p class="leading-relaxed">Participants:</p>
                        <p class="leading-relaxed font-bold">Sora, Roboco, Suisei,  AZKi, Miko</p>
                        <p class="leading-relaxed"><br>Winners:</p>
                        <p class="leading-relaxed font-bold">Sora</p>
                    </div>
                </div>
                <div class="py-8 block md:flex flex-wrap md:flex-nowrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0  block md:flex flex-col">
                        <span class="font-semibold title-font text-gray-700">Stream 16</span>
                    </div>
                    <div class="md:flex-grow">
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">2v2 Tag-Team</h2>
                        <p class="leading-relaxed">Participants:</p>
                        <p class="leading-relaxed font-bold">(AZKi, Sora) (Pekora, Moona)</p>
                        <p class="leading-relaxed"><br>Winners:</p>
                        <p class="leading-relaxed font-bold">Draw</p>
                    </div>
                </div>
                <div class="py-8 block md:flex flex-wrap md:flex-nowrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0  block md:flex flex-col">
                        <span class="font-semibold title-font text-gray-700">Stream 15</span>
                    </div>
                    <div class="md:flex-grow">
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">2v2 Tag Team</h2>
                        <p class="leading-relaxed">Participants:</p>
                        <p class="leading-relaxed font-bold">(Sora, A-Chan) (Korone, Miko)</p>
                        <p class="leading-relaxed"><br>Winners:</p>
                        <p class="leading-relaxed font-bold">Korone, Miko</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 pb-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-10 lg:mb-20">
                <h1 class="text-5xl font-medium title-font text-gray-900 font-bold">Win Lose Ratio</h1>
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

                                    // not finish
                                        // $total = $WLR->single_total + $WLR->tag_total + $WLR->specailEvent_total;
                                        // $total_win = $WLR->single_win + $WLR->tag_win + $WLR->specailEvent_win;

                                        // $single_lose = $WLR->single_total - $WLR->single_win;
                                        // $tag_lose = $WLR->tag_total  - $WLR->tag_win;
                                        // $specailEvent_lose = $WLR->specailEvent_total  - $WLR->specailEvent_win;

                                    ?>
                                    {{-- <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            all
                                        </td>
                                        <td>{{$total ?? ''}}</td>
                                        <td>{{$total_win ?? ''}}</td>
                                        <td>{{$total - $total_win - $WLR->draw ?? ''}}</td>
                                        <td>{{$WLR->draw ?? ''}}</td>
                                        <td>
                                            <span class="text-green-500 font-bold">33%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            1 v 1
                                        </td>
                                        <td>{{$WLR->single_total ?? ''}}</td>
                                        <td>{{$WLR->single_win ?? ''}}</td>
                                        <td>{{$single_lose ?? ''}}</td>
                                        <td>-</td>
                                        <td>
                                            <span class="text-green-500 font-bold">33%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            2 v 2
                                        </td>
                                        <td>{{$WLR->tag_total ?? ''}}</td>
                                        <td>{{$WLR->tag_win ?? ''}}</td>
                                        <td>{{$tag_lose ?? ''}}</td>
                                        <td>-</td>
                                        <td>
                                            <span class="text-green-500 font-bold">29%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold">
                                            Specail event
                                        </td>
                                        <td>{{$WLR->specailEvent_total ?? ''}}</td>
                                        <td>{{$WLR->specailEvent_win ?? ''}}</td>
                                        <td>{{$specailEvent_lose ?? ''}}</td>
                                        <td>-</td>
                                        <td>
                                            <span class="text-green-500 font-bold">40%</span>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 pb-24 mx-auto hidden sm:block">
            <div class="flex flex-col text-center w-full mb-10 lg:mb-20">
                <h1 class="text-5xl font-medium title-font text-gray-900 font-bold">Match Clips</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/2 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="fas fa-hand-middle-finger"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Signature - Idol Steps</h2>
                        </div>
                        <div class="flex-grow">
                            <div style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
                                <iframe src="https://streamable.com/e/jauhy8" frameborder="0" width="100%"
                                    height="100%" allowfullscreen
                                    style="width: 100%; height: 100%; position: absolute;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 lg:w-1/2 w-full">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="fas fa-hand-sparkles"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Finisher - SODA Kicks</h2>
                        </div>
                        <div class="flex-grow">
                            <div style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
                                <iframe src="https://streamable.com/e/963mgn" frameborder="0" width="100%"
                                    height="100%" allowfullscreen
                                    style="width: 100%; height: 100%; position: absolute;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
