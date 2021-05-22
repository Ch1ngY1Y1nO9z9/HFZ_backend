
@extends('layouts.template')

@section('content')
<div class="pt-12">
    <section class=" body-font bg-white min-h-screen">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-10 md:mb-20 text-gray-600">
          <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
            Previous Shows
          </h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Explicabo obcaecati provident doloribus repudiandae? Quis excepturi iure ratione. Ex aliquid alias et
            adipisci provident ab possimus, consequatur eos? Optio, ipsa quaerat!</p>
        </div>
        <div class="flex flex-wrap -mx-4 text-left text-white">
          <div class="w-full sm:w-1/2 bg-cover bg-center"
            style="background-image: url('https://static.wixstatic.com/media/a4a930_b263a79d467e457ab587f441792e1e5f~mv2.png/v1/fill/w_750,h_274,al_c,q_85,usm_0.66_1.00_0.01/a4a930_b263a79d467e457ab587f441792e1e5f~mv2.webp');">
            <div class="rounded-lg h-80 overflow-hidden px-5 bg-black bg-opacity-50">
              <h2 class="title-font text-4xl font-medium mt-6 mb-1">Stream 16</h2>
              <h3 class="title-font text-1xl font-medium mb-3">May 8th, 2021</h3>
              <p class="leading-relaxed text-base">
                Watch stream 16 of HoloFightz:
                <ul class="list-disc text-indent pl-5">
                  <li>Ina'nis on 5-0 and Matsuri on 3-0</li>
                  <li>Warson lost her Jobber belt to Haato</li>
                  <li>Marine hit 10 1v1 appearances and won 4 of them</li>
                </ul>
              </p>
              <div class="flex pt-3">
                <a href="/box/16"
                  class="inline-block ml-auto mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">BOX</a>
                <a target="_blank" href="https://youtu.be/18Be0gmBKgY"
                  class="inline-block ml-3 mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">WATCH
                  VOD</a>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 bg-cover bg-center"
            style="background-image: url('https://static.wixstatic.com/media/a4a930_4c2ed97778784af69fd1ddf3d0292548~mv2.png/v1/fill/w_750,h_274,al_t,q_85,usm_0.66_1.00_0.01/a4a930_4c2ed97778784af69fd1ddf3d0292548~mv2.webp');">
            <div class="rounded-lg h-80 overflow-hidden px-5 bg-black bg-opacity-50">
              <h2 class="title-font text-4xl font-medium mt-6 mb-1">Stream 15</h2>
              <h3 class="title-font text-1xl font-medium mb-3">May 1st, 2021</h3>
              <p class="leading-relaxed text-base">
                Watch stream 15 of HoloFightz:
                <ul class="list-disc text-indent pl-5">
                  <li>Gura and Watson failed their challenge </li>
                  <li>Ina'nis defeated Nene on a 4-0 rail</li>
                  <li>Kiara first appearance, she's the masked fighter</li>
                </ul>
              </p>
              <div class="flex pt-3">
                <a
                  class="inline-block ml-auto mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">BOX</a>
                <a target="_blank" href="https://youtu.be/0ftldC-i00I"
                  class="inline-block ml-3 mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">WATCH
                  VOD</a>
              </div>
            </div>
          </div>
          <div class="w-full sm:w-1/2 bg-cover bg-center"
            style="background-image: url('https://static.wixstatic.com/media/a4a930_60a09a9be2ee416aa020408498185b8a~mv2.png/v1/fill/w_750,h_274,al_c,q_85,usm_0.66_1.00_0.01/a4a930_60a09a9be2ee416aa020408498185b8a~mv2.webp');">
            <div class="rounded-lg h-80 overflow-hidden px-5 bg-black bg-opacity-50">
              <h2 class="title-font text-4xl font-medium mt-6 mb-1">Stream 14</h2>
              <h3 class="title-font text-1xl font-medium mb-3">May 8th, 2021</h3>
              <p class="leading-relaxed text-base">
                Watch stream 14 of HoloFightz:
                <ul class="list-disc text-indent pl-5">
                  <li>Prospect of the Month, Ina'nis</li>
                  <li>Matsuri pulled down Luna on her first match</li>
                  <li>Haachama won the belt and topped the rank</li>
                </ul>
              </p>
              <div class="flex pt-3">
                <a
                  class="inline-block ml-auto mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">BOX</a>
                <a target="_blank" href="https://youtu.be/8adXazijtKM"
                  class="inline-block ml-3 mt-3 bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">WATCH
                  VOD</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection


