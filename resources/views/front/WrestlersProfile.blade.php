@extends('layouts.template')

@section('content')
<div class="pt-12">

    <section class="text-gray-600 body-font min-h-screen">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-10 md:mb-20">
                <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                    Wrestlers
                    Profile</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Eum maiores nisi odit, fuga sint nihil, velit aperiam perspiciatis, quisquam
                    voluptatibus doloremque aspernatur repellendus recusandae atque eius! Dolorum corrupti
                    repellendus eligendi.</p>
            </div>

            <div
                class="container p-5 mx-auto flex md:items-center lg:items-start md:flex-row flex-wrap flex-col">
                <nav class="flex-grow flex flex-wrap md:pr-20 text-center order-first">
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 text-gray-900 lg:w-1/6 w-1/2 px-4 py-4 nav-item active"
                        data-rel="Members">
                        <h2 class="title-font font-medium tracking-widest text-sm">All</h2>
                    </a>
                    @foreach ($generations as $gen)
                        @if($gen->id < 6)
                            <a href="#"
                                class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item"
                                data-rel="Gen-{{$gen->id-1}}">
                                <h2 class="title-font font-medium tracking-widest text-sm">{{$gen->generations}}</h2>
                            </a>
                        @else
                            <a href="#"
                                class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/5 w-1/2 px-4 py-4 nav-item"
                                data-rel="{{$gen->generations}}">
                                <h2 class="title-font font-medium tracking-widest text-sm">{{$gen->generations}}</h2>
                            </a>
                        @endif
                    @endforeach
                </nav>
            </div>

            <hr>

            <div class="flex flex-wrap portfolio">
                <div class="p-4 w-full member_title">
                    <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">Members</h1>
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
                                    <h2 class="title-font font-medium text-lg text-gray-900">{{$gen0->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">{{$gen0->aka}}</h3>
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
                                    <h2 class="title-font font-medium text-lg text-gray-900">{{$gen1->file_list_name}}</h2>
                                    <h3 class="text-gray-500 mb-3">{{$gen1->aka}}</h3>
                                    <p class="mb-4">
                                        {{$gen1->spamming}}
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
                    <div class="p-4 w-full">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <a href="/WrestlersProfile/Sora" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                    src="/images/wrestlers/haato_avatar.jpg">
                            </a>
                            <div class="flex-grow sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">A. Haato</h2>
                                <h3 class="text-gray-500 mb-3">@OHAROUGE</h3>
                                <p class="mb-4">STRONGEST IDOL</p>
                                <span class="inline-flex">
                                    <a class="text-gray-500 hover_twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="ml-2 text-gray-500 hover_youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-wrap Members Gen-2">
                    <div class="p-4 w-full">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <a href="/WrestlersProfile/Sora" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                    src="/images/wrestlers/subaru_avatar.jpg">
                            </a>
                            <div class="flex-grow sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">O. Subaru</h2>
                                <h3 class="text-gray-500 mb-3">@SHUBA.</h3>
                                <p class="mb-4">

                                </p>
                                <span class="inline-flex">
                                    <a class="text-gray-500 hover_twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="ml-2 text-gray-500 hover_youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-wrap Members Gen-3">
                    <div class="p-4 w-full">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <a href="/WrestlersProfile/Sora" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                    src="/images/wrestlers/pekora_avatar.jpg">
                            </a>

                            <div class="flex-grow sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">U. Pekora</h2>
                                <h3 class="text-gray-500 mb-3">@^ V ^ V ^ V ^</h3>
                                <p class="mb-4">
                                    Ogey
                                </p>
                                <span class="inline-flex">
                                    <a class="text-gray-500 hover_twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="ml-2 text-gray-500 hover_youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

    });
</script>
@endsection
