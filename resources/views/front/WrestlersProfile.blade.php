@extends('layouts.template')

@section('content')
<div class="pt-12">

    <section class="text-gray-600 body-font min-h-screen">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                    Wrestlers
                    Profile</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    All HoloFightZ wrestler data, spamming text in here.
                </p>
                <a href="/Rank"
                    class="mx-auto hover:underline text-white font-bold rounded-full my-5 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" style="background-color: #49c8f0">
                    <i class="fas fa-arrow-right"></i>  Check the Power Rankings
                </a>
            </div>

            <div
                class="container p-5 mx-auto flex md:items-center lg:items-start md:flex-row flex-wrap flex-col">
                <nav class="flex-grow flex flex-wrap md:pr-20 text-center order-first">
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item active"
                        data-rel="Members">
                        <h2 class="title-font font-medium tracking-widest text-sm">All</h2>
                    </a>
                    @foreach ($generations as $gen)
                        <a href="#"
                            class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item"
                            data-rel="Gen-{{$gen->id-1}}">
                            <h2 class="title-font font-medium tracking-widest text-sm">{{$gen->generations}}</h2>
                        </a>
                    @endforeach
                </nav>
            </div>

            <hr>

            <div class="flex flex-wrap portfolio">
                <div class="p-4 w-full member_title">
                    <h1 class="md:text-3xl text-2xl font-medium title-font @if(Session::has('darkMode')) text-white @else text-gray-900 @endif">Members</h1>
                </div>

                <div class="w-full flex flex-wrap Members Gen-0">
                    @foreach ($gen0_all as $gen0)
                        <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$gen0->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$gen0->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$gen0->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$gen0->aka}}</h3>
                                    <p class="mb-4">
                                        {{$gen0->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$gen0->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$gen0->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-1">
                    @foreach ($gen1_all as $gen1)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$gen1->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$gen1->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$gen1->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$gen1->aka}}</h3>
                                    <p class="mb-4">
                                        {!!$gen1->spamming!!}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$gen1->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$gen1->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-2">
                    @foreach ($gen2_all as $gen2)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$gen2->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$gen2->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$gen2->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$gen2->aka}}</h3>
                                    <p class="mb-4">
                                        {{$gen2->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$gen2->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$gen2->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-3">
                    @foreach ($gamers_all as $gamer)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$gamer->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$gamer->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$gamer->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$gamer->aka}}</h3>
                                    <p class="mb-4">
                                        {{$gamer->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$gamer->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$gamer->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-4">
                    @foreach ($gen3_all as $gen3)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$gen3->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$gen3->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$gen3->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$gen3->aka}}</h3>
                                    <p class="mb-4">
                                        {{$gen3->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$gen3->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$gen3->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-5">
                    @foreach ($gen4_all as $gen4)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$gen4->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$gen4->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$gen4->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$gen4->aka}}</h3>
                                    <p class="mb-4">
                                        {{$gen4->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$gen4->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$gen4->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-6">
                    @foreach ($gen5_all as $gen5)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$gen5->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$gen5->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$gen5->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$gen5->aka}}</h3>
                                    <p class="mb-4">
                                        {{$gen5->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$gen5->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$gen5->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-7">
                    @foreach ($genID1_all as $genID1)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$genID1->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$genID1->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$genID1->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$genID1->aka}}</h3>
                                    <p class="mb-4">
                                        {{$genID1->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$genID1->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$genID1->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-8">
                    @foreach ($genID2_all as $genID2)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$genID2->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$genID2->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$genID2->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$genID2->aka}}</h3>
                                    <p class="mb-4">
                                        {{$genID2->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$genID2->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$genID2->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-9">
                    @foreach ($genEN_all as $genEN)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$genEN->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$genEN->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$genEN->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$genEN->aka}}</h3>
                                    <p class="mb-4">
                                        {{$genEN->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$genEN->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$genEN->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-10">
                    @foreach ($INONAKA_all as $INONAKA)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$INONAKA->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$INONAKA->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$INONAKA->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$INONAKA->aka}}</h3>
                                    <p class="mb-4">
                                        {{$INONAKA->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$INONAKA->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$INONAKA->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members Gen-11">
                    @foreach ($PROJECT_HOPE as $HOPE)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$HOPE->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$HOPE->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$HOPE->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$HOPE->aka}}</h3>
                                    <p class="mb-4">
                                        {{$HOPE->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$HOPE->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$HOPE->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="w-full flex flex-wrap Members">
                    @foreach ($cover as $management)
                    <div class="p-4 w-full lg:w-1/2">
                            <div
                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                <a href="/WrestlersProfile/{{$management->file_list_name}}" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                    <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                        src="{{$management->avatar}}">
                                </a>
                                <div class="flex-grow sm:pl-8">
                                    <h2 class="title-font font-medium text-lg @if(Session::has('darkMode')) text-white  dark-mode @else text-gray-900 @endif">{{$management->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">@ {{$management->aka}}</h3>
                                    <p class="mb-4">
                                        {{$management->spamming}}
                                    </p>
                                    <span class="inline-flex">
                                        <a target="_blank" href="{{$management->twitter_link}}" class="text-gray-500 hover_twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a target="_blank" href="{{$management->youtube_link}}" class="ml-2 text-gray-500 hover_youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
</div>
@endsection


@section('js')

<script>

    $(document).ready(function () {
        $('.nav-item').click(function () {
            // reset active class
            $('.nav-item').removeClass("active");
            // add active class to selected
            $(this).addClass("active");
            // return needed to make function work
            return false;
        });


        $(function () {
            // create an empty variable
            var selectedClass = "";
            // call function when item is clicked
            $(".nav-item").click(function () {
                // assigns class to selected item
                selectedClass = $(this).attr("data-rel");
                gen = $(this).text();
                // fades out all portfolio items
                $(".portfolio .Members").fadeOut(300);
                // fades in selected category
                $(".portfolio .Members." + selectedClass).delay(300).fadeIn(300);
                $(".portfolio .member_title h1").text(gen);
            });
        });

        $('.lights').click(function(){
            if($('body').hasClass('bg-black')){
                $('.text-gray-900').addClass('text-white dark-mode');
                $('.text-gray-900').removeClass('text-gray-900');
            }else{
                $('.dark-mode').addClass('text-gray-900');
                $('.dark-mode').removeClass('text-white dark-mode');

            }
        })

    });
</script>
@endsection
