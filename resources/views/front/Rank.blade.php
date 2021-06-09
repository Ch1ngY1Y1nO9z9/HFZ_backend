@extends('layouts.template')

@section('content')
<div class="pt-12">
    <section class="body-font py-8 pt-24 min-h-screen @if(Session::has('darkMode')) text-white dark-mode @else text-gray-900 @endif">
        <div class="flex flex-col text-center w-full mb-5">
            <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                POWER RANKINGS
            </h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                HolofightZ Wrestlers power Rankings, update every week.
            </p>
            <a href="/WrestlersProfile"
                class="mx-auto hover:underline bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-full my-5 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <i class="fas fa-arrow-left"></i> Back to Wrestlers Profile
            </a>
        </div>
        <div class="container px-5 py-12 mx-auto flex flex-wrap text-gray-800">
        @foreach($wrestlers as $key => $wrestler)
            @if($wrestler->rank - $wrestler->last_week_rank == 0)
            <div class="flex relative sm:items-center w-2/3 mx-auto border-b-2">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center bg-gray-300"></div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center relative z-10 title-font font-medium text-xl">{{$wrestler->rank}}</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row bg-gray-100 py-10 hover:bg-white">
                    <div class="flex-shrink-0 w-24 h-24 rounded-full inline-flex items-center justify-center overflow-hidden">
                        <img width="100%" src="{{$wrestler->avatar}}" alt="{{$wrestler->name_short}}">
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font mb-1 text-xl text-center sm:text-left"><a href="/WrestlersProfile/{{$wrestler->file_list_name}}" class="hover:underline">{{$wrestler->name_short}}</a></h2>
                        <p class="leading-relaxed"><i class="text-xl fas fa-circle text-gray-600"></i> Last week: {{$wrestler->last_week_rank}}</p>
                    </div>
                </div>
            </div>
            @elseif($wrestler->rank - $wrestler->last_week_rank < 0)
            <div class="flex relative sm:items-center w-2/3 mx-auto border-b-2">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center bg-green-400"></div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center relative z-10 title-font font-medium text-xl">{{$wrestler->rank}}</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row bg-green-200 py-10 hover:bg-green-300">
                    <div class="flex-shrink-0 w-24 h-24 rounded-full inline-flex items-center justify-center overflow-hidden">
                        <img width="100%" src="{{$wrestler->avatar}}" alt="{{$wrestler->name_short}}">
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font mb-1 text-xl text-center sm:text-left"><a href="/WrestlersProfile/{{$wrestler->file_list_name}}" class="hover:underline">{{$wrestler->name_short}}</a></h2>
                        <p class="leading-relaxed"><i class="text-2xl fas fa-arrow-up text-green-600"></i> Last week: {{$wrestler->last_week_rank}}</p>
                    </div>
                </div>
            </div>
            @elseif($wrestler->rank - $wrestler->last_week_rank > 0)
            <div class="flex relative sm:items-center w-2/3 mx-auto border-b-2">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center bg-red-400"></div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center relative z-10 title-font font-medium text-xl">{{$wrestler->rank}}</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row bg-red-200 py-10 hover:bg-red-300">
                    <div class="flex-shrink-0 w-24 h-24 rounded-full inline-flex items-center justify-center overflow-hidden">
                        <img width="100%" src="{{$wrestler->avatar}}" alt="{{$wrestler->name_short}}">
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font mb-1 text-xl text-center sm:text-left"><a href="/WrestlersProfile/{{$wrestler->file_list_name}}" class="hover:underline">{{$wrestler->name_short}}</a></h2>
                        <p class="leading-relaxed"><i class="text-2xl fas fa-arrow-down text-red-600"></i> Last week: {{$wrestler->last_week_rank}}</p>
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
