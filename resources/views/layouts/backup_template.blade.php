<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $seo = App\Seo::find(1); ?>
    <meta name="keywords" content="{{$seo->keyword}}">
    <meta name="description" content="{{$seo->description}}" />
    <title>{{$seo->title}}</title>


    @yield('recaptcha')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    @yield('css')


</head>

<body>
    <header>
        <div class="blank"></div>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="left_side col-6 col-md-4">
                        <div class="logo">
                            <a class="w-100" href="/ch">
                                <img width="100%" class="lazy" data-src="/img/logo.png" src="/img/logo.png" alt="HolofightZ">
                                <span>

                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="right_side col-6 col-md-8">
                        <div class="d-none d-md-block h-100">

                        </div>
                        <div class="mobile_menu d-flex h-100">
                            <div class="ms-auto my-auto d-block d-md-none dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="footer_info">

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    @yield('js')

</body>

</html>
