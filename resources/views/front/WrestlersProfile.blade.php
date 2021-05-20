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
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item"
                        data-rel="Gen-0">
                        <h2 class="title-font font-medium tracking-widest text-sm">Gen 0</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item"
                        data-rel="Gen-1">
                        <h2 class="title-font font-medium tracking-widest text-sm">Gen 1</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item"
                        data-rel="Gen-2">
                        <h2 class="title-font font-medium tracking-widest text-sm">Gen 2</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item"
                        data-rel="Gen-3">
                        <h2 class="title-font font-medium tracking-widest text-sm">Gen 3</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/6 w-1/2 px-4 py-4 nav-item"
                        data-rel="Gen-4">
                        <h2 class="title-font font-medium tracking-widest text-sm">Gen 4</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/5 w-1/2 px-4 py-4 nav-item"
                        data-rel="Gen-5">
                        <h2 class="title-font font-medium tracking-widest text-sm">Gen 5</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/5 w-1/2 px-4 py-4 nav-item"
                        data-rel="Holo_ID">
                        <h2 class="title-font font-medium tracking-widest text-sm">Holo ID Gen 1</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/5 w-1/2 px-4 py-4 nav-item"
                        data-rel="Holo_ID">
                        <h2 class="title-font font-medium tracking-widest text-sm">Holo ID Gen 2</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/5 w-1/2 px-4 py-4 nav-item"
                        data-rel="Holo_EN">
                        <h2 class="title-font font-medium tracking-widest text-sm">Holo EN Gen 1</h2>
                    </a>
                    <a href="#"
                        class="hover:bg-blue-500 hover:text-gray-100 lg:w-1/5 w-1/2 px-4 py-4 nav-item"
                        data-rel="INONAKA">
                        <h2 class="title-font font-medium tracking-widest text-sm">INONAKA</h2>
                    </a>
                </nav>
            </div>

            <hr>

            <div class="flex flex-wrap portfolio">
                <div class="p-4 w-full member_title">
                    <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">Members</h1>
                </div>

                <div class="w-full flex flex-wrap Members Gen-0">
                    <div class="p-4 w-full lg:w-1/2">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <a href="/WrestlersProfile/Sora" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                    src="/images/wrestlers/sora_avatar.jpg">
                            </a>
                            <div class="flex-grow sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">T.Sora</h2>
                                <h3 class="text-gray-500 mb-3">@ONETRUEIDOL</h3>
                                <p class="mb-4">
                                    (๑╹ᆺ╹)ぬんぬん
                                </p>
                                <span class="inline-flex">
                                    <a target="_blank" href="https://twitter.com/tokino_sora" class="text-gray-500 hover_twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCp6993wxpyDPHUpavwDFqgg" class="ml-2 text-gray-500 hover_youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 w-full lg:w-1/2">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <a href="/WrestlersProfile/Sora" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                    src="/images/wrestlers/roboco_avatar.jpg">
                            </a>
                            <div class="flex-grow sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">ROBOCO</h2>
                                <h3 class="text-gray-500 mb-3">@DOMOARIGATO</h3>
                                <p class="mb-4">
                                    YOU WILL PLAY APEX.
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
                    <div class="p-4 w-full lg:w-1/2">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <a href="/WrestlersProfile/Sora" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                    src="/images/wrestlers/magic_not_real.jpg">
                            </a>
                            <div class="flex-grow sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">S. Miko</h2>
                                <h3 class="text-gray-500 mb-3">@FAAAAAAAAAAQ</h3>
                                <p class="mb-4">
                                    HOLY SHIT ITS MIKOLER I CARE NOW HOLY SHIT ITS MIKOLER I CARE NOW HOLY SHIT ITS MIKOLER I CARE NOW HOLY SHIT ITS MIKOLER I CARE NOW HOLY SHIT ITS MIKOLER I CARE NOW HOLY SHIT ITS MIKOLER I CARE NOW
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
                    <div class="p-4 w-full lg:w-1/2">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <a href="/WrestlersProfile/Sora" class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4">
                                <img width="100%" class="rounded-lg object-cover object-center" alt="team"
                                    src="/images/wrestlers/suisei_avatar.jpg">
                            </a>
                            <div class="flex-grow sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">H. Suisei</h2>
                                <h3 class="text-gray-500 mb-3">@SUISIOPATH</h3>
                                <p class="mb-4">
                                    今日もかわいい
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

                <div class="w-full flex flex-wrap Members Gen-1">
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
                // fades out all portfolio items
                $(".portfolio .Members").fadeOut(300);
                // fades in selected category
                $(".portfolio .Members." + selectedClass).delay(300).fadeIn(300);
                $(".portfolio .member_title h1").text(selectedClass);
            });
        });

    });
</script>
@endsection
