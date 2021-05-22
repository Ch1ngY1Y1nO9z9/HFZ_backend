@extends('layouts.template')

@section('content')
    <div class="pt-12">
        <section class="bg-white py-8 pt-24 min-h-screen">
            <div class="container px-5 mx-auto flex flex-wrap">
                <div class="flex flex-col text-center w-full mb-10">
                    <h1 class="sm:text-5xl text-3xl font-medium title-font mb-4 text-gray-900">Stream 16 match result</h1>
                </div>
                <div class="w-full mx-auto overflow-auto">
                    <table class="table-auto w-full text-gray-900 text-left whitespace-no-wrap">
                      <thead>
                        <tr>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Game</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Type</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Winner</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Loser</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="px-4 py-3">1</td>
                          <td class="px-4 py-3">SOLO</td>
                          <td class="px-4 py-3 text-red-500">MARINE</td>
                          <td class="px-4 py-3 text-lg text-green-500">FUBUKI</td>
                        </tr>
                        <tr>
                          <td class="border-t-2 border-gray-200 px-4 py-3">2</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3">Tag Team</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3 text-red-500">FLARE,NOEL</td>
                          <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-green-500">ROBOCO,AQUA</td>
                        </tr>
                        <tr>
                            <td class="border-t-2 border-gray-200 px-4 py-3">3</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3">Solo</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-red-500">MIO</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-green-500">AYAME</td>
                        </tr>
                        <tr>
                            <td class="border-t-2 border-gray-200 px-4 py-3">4</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3">MULTi</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-red-500">SUBARU</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-green-500">REINE,KIARA</td>
                        </tr>
                        <tr>
                            <td class="border-t-2 border-gray-200 px-4 py-3">5</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3">Solo</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-red-500">TOWA</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-green-500">LAMY</td>
                        </tr>
                        <tr>
                            <td class="border-t-2 border-gray-200 px-4 py-3">6</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3">Tag Team</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-red-500">AZKI,SORA</td>
                            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-green-500">PEKORA,MOONA</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <div class="flex flex-col text-center w-full pt-24 mb-10">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Stream songs</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-900">All the songs played in the stream.</p>
                  </div>
                  <div class="flex flex-wrap -m-2">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                      <div class="flex items-center border-gray-200 border p-4 rounded-lg">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/h9QJtMVlKUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="flex items-center border-gray-200 border p-4 rounded-lg">
                          <iframe width="100%" height="315" src="https://www.youtube.com/embed/h9QJtMVlKUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="flex items-center border-gray-200 border p-4 rounded-lg">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/h9QJtMVlKUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="flex items-center border-gray-200 border p-4 rounded-lg">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/h9QJtMVlKUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="flex items-center border-gray-200 border p-4 rounded-lg">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/h9QJtMVlKUs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                  </div>

              </div>
        </section>
    </div>
@endsection
