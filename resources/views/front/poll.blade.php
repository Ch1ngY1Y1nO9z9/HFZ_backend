@extends('layouts.template')

@section('content')
    <div class="pt-12">
        <section class="body-font bg-white min-h-screen">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full text-gray-600">
                    <h1 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                        Poll
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        Will announce new poll before next stream(maybe?).
                    </p>
                </div>
            </div>

            <div class="container px-5 py-12 mx-auto">
                <div class="flex flex-col text-center w-full text-gray-600">
                    <h1 class="text-3xl font-medium title-font mb-4 tracking-widest font-bold text-red-500">
                        Top favorite HoloFightZ V-Rumblers
                    </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-xl">
                        Choose your top 5 favorites. <br>
                        (please don't pick the same character)
                    </p>
                </div>
            </div>

            <div class="container px-5 pb-12 mx-auto">
                @if ($checked == 'false')
                    <form action="/vote" method="post" id="PollVote">
                        <div class="ml-6 items-center w-full">
                            @csrf
                            <div class="w-full text-black flex justify-between">
                                @foreach ($place as $num)
                                    <div class="relative">
                                        <label for="place{{ $num }}" class="leading-7 text-xl">
                                            place {{ $num }} :
                                        </label>
                                        <select name="place{{ $num }}"
                                            class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10 placeSelect"
                                            required>
                                            <option selected hidden>-</option>
                                            @foreach ($list as $wrestler)
                                                <option value="{{ $wrestler['name_short'] }}">
                                                    {{ $wrestler['name_short'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endforeach
                            </div>
                            <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
                            <div class="py-12 w-full">
                                <button
                                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                @elseif($checked == 'true')
                    <h2 class="text-5xl font-medium title-font mb-4 tracking-widest font-bold text-red-500 text-center">
                        THANKS FOR YOUR VOTE :)
                    </h2>
                @endif
                <div class="flex flex-col text-center w-full text-gray-600">
                    <h2 class="text-3xl font-medium title-font mb-4 tracking-widest font-bold" style="color:#49c8f0;">
                        V-Rumbler List:
                    </h2>
                </div>
                <div class="w-full flex flex-wrap mt-5">
                    @foreach ($list as $wrestler)
                        <div class="p-4 w-full lg:w-1/4">
                            <div class="h-full text-center">
                                <div href="/WrestlersProfile/{{ $wrestler->file_list_name }}"
                                    class="flex-shrink-0 w-48 h-48 sm:mb-0 mb-4 w-full">
                                    <img class="rounded-lg object-cover object-center mx-auto h-full" alt="team"
                                        src="{{ $wrestler->avatar }}">
                                </div>
                                <div class="w-full">
                                    <h2
                                        class="title-font font-medium text-xl font-bold py-3 @if (Session::has('darkMode')) text-white  dark-mode @else text-gray-800 @endif">
                                        {{ $wrestler->name_short }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script>
        function hasDuplicates(array) {
            return (new Set(array)).size !== array.length;
        }

        $('#PollVote').submit(function() {
            const allvalue = $(".placeSelect :selected").map(function(i, el) {
                return $(el).val();
            }).get();

            if (!hasDuplicates(allvalue)) {
                $('#PollVote').submit();
            } else {
                alert("you picked same V-Rumblers or didn't pick to 5 V-Rumblers.")
                return false
            }
        })


        $('.lights').click(function() {
            if ($('body').hasClass('bg-white')) {

                $('body').removeClass('bg-white')
                $('body').addClass('bg-black')
                $('section.bg-white').addClass('bg-black')
                $('section.bg-white').removeClass('bg-white')
                $('section.bg-white').addClass('bg-black')
                $('section.bg-white').removeClass('bg-white')

                $('.footer-bg').removeClass('bg-gray-100');
                $('.footer-bg').addClass('bg-gray-900');
                $('.cards-bg').removeClass('bg-gray-100');
                $('.cards-bg').addClass('bg-gray-900');
                $('section.bg-gray-100').addClass('bg-gray-900')
                $('section.bg-gray-100').removeClass('bg-gray-100')

                $('g').attr('fill', '#000')

                $('.gray_800').removeClass('text-gray-800');
                $('.gray_800').addClass('text-gray-200');

            } else {

                $('body').addClass('bg-white');
                $('body').removeClass('bg-black');
                $('section.bg-black').addClass('bg-white');
                $('section.bg-black').removeClass('bg-black');

                $('.footer-bg').addClass('bg-gray-100');
                $('.footer-bg').removeClass('bg-gray-900');
                $('.cards-bg').addClass('bg-gray-100');
                $('.cards-bg').removeClass('bg-gray-900');
                $('section.bg-gray-900').addClass('bg-gray-100');
                $('section.bg-gray-900').removeClass('bg-gray-900');

                $('g').attr('fill', '#fff')

                $('.gray_800').removeClass('text-gray-200');
                $('.gray_800').addClass('text-gray-800');
            }


            $.get('/lightsoff');


        })
    </script>

    @if (Session::has('thanks'))
        <script>
            alert('OGEY :)')
        </script>
    @endif
@endsection
