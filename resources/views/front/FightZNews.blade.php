@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
@endsection

@section('content')
    <div class="pt-12">
        <section class="text-gray-600 body-font bg-white px-8 py-24 min-h-screen">
            <div class="container mx-auto flex flex-wrap pb-12">
                <div class="flex flex-col text-center w-full mb-10 text-gray-600">
                    <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                        FIGHTZ NEWS
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        All the HolofightZ news, fan arts or some original content will be here.
                    </p>
                </div>
                <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>

                @foreach ($news as $item)

                    @if($item->type == 'img')
                        <div class="lg:w-1/3 md:w-1/2 w-full p-6 flex flex-col">

                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                                <a href="{{$item->img}}" data-lightbox="fan-art" data-title="Fan Arts">
                                    <div class="w-full px-6" style="height: 300px; background-image: url('{{$item->img}}'); background-size:contain; background-repeat:no-repeat; background-position: center;"></div>
                                    <div class="w-full font-bold text-xl text-gray-800 px-6 py-6">
                                        {{$item->title}}
                                    </div>
                                    <p class="text-gray-800 text-base px-6 mb-5">
                                        {{$item->description}}
                                    </p>
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="lg:w-1/3 md:w-1/2 w-full p-6 flex flex-col">
                            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                            <div class="bg-black w-full px-6" style="height: 300px;"></div>
                            <div class="w-full font-bold text-xl text-gray-800 px-6 py-6">
                                {{$item->title}}
                            </div>
                            <p class="text-gray-800 text-base px-6 mb-5">
                                {{$item->description}}
                            </p>
                            </div>
                            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                            <div class="flex items-center justify-start">
                                <a href="/FightZNews/{{$item->id}}"
                                class="mx-auto lg:mx-0 hover:underline bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Watch
                                </a>
                            </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection
