<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @if ($page->production)
        <!-- Insert analytics code here -->
    @endif

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="flex font-body flex-col justify-between min-h-screen">
    <header class="flex items-center border-b border-stroke-light h-20 px-6 lg:px-0" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto">
            <div class="flex flex-1 items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-4 md:h-5 mr-3" src="/assets/img/crafton_logo.svg" alt="{{ $page->siteName }} logo" />
                </a>
            </div>

            <div class="flex flex-[2] justify-end lg:justify-center items-center">
                @include('_nav.menu')

                @include('_nav.menu-toggle')
            </div>
            <div class="lg:flex lg:flex-1 justify-end items-center hidden">
                <a
                    class="inline-flex bg-primary rounded-full py-[13px] px-5 font-display uppercase font-medium leading-none text-white">
                    Kontakt
                    <img class="ml-[10px]" src="/assets/img/forward.svg" alt="arrow">
                </a>
            </div>
        </div>
    </header>

    @include('_nav.menu-responsive')

    <main role="main" class="flex-auto w-full px-6 lg:px-0">
        @yield('body')
    </main>

    <footer class="bg-white text-center text-sm  pt-5 pb-10">
        <div class="container mx-auto">
            <p>© 2025 RealEstate Sp. z o.o. Wszelkie prawa zastrzeżone.</p>
            <p>Projekt i realizacja: <strong>Crafton</strong></p>
            <p class="max-w-6/12">Materiały zawarte na stronie WWW mają charakter poglądowy i nie mogą być traktowane
                jako ostateczne
                projekty
                realizacyjne. Deweloper zastrzega sobie prawo zmian. <br /> Niniejsza informacja nie stanowi oferty w
                rozumieniu
                przepisów Kodeksu Cywilnego i ma wyłącznie charakter informacyjny.</p>
        </div>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>