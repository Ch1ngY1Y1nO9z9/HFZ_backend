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
            height: 550px;
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
                                                <div class="px-3 py-2">Matsuri</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    16</div>
                                                <div class="px-3 py-2">Noel</div>
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
                                                <div class="px-3 py-2">Mori</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    8</div>
                                                <div class="px-3 py-2">Suisei</div>
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
                                                3
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">5
                                                </div>
                                                <div class="px-3 py-2">Flare</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    12</div>
                                                <div class="px-3 py-2">Reine</div>
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
                                                <div class="px-3 py-2">Kanata</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    4</div>
                                                <div class="px-3 py-2">Sora</div>
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
                                                5
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">3
                                                </div>
                                                <div class="px-3 py-2">Roboco</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    14</div>
                                                <div class="px-3 py-2">Gura</div>
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
                                                <div class="px-3 py-2">Ayame</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    6</div>
                                                <div class="px-3 py-2">Risu</div>
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
                                                <div class="px-3 py-2">Towa</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    10</div>
                                                <div class="px-3 py-2">Watame</div>
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
                                                <div class="px-3 py-2">Shion</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    2</div>
                                                <div class="px-3 py-2">Polka</div>
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
                    <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                        <div class="table-responsive bg-gray-900 ">
                            <table class="table text-gray-300 text-center w-full loser_table">
                                <thead class="text-normal bg-gray-700">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Loser round 1</th>
                                        <th scope="col">Loser round 2</th>
                                        <th scope="col">Loser round 3</th>
                                        <th scope="col">Loser Bracket Winner</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                9
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">?
                                                </div>
                                                <div class="px-3 py-2">?</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    ?</div>
                                                <div class="px-3 py-2">?</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                10
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">?
                                                </div>
                                                <div class="px-3 py-2">?</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    ?</div>
                                                <div class="px-3 py-2">?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2">?</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2">?</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                11
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">?
                                                </div>
                                                <div class="px-3 py-2">?</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    ?</div>
                                                <div class="px-3 py-2">?</div>
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
                                                    <div class="px-3 py-2">?</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2">?</div>
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
                                                    <div class="px-3 py-2">?</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-light py-1 px-2 font-bold text-gray-500">
                                            <div class="match_number flex justify-center flex-col">
                                                12
                                            </div>
                                        </td>
                                        <td>
                                            <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                <div class="numbers_block rounded-tl py-2 bg-gray-400 text-white">?
                                                </div>
                                                <div class="px-3 py-2">?</div>
                                            </div>
                                            <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                <div
                                                    class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                    ?</div>
                                                <div class="px-3 py-2">?</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="-mt-24 ml-3">
                                                <div class="bg-gray-600 border-b border-black flex rounded-tr">
                                                    <div
                                                        class="numbers_block rounded-tl py-2 bg-gray-400 text-white">
                                                        ?
                                                    </div>
                                                    <div class="px-3 py-2">?</div>
                                                </div>
                                                <div class="bg-gray-600 border-t border-black flex rounded-br">
                                                    <div
                                                        class="numbers_block rounded-bl px-3 py-2 bg-gray-400 text-white">
                                                        ?</div>
                                                    <div class="px-3 py-2">?</div>
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
