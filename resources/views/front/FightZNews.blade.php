@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
@endsection

@section('content')
    <div class="pt-12">
        <section class="text-gray-600 body-font px-8 py-24 min-h-screen">
            <div class="container mx-auto flex flex-wrap portfolio">
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

                <div class="container p-5 mx-auto flex md:items-center lg:items-start md:flex-row flex-wrap flex-col">
                    <nav class="flex-grow flex flex-wrap md:pr-20 text-center order-first">
                        <a href="#"
                            class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/4 w-1/2 px-4 py-4 nav-item active"
                            data-rel="ALL">
                            <h2 class="title-font font-medium tracking-widest text-sm">All</h2>
                        </a>

                        <a href="#" class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/4 w-1/2 px-4 py-4 nav-item" data-rel="News">
                            <h2 class="title-font font-medium tracking-widest text-sm">News</h2>
                        </a>
                        <a href="#" class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/4 w-1/2 px-4 py-4 nav-item" data-rel="Fan_Arts">
                            <h2 class="title-font font-medium tracking-widest text-sm">Fan Arts</h2>
                        </a>
                        <a href="#" class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/4 w-1/2 px-4 py-4 nav-item" data-rel="OC_Video">
                            <h2 class="title-font font-medium tracking-widest text-sm">OC Video</h2>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="container mx-auto pb-12">
                <hr>
            </div>
            <div class="container mx-auto flex flex-wrap pb-12 portfolio">
                @foreach ($news as $item)

                    @if($item->type == 'img')
                        <div class="lg:w-1/3 md:w-1/2 w-full p-6 flex flex-col ALL Fan_Arts">

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
                        <div class="lg:w-1/3 md:w-1/2 w-full p-6 flex flex-col ALL OC_Video">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<script>

    $(function () {
        // create an empty variable
        var selectedClass = "";
        // call function when item is clicked
        $(".nav-item").click(function () {
            // assigns class to selected item
            selectedClass = $(this).attr("data-rel");
            $('.nav-item').removeClass('active')
            $(this).addClass('active')
            // fades out all portfolio items
            $(".portfolio .ALL").fadeOut(300);
            // fades in selected category
            $(".portfolio .ALL." + selectedClass).delay(300).fadeIn(300);
        });
    });


</script>
@endsection
