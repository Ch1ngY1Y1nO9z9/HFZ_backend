@extends('layouts.template')

@section('content')
<div class="pt-12">
    <section class="text-gray-600 body-font px-8 py-24 min-h-screen">
        <div class="flex flex-col text-center w-full mb-5">
            <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                NEWS
            </h1>
            <a href="/FightZNews"
                class="mx-auto hover:underline bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <i class="fas fa-arrow-left"></i> Back to HFZ News
            </a>
        </div>
        <div class="container mx-auto flex px-5 items-center justify-center flex-col">

            <div class="text-center lg:w-2/3 w-full">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium @if(Session::has('darkMode')) text-gray-100 @else text-gray-900 @endif">{{$news->title}}<br>({{$news->date}})</h1>
              <p class="mb-8 leading-relaxed">

                @if($news->type == 'video')
                {{$news->description}}
                <br>
                <div style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
                    @if($news->video_from == 'youtube')
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$news->content}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="position: absolute;"></iframe>
                    @else
                        <iframe src="https://streamable.com/e/{{$news->content}}" frameborder="0" width="100%" height="100%" allowfullscreen style="width: 100%; height: 100%; position: absolute;"></iframe>
                    @endif
                </div>
                @elseif($news->type == 'news')
                {{$news->description}}
<pre class="text-left">
{{$news->content}}
</pre>
                @else

                <img width="100%" src="{{$news->img}}" alt="fan_arts">
                {{$news->description}}
                @endif
              </p>
            </div>
          </div>
    </section>

</div>
@endsection

@section('js')
<script>
    $('.lights').click(function(){
        if($('body').hasClass('bg-white')){

          $('.title-font').removeClass('text-gray-100');
          $('.title-font').addClass('text-gray-900');

        }else{

            $('.title-font').removeClass('text-gray-900');
            $('.title-font').addClass('text-gray-100');

        }

    })
</script>
@endsection
