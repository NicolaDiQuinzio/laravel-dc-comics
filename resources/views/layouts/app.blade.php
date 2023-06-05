<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<header class="container d-flex justify-content-between ">
    <div class="p-2">
        <img src="../images/dc-logo.png" alt="" class="h-50">
    </div>
    <ul class="d-flex align-items-center gap-3">
        @foreach (['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'fans', 'news', 'shop'] as $link)
        <li class="d-flex align-items-center {{ Route::currentRouteName() == $link ? 'active' : '' }}">
            <a href="{{ route('comics.index') }}">{{ $link }}</a>
        </li>
        @endforeach
    </ul>
</header>

<main>
    @yield('content')
</main>

<div id="footer-top">
    <div class="container">
        <div class="row">
            <div class="col pt-4">
                <h4>dc comics</h4>
                <ul>
                    @foreach (['characters', 'comics', 'movies', 'tv', 'games', 'videos', 'news'] as $category)
                    <li>
                        <a href="">{{$category}}</a>
                    </li>
                    @endforeach
                </ul>


                <h4>shop</h4>
                <ul>
                    @foreach (['shop dc', 'shop dc collectibles'] as $shop)
                        <li>
                            <a href="">{{$shop}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>


            <div class="col pt-4">
                <h4>dc</h4>
                <ul>
                    @foreach (['terms of use', 'privacy policy (New)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'certifications', 'ratings', 'shop help', 'contact us'] as $item)
                    <li>
                        <a href="">{{ $item }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col pt-4">
                <h4>sites</h4>
                <ul>
                    @foreach (['dc', 'mad magazines', 'dc kids', 'dc universe', 'dc power visa']  as $site)
                    <li>
                        <a href="">{{ $site }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col col-6 cover-img">

            </div>

        </div>

    </div>
</div>

<div id="footer-bottom">
    <div class="container h-100 d-flex align-items-center justify-content-between">
        <button >SIGN-UP NOW!</button>
        <div>
            <ul class="d-flex ">
                <li class="d-flex align-items-center"><a href="" >FOLLOW US</a></li>
                <li><a href=""><img src="../../../public/images/footer-facebook.png" alt="facebook"></a></li>
                <li><a href=""><img src="../../../public/images/footer-twitter.png" alt="twitter"></a></li>
                <li><a href=""><img src="../../../public/images/footer-periscope.png" alt="periscope"></a></li>
                <li><a href=""><img src="../../../public/images/footer-youtube.png" alt="youtube"></a></li>
                <li><a href=""><img src="../../../public/images/footer-pinterest.png" alt="pinterest"></a></li>
            </ul>
        </div>
    </div>
</div>
</body>

</html>
