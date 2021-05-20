@extends('layouts.template')

@section('content')
    <div class="pt-12">
        <section class="text-gray-600 body-font bg-white px-8 py-24 min-h-screen">
            <div class="container mx-auto flex flex-wrap pb-12">
                <div class="flex flex-col text-center w-full mb-10 text-gray-600">
                    <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                        FIGHTZ NEWS
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Eum maiores nisi odit, fuga sint nihil, velit aperiam perspiciatis, quisquam
                        voluptatibus doloremque aspernatur repellendus recusandae atque eius! Dolorum corrupti
                        repellendus eligendi.</p>
                </div>
                <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>

                @foreach ($news as $item)
                    <div class="md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
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
                @endforeach
            </div>
        </section>
    </div>
@endsection
