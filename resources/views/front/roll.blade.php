@extends('layouts.template')

@section('css')
<style>
    .rolling_animation {
        width:100vw;
        height:100vh;
        position: fixed;
        z-index: 1000;
        top:0;
        left:0;
    }

    .rolling_animation img {
        width:100%;
        height:100%;
    }

    #result_pic img {
        max-height: 600px;
    }
</style>
@endsection

@section('content')
    <div class="pt-12">
        <section class="py-8 pt-24 min-h-screen">
            <div x-data="{ show: false }" class="container px-5 mx-auto flex flex-wrap @if(Session::has('darkMode')) text-gray-500  dark-mode @else text-gray-900 @endif">
                <div class="flex flex-col text-center w-full mb-10 text-gray-600">
                    <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                        Roll to win
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-xl">
                        Roll to get some good item or amazing wrestlers in <b>RRAT:OGEY LEGEND!!</b><br>
                        If you have coupon code, you can roll one more time for free!!
                    </p>
                </div>
                <div x-show="!show" class="w-full mx-auto overflow-auto" style="background-image: url('/roll_img/rateup.jpg');background-size:contain;background-position: center; background-repeat:no-repeat;">
                        <div class="h-96"></div>
                </div>
                <button x-show="!show" x-on:click="show = !show" :aria-expanded="show ? 'true' : 'false'" :class="{ 'active': show }" x-on:click.once.debounce.3200ms="getrolling()" x-on:click.once="do_transition()" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">ROLL</button>

                <div x-show="show" class="flex flex-col text-center w-full text-gray-600">
                    <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold">
                        You got...
                    </h1>
                    <h1 id="result_item" class="text-4xl font-medium title-font mb-1 tracking-widest font-bold" style="color:#49c8f0;">

                    </h1>
                </div>

                <div x-show="show" id="result_pic" class="w-full mx-auto overflow-auto">
                    <img src="" alt="" class="mx-auto">
                </div>

                <div x-show="show" class="flex flex-col text-center w-full mb-10 text-gray-600">
                    <h1 id="rare" class="text-5xl font-medium title-font mb-4 tracking-widest font-bold">

                    </h1>
                    <p id="result_intro" class="lg:w-2/3 mx-auto leading-relaxed text-base text-xl">

                    </p>
                </div>


                <div class="rolling_animation" x-show.transition="show">
                    <img width="100%" height="100%" src="" alt="transition">
                </div>
            </div>
        </section>

    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
        $('.lights').click(function(){
            if($('body').hasClass('bg-black')){
                $('.text-gray-900').addClass('text-gray-300 dark-mode');
                $('.text-gray-900').removeClass('text-gray-900');
            }else{
                $('.dark-mode').addClass('text-gray-900');
                $('.dark-mode').removeClass('text-gray-300 dark-mode');
            }
        })

        function do_transition(){
            $('.rolling_animation img').attr('src','/roll_img/RAWLOGO.gif')
        }

        function getrolling() {
            $.ajax({
                method: 'POST',
                url: '/get_result',
                data: {},
                success: function (res) {
                    const intro = res.intro;
                    const name = res.name;
                    const img = res.img;
                    const rare = res.rare;
                    $('.rolling_animation').hide();
                    $('#result_intro').text(intro);
                    if(rare == 'rare'){
                        $('#rare').css('color','#49c8f0')
                    }else if(rare == 'SR'){
                        $('#rare').addClass('text-blue-500')
                    }else if(rare == 'SSR'){
                        $('#rare').addClass('text-red-500')
                    }else if(rare == 'UR'){
                        $('#rare').addClass('text-yellow-500')
                    }
                    $('#rare').text(rare);
                    $('#result_pic img').attr('src', img);
                    $('#result_item').text(name);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        }
    </script>
@endsection
