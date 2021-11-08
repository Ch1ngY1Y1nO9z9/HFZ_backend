@extends('layouts.template')

@section('css')
<style>
        .hover_youtube {
            color: red;
        }

        .hover_twitter {
            color: rgba(29, 161, 242, 1.00);
        }

        .table td,
        .table th {
            border-top: 0;
        }

        .numbers_block {
            width: 40px;
        }

        .match_number {
            height: 75px;
        }

        .winner_table {
            height: 900px;
        }

        .loser_table {
            height: 700px;
        }

        @media(max-width: 768px){
            .table-responsive{
                overflow-y: scroll;
            }
        }
</style>
@endsection

@section('content')
<div class="pt-12">
    <section class=" body-font bg-white min-h-screen">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full text-gray-600">
                <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                    Event
                </h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    All currently events are here, check the update every week.
                </p>
            </div>
        </div>

        <div class="container px-5 pb-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h2 class="text-4xl font-medium title-font text-gray-900 font-bold">KING OF THE RING</h2>
            </div>
            <div class="flex flex-col text-center w-full">
                <h2 class="text-2xl font-medium title-font text-gray-900 font-bold">WINNER GROUP</h2>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                    <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                        <div class="table-responsive bg-gray-900">
                            <table class="table text-gray-300 text-center w-full winner_table">
                                <thead class="text-normal bg-gray-700">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">WINNERS ROUND 1</th>
                                        <th scope="col">QUARTER-FINALS</th>
                                        <th scope="col">SEMI-FINALS</th>
                                        <th scope="col">WINNERS FINALS</th>
                                        <th scope="col">GRANDS FINALS</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                1
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">1
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-green-100" href="/WrestlersProfile/N.MATSURI">Matsuri</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    16</div>
                                                <div class="px-3 py-2"><a class="hover:text-white" href="/WrestlersProfile/S.%20NOEL">Noel</a></div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                2
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">9
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-pink-500" href="/WrestlersProfile/M.%20CALLIOPE">Mori</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    8</div>
                                                <div class="px-3 py-2"><a class="hover:text-blue-300" href="/WrestlersProfile/H.%20SUISEI">Suisei</a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        1
                                                    </div>
                                                    <div class="px-3 py-2">Matsuri</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        8</div>
                                                    <div class="px-3 py-2">Suisei</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                3
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">5
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-red-200" href="/WrestlersProfile/S.%20FLARE">Flare</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    12</div>
                                                <div class="px-3 py-2"><a class="hover:text-blue-100" href="/WrestlersProfile/P.%20REINE">Reine</a></div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                4
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">13
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-white" href="/WrestlersProfile/A.%20KANATA">Kanata</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    4</div>
                                                <div class="px-3 py-2"><a class="hover:text-blue-500" href="/WrestlersProfile/T.%20SORA">Sora</a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        12
                                                    </div>
                                                    <div class="px-3 py-2">Reine</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                5
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">3
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-red-500" href="/WrestlersProfile/ROBOCO">Roboco</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    14</div>
                                                <div class="px-3 py-2"><a class="hover:text-blue-300" href="/WrestlersProfile/G.%20GURA">Gura</a></div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2">Loser Bracket Winner</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-20 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                6
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">11
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-white" href="/WrestlersProfile/N.%20AYAME">Ayame</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    6</div>
                                                <div class="px-3 py-2"><a class="hover:text-red-100" href="/WrestlersProfile/A.%20RISU">Risu</a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                7
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">7
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-purple-300" href="/WrestlersProfile/T.%20TOWA">Towa</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    10</div>
                                                <div class="px-3 py-2"><a class="hover:text-white" href="/WrestlersProfile/T.%20WATAME">Watame</a></div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                8
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">15
                                                </div>
                                                <div class="px-3 py-2"><a class="hover:text-purple-500" href="/WrestlersProfile/M.%20SHION">Shion</a></div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    2</div>
                                                <div class="px-3 py-2"><a class="hover:text-red-500" href="/WrestlersProfile/O.%20POLKA">Polka</a></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col text-center w-full mt-10">
                <h2 class="text-2xl font-medium title-font text-gray-900 font-bold">LOSER BRACKET</h2>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                    <div class="rounded overflow-hidden shadow bg-white mx-2 w-full ">
                        <div class="table-responsive bg-gray-900 ">
                            <table class="table text-gray-300 text-center w-full loser_table">
                                <thead class="text-normal bg-gray-700">
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                    16
                                                </div>
                                                <div class="px-3 py-2">Noel</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                    9
                                                </div>
                                                <div class="px-3 py-2">Mori</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-14 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">Loser round 2, game 4</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                    5
                                                </div>
                                                <div class="px-3 py-2">Flare</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div class="px-3 py-2">Loser round 1, game 4</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-14 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">Loser round 2, game 3</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-6 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　　　　　　　　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">　　　　　　　　</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-6 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">Loser round 3, game 1</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="px-3 py-2">Loser round 1, game 5</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div class="px-3 py-2">Loser round 1, game 6</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-14 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">Loser round 2, game 3</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="-mt-6 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　　　　　　　　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">　　　　　　　　</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-6 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">Loser round 4, game 1</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="px-3 py-2">Loser round 1, game 7</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">

                                                <div class="px-3 py-2">Loser round 1, game 8</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-14 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">Loser round 2, game 1</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-6 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-6 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div class="px-3 py-2">　</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div class="px-3 py-2">Loser round 3, game 2</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
