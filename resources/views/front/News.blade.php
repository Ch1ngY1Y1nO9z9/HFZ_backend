@extends('layouts.template')

@section('content')
<div class="pt-12">
    <section class="text-gray-600 body-font bg-white px-8 py-24 min-h-screen">
        <div class="container mx-auto flex px-5 items-center justify-center flex-col">
            <a href="/FightZNews"
            class="mx-auto lg:mx-0 hover:underline bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <i class="fas fa-arrow-left"></i> Back to HFZ News
          </a>
            <div class="text-center lg:w-2/3 w-full">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$news->title}}</h1>
              <p class="mb-8 leading-relaxed">
                {{$news->description}}

                {!! $news->content !!}
              </p>
            </div>
          </div>
    </section>

</div>
@endsection
