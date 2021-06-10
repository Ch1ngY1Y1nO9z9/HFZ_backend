<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    {{$seo->title}}
  </title>
  <meta name="description" content="{{$seo->description}}" />
  <meta name="keywords" content="{{$seo->keywords}}" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2X8NTS7JM2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-2X8NTS7JM2');
    </script>

    {{-- google recaptcha v3 --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcU5_caAAAAADvP92EzQ68Z-HED2chnfrlA2v7w"></script>
    <script>
        grecaptcha.ready(function() {
        grecaptcha.execute('6LcU5_caAAAAADvP92EzQ68Z-HED2chnfrlA2v7w', {action: 'homepage'}).then(function(token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
        });
    });
    </script>

  <link rel="stylesheet" href="/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
  <!--Replace with your tailwind.css once created-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
  <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
  <style>
    html{
      scroll-behavior: smooth;
    }

    .gradient {
      background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
    }

    .background-img {
      background-image: url({{$banner->img}});
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }

    .banner_block {
      height: auto;
    }

    @media (min-width: 768px) {
      .banner_block {
        height: calc(80vh - 6rem);
      }
    }

    .hover_youtube {
      color: red;
    }

    .hover_twitter {
      color: rgba(29, 161, 242, 1.00);
    }
  </style>
</head>

<body class="leading-normal tracking-normal text-white background-img @if(Session::has('darkMode')) bg-black @else bg-white @endif"
  style="font-family: 'Source Sans Pro', sans-serif;">
  <!--Nav-->
  <nav id="header" class="fixed w-full z-30 top-0 text-white bg-opacity-50 bg-black">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
          href="/">
          <!--Icon from: http://www.potlabicons.com/ -->
          <img width="250" src="/images/LOGO.png" alt="LOGO">
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle"
          class="flex items-center p-1 text-white hover:text-blue-200 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-opacity-50 bg-black lg:bg-transparent p-4 lg:p-0 z-20"
        id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <!-- <li class="mr-3">
            <a class="inline-block py-2 px-4 font-bold no-underline" href="#">Index</a>
          </li> -->
          <li class="mr-3">
            <a class="inline-block no-underline hover:text-blue-200 hover:text-underline py-2 px-4" href="/FightZNews">FightZ
              News</a>
          </li>
          <li class="mr-3">
            <a class="inline-block no-underline hover:text-blue-200 hover:text-underline py-2 px-4" href="/WrestlersProfile">Wrestlers
              Profile</a>
          </li>
          <li class="mr-3">
            <a class="inline-block no-underline hover:text-blue-200 hover:text-underline py-2 px-4" href="/PreviousShows">Previous
              shows</a>
          </li>
          <li class="mr-3">
            <a class="inline-block no-underline hover:text-blue-200 hover:text-underline py-2 px-4" href="/Event">Poll</a>
          </li>
          <li class="mr-3">
            <a class="inline-block no-underline hover:text-blue-200 hover:text-underline py-2 px-4" href="/#Contact">Contact
              us</a>
          </li>
          <li class="mr-3">
            <a target="_blank" href="https://twitter.com/HoloFightZ"
              class="inline-block no-underline text-white hover_twitter py-2 px-4"
              style="text-shadow:#c8c8c8 1px 1px 0px, #b4b4b4 0px 2px 0px, #a0a0a0 0px 3px 0px, rgba(140, 140, 140, 0.498039) 0px 4px 0px, #787878 0px 0px 0px, rgba(0, 0, 0, 0.498039) 0px 5px 10px">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="mr-3">
            <a target="_blank" href="https://www.youtube.com/channel/UCGgJUUcCCg5dzRkyG8-fNBw"
              class="inline-block no-underline text-white hover_youtube py-2 px-4"
              style="text-shadow:#c8c8c8 1px 1px 0px, #b4b4b4 0px 2px 0px, #a0a0a0 0px 3px 0px, rgba(140, 140, 140, 0.498039) 0px 4px 0px, #787878 0px 0px 0px, rgba(0, 0, 0, 0.498039) 0px 5px 10px">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="mr-3">
            <a target="_blank" href="https://www.twitch.tv/holofightz"
              class="inline-block no-underline text-white text-indigo-600 py-2 px-4"
              style="text-shadow:#c8c8c8 1px 1px 0px, #b4b4b4 0px 2px 0px, #a0a0a0 0px 3px 0px, rgba(140, 140, 140, 0.498039) 0px 4px 0px, #787878 0px 0px 0px, rgba(0, 0, 0, 0.498039) 0px 5px 10px">
              <i class="fab fa-twitch"></i>
            </a>
          </li>
          <li class="mr-3">
            <div class="lights py-2 px-4" style="cursor: pointer">
                <i class="far fa-lightbulb"></i>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
  </nav>
  <!--Hero-->
  <div class="pt-24">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <p class="uppercase tracking-loose w-full"
          style="text-shadow:#c8c8c8 1px 1px 0px, #b4b4b4 0px 2px 0px, #a0a0a0 0px 3px 0px, rgba(140, 140, 140, 0.498039) 0px 4px 0px, #787878 0px 0px 0px, rgba(0, 0, 0, 0.498039) 0px 5px 10px">
          welcome to HFZ</p>
        <h1 class="my-4 text-5xl font-bold leading-tight text-center md:text-left w-full"
          style="text-shadow:#c8c8c8 1px 1px 0px, #b4b4b4 0px 2px 0px, #a0a0a0 0px 3px 0px, rgba(140, 140, 140, 0.498039) 0px 4px 0px, #787878 0px 0px 0px, rgba(0, 0, 0, 0.498039) 0px 5px 10px">
          HOLOFIGHTZ
        </h1>
        <p class="leading-normal text-2xl mb-8 md:text-left w-full"
          style="text-shadow:#c8c8c8 1px 1px 0px, #b4b4b4 0px 2px 0px, #a0a0a0 0px 3px 0px, rgba(140, 140, 140, 0.498039) 0px 4px 0px, #787878 0px 0px 0px, rgba(0, 0, 0, 0.498039) 0px 5px 10px">
          Professional Virtual YouTuber Wrestling
        </p>
        <a target="_blank" href="https://www.twitch.tv/holofightz"
          class="mx-auto lg:mx-0 hover:underline hover:bg-indigo-600 bg-indigo-500 text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          WATCH LIVE
        </a>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-3/5 py-6 text-center">
        <div class="banner_block"></div>
      </div>
    </div>
  </div>
  <div class="relative -mt-12 lg:-mt-24">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="@if(Session::has('darkMode')) #000 @else #FFFFFF @endif" fill-rule="nonzero">
          <path
            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
            opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"></path>
          <path
            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
            id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="@if(Session::has('darkMode')) #000 @else #FFFFFF @endif" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
          </path>
        </g>
      </g>
    </svg>
  </div>
  <section class="py-8 @if(Session::has('darkMode')) bg-black @else bg-white @endif">
    <div class="container max-w-5xl mx-auto m-8">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center" style="color:#49c8f0;">
        ABOUT HOLOFIGHTZ
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 p-6">
          <h3 class="text-3xl font-bold leading-none mb-3 gray_800 @if(Session::has('darkMode')) text-gray-200 @else text-gray-800 @endif">
            Stream time
          </h3>
          <p class="text-gray-600">
            Streams still random, but will most likely happen on the weekend, starting at 10am CST, or possibly later in the night, around 1am CST
            <a href="https://teamup.com/ksgvawzp4akez27rf1">https://teamup.com/ksgvawzp4akez27rf1</a>
          </p>
        </div>

        <div class="w-full sm:w-1/2 px-6 py-0 md:p-6">
          <div class="h-64" style="background-image: url('/images/ring.jpg');background-position: center; backround-size: cover"></div>
        </div>
      </div>
      {{-- <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <div class="w-full sm:w-1/2 px-6 py-0 md:p-6 mt-0 md:mt-6">
          <div class="bg-black h-64"></div>
        </div>
        <div class="w-full sm:w-1/2 p-6 mt-6">
          <div class="align-middle">
            <h3 class="text-3xl gray_800 @if(Session::has('darkMode')) text-gray-200 @else text-gray-800 @endif font-bold leading-none mb-3">
              Lorem ipsum dolor sit amet
            </h3>
            <p class="text-gray-600">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab voluptate nihil quod temporibus, aliquid
              animi aperiam ut error rem adipisci eveniet quo molestiae asperiores ducimus debitis commodi enim.
              Delectus, explicabo?
            </p>
          </div>
        </div>
      </div> --}}

    </div>
  </section>

  <section class="py-8 @if(Session::has('darkMode')) bg-gray-900 @else bg-gray-100 @endif">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center" style="color:#49c8f0;">
        FIGHTZ NEWS
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>

      <div class="w-full flex flex-wrap justify-center">
        @foreach ($news as $item)
            <div class="p-4 lg:w-1/3 w-full">
                <div class="h-full bg-gray-200 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                    <h2 class="tracking-widest text-xl title-font font-medium mb-1 @if($item->type == 'img') text-indigo-400 @elseif($item->type == 'news') text-red-400 @else text-blue-400 @endif">
                        @if($item->type == 'img') Fan arts @elseif($item->type == 'news') News @else OC VOD @endif
                    </h2>
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{$item->title}}</h1>
                    <p class="leading-relaxed mb-3 text-gray-800">{{$item->description}}</p>
                    @if($item->content || $item->type == 'img')
                        <a href="/FightZNews/{{$item->id}}" class="text-indigo-500 inline-flex items-center">Learn More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    @endif
                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        @if(strtotime($item->date.'+3 day') > strtotime(date('Y-m-d')) )
                            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                Date: {{$item->date}}
                            </span>
                            <span class="text-withe bg-red-600 px-2 inline-flex items-center leading-none text-sm">
                                New!
                            </span>
                        @else
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm py-1">
                                Date: {{$item->date}}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
      </div>


    </div>
  </section>
  <section class="py-8 text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
      <div class="flex flex-wrap w-full gray_800 @if(Session::has('darkMode')) text-gray-200 @else text-gray-800 @endif">
        <div class="p-2 md:p-4 md:w-1/2 w-full">
          <div class="h-full p-8 rounded cards-bg @if(Session::has('darkMode')) bg-gray-900 @else bg-gray-100 @endif">
            <h1 class="w-full my-2 text-4xl md:text-5xl font-bold leading-tight" >
              RANK LEADER
              <div class="h-1 gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </h1>
            <a href="/WrestlersProfile/{{$rank_leader->file_list_name}}">
              <img src="{{$rank_leader->avatar}}" alt="{{$rank_leader->name_en}}">
              <span class="flex-grow flex flex-col ">
                <h4 class="md:text-3xl text-2xl font-bold leading-tight">{{$rank_leader->file_list_name}}@ {{$rank_leader->aka}}</h4>
              </span>
            </a>
          </div>
        </div>
        <div class="p-2 md:p-4 md:w-1/2 w-full">
          <div class="h-full p-8 rounded cards-bg @if(Session::has('darkMode')) bg-gray-900 @else bg-gray-100 @endif">
            <h1 class="w-full my-2 text-4xl md:text-5xl font-bold leading-tight">
              RISING STAR
              <div class="h-1 gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </h1>
            <a href="/WrestlersProfile/{{$rank_leader->file_list_name}}">
              <img src="{{$stars->avatar}}" alt="{{$stars->name_en}}">
              <span class="flex-grow flex flex-col">
                <h4 class="md:text-3xl text-2xl font-bold leading-tight">
                    {{$stars->name_en}} @ {{$stars->aka}}
                </h4>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-8 @if(Session::has('darkMode')) bg-black @else bg-white @endif">
    <div class="container mx-auto px-2 pt-4 pb-12 text-white-800">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center" style="color:#49c8f0;">
        PREVIOUS SHOWS
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <div class="w-full mx-auto my-20 bg-white">
        <div id="slider" class="swiper-container w-full border-2">
          <div class="swiper-wrapper">

              @foreach ($previous_shows as $show)
                <div class="swiper-slide bg-cover bg-center shadow-lg"
                style="background-image: url('{{$show->background_image}}');">
                    <div class="container mx-auto px-6 md:px-20 py-6">
                        <div class="w-full md:w-1/2 bg-opacity-50 bg-black p-2 md:p-0">
                        <div class="md:border border-gray-100 md:p-10">
                            <h3 class="text-2xl md:text-5xl leading-tight" style="font-family: Niconne, cursive;">{{$show->date}}</h3>
                            <h2 class="font-bold leading-tight md:text-6xl text-3xl">EP {{$show->stream_number}}</h2>
                            <h4 class="md:text-3xl text-1xl font-bold leading-tight">Watch episode {{$show->stream_number}} of HoloFightz:</h4>
                            <ul class="text-1xl mt-3 font-light">
                            <li>{{$show->context1 ?? '-'}}</li>
                            <li>{{$show->context2 ?? '-'}}</li>
                            <li>{{$show->context3 ?? '-'}}</li>
                            </ul>
                        </div>
                        <div class="my-10 md:mx-10 md:-mt-2">
                            @if($show->link || $show->link != '')
                                <a target="_blank" href="{{$show->link}}" class="bg-indigo-500  ease-linear hover:bg-indigo-600 text-white px-6 py-4 rounded-full">WATCH VOD</a>
                            @else
                                <a class="bg-indigo-500  ease-linear hover:bg-indigo-600 text-white px-6 py-4 rounded-full">Uploading...</a>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
              @endforeach

          </div>
          <div class="hidden md:flex swiper-button-prev bg-white w-16 h-16 text-xs rounded-full text-indigo-500"></div>
          <div class="hidden md:flex swiper-button-next bg-white w-16 h-16 text-xs rounded-full text-indigo-500"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Change the colour #f8fafc to match the previous section colour -->
  <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
        <g class="wave" fill="@if(Session::has('darkMode')) #000 @else #f8fafc @endif">
          <path
            d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
          </path>
        </g>
        <g transform="translate(1.000000, 15.000000)" fill="@if(Session::has('darkMode')) #000 @else #FFFFFF @endif">
          <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
            <path
              d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
              opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"></path>
            <path
              d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
              opacity="0.200000003"></path>
          </g>
        </g>
      </g>
    </g>
  </svg>
  <section id="Contact" class="text-center py-6">
    <div class="container px-5 py-12 md:py-24 mx-auto">
      <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        Contact Us
      </h1>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-4 text-3xl leading-tight">
        If you have any match idea or fan art, even original video or just wanna tell us some secret :)<br>
        We're all welcome you sent to us.
      </h3>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <form action="/ContactHFZ" method="post">
            @csrf
            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-1/2">
                  <div class="relative">
                    <label for="name" class="leading-7 text-sm text-white">Name</label>
                    <input type="text" id="name" name="name" required value="anons" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                </div>
                <div class="p-2 w-1/2">
                  <div class="relative">
                    <label for="email" class="leading-7 text-sm text-white">Email</label>
                    <input type="email" id="email" name="email" placeholder="if you want us send message back..." class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                </div>
                <div class="p-2 w-full">
                  <div class="relative">
                    <label for="message" class="leading-7 text-sm text-white">Message</label>
                    <textarea id="message" name="content" maxlength="300" placeholder="paste any OC video link, fan arts, match suggest to us" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required></textarea>
                  </div>
                </div>
                <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">
                <div class="p-2 w-full">
                  <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </section>

  <!--Footer-->
  <footer class="text-gray-600 body-font">
    <div class="footer-bg @if(Session::has('darkMode')) bg-gray-900 @else bg-gray-100 @endif">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 HolofightZ —
          <a target="_blank" href="https://twitter.com/HoloFightZ" class="text-gray-600 ml-1 py-2 px-4 inline-block no-underline" rel="noopener noreferrer"
            target="_blank">@holofightz</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start flex-wrap text-gray-500">
          <a href="/FightZNews" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium tracking-widest text-sm mb-3">FightZ News</h2>
          </a>
          <a href="/WrestlersProfile" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium tracking-widest text-sm mb-3">Wrestlers Profile</h2>
          </a>
          <a href="/PreviousShows" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium tracking-widest text-sm mb-3">Previous Shows</h2>
          </a>
          <a href="/Event" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium tracking-widest text-sm mb-3">Poll</h2>
          </a>
          <a href="/FAQ" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium tracking-widest text-sm mb-3">FAQ</h2>
          </a>
          <a target="_blank" href="https://twitter.com/HoloFightZ"
            class="text-gray-500 hover_twitter py-2 px-4 md\:w-2 inline-block no-underline">
            <i class="fab fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.youtube.com/channel/UCGgJUUcCCg5dzRkyG8-fNBw"
            class="text-gray-500 hover_youtube py-2 px-4 md\:w-2 inline-block no-underline">
            <i class="fab fa-youtube"></i>
          </a>
          <a target="_blank" href="https://www.twitch.tv/holofightz"
            class="text-indigo-500  py-2 px-4 md\:w-2 inline-block no-underline">
            <i class="fab fa-twitch"></i>
          </a>
        </span>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <script src="/js/index.js"></script>

    <script>
        $('.lights').click(function(){
            if($('body').hasClass('bg-white')){

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

                $('g').attr('fill','#000')

                $('.gray_800').removeClass('text-gray-800');
                $('.gray_800').addClass('text-gray-200');

            }else{

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

                $('g').attr('fill','#fff')

                $('.gray_800').removeClass('text-gray-200');
                $('.gray_800').addClass('text-gray-800');
            }


        $.get('/lightsoff');


        })
    </script>

  @if(Session::has('message'))
  <script>
      alert('thank you :)')
  </script>
@endif
</body>

</html>
