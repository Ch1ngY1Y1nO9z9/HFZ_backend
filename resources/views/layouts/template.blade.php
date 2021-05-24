<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    HolofightZ Official Website
  </title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  @yield('css')
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
  <!--Replace with your tailwind.css once created-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
  <style>
    .hover_youtube {
      color: red;
    }

    .hover_twitter {
      color: rgba(29, 161, 242, 1.00);
    }
  </style>
</head>

<body class="leading-normal tracking-normal text-white background-img"
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
            <a class="inline-block no-underline hover:text-blue-200 hover:text-underline py-2 px-4" href="/Poll">Poll</a>
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
        </ul>
      </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
  </nav>
  <!--Hero-->

  @yield('content')

  </div>
  <!--Footer-->
  <footer class="text-gray-600 body-font">
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 HolofightZ —
          <a target="_blank" href="https://twitter.com/HoloFightZ" class="text-gray-600 ml-1 py-2 px-4 inline-block no-underline" rel="noopener noreferrer"
            target="_blank">@holofightz</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start flex-wrap">
          <a href="/FightZNews" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">FightZ News</h2>
          </a>
          <a href="/WrestlersProfile" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Wrestlers Profile</h2>
          </a>
          <a href="/PreviousShows" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Previous Shows</h2>
          </a>
          <a href="/Poll" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Poll</h2>
          </a>
          <a href="/FAQ" class="md\:w-2 inline-block no-underline hover:text-underline py-2 px-4">
            <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">FAQ</h2>
          </a>
          <a target="_blank" href="https://twitter.com/HoloFightZ"
            class="text-gray-500 hover_twitter py-2 px-4 md\:w-2 inline-block no-underline">
            <i class="fab fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.youtube.com/channel/UCGgJUUcCCg5dzRkyG8-fNBw"
            class="text-gray-500 hover_youtube py-2 px-4 md\:w-2 inline-block no-underline">
            <i class="fab fa-youtube"></i>
          </a>
        </span>
      </div>
    </div>
  </footer>

  @yield('js')
  <script src="/public/js/pages.js"></script>

</body>

</html>