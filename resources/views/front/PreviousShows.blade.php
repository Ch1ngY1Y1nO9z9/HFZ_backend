
@extends('layouts.template')

@section('content')
<div class="pt-12">
    <section class=" body-font min-h-screen">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-10 md:mb-20 text-gray-600">
          <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
            Previous Shows
          </h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Watch all stream archived episode in here.</p>
        </div>

        <div class="flex flex-wrap -mx-4 text-left text-white">

            @foreach ($stream_records as $stream)
                <div class="w-full sm:w-1/2 bg-cover bg-center"
                style="background-image: url('{{$stream->background_image}}');">
                    <div class="rounded-lg h-80 overflow-hidden px-5 bg-black bg-opacity-50">
                        <h2 class="title-font text-4xl font-medium mt-6 mb-1">Ep {{$stream->stream_number}}</h2>
                        <h3 class="title-font text-1xl font-medium mb-3">{{$stream->date}}</h3>
                        <p class="leading-relaxed text-base">
                            Watch episode {{$stream->stream_number}} of HoloFightz:
                            <ul class="list-disc text-indent pl-5">
                                <li>{{$stream->context1 ?? '-'}}</li>
                                <li>{{$stream->context2 ?? '-'}}</li>
                                <li>{{$stream->context3 ?? '-'}}</li>
                            </ul>
                        </p>
                        <div class="flex pt-3">
                            <a href="/Box/{{$stream->stream_number}}"
                            class="inline-block ml-auto mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">BOX</a>
                            @if($stream->link)
                                <a target="_blank" href="{{$stream->link}}" class="inline-block ml-3 mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">WATCH
                                VOD</a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
      </div>
    </section>
</div>
@endsection


