@extends('_layouts.main')

@section('body')
@include('_sections.hero')
<!-- investments -->
<section class="container mx-auto">
    <div class="text-center flex flex-col items-center mb-20">
        <h2 class="text-4xl">Nasze inwestycje</h2>
        <p class="lg:max-w-3xl py-0">Nasze inwestycje to miejsca, które łączą nowoczesny design, funkcjonalność i
            trwałość.
            Każdy projekt
            realizowany
            przez RealEstate to wynik pasji, zaangażowania i dbałości o każdy szczegół.</p>
    </div>
    <div id="inwestycje">
        <div class="flex gap-16 border border-stroke rounded-[14px] overflow-hidden">
            <div class="max-w-[515px] p-9">
                <div class="flex items-center gap-[10px] mb-[10px]">
                    <img src="/assets/img/icon-lokalizacja.svg" alt="lokalizacja">
                    <span>Poznań 20-300</span>
                </div>
                <div class="mb-[42px]">
                    <h3>Poznań Park</h3>
                    <p>Poznań Park to kameralne osiedle nowoczesnych domów, które harmonijnie łączy komfort życia z
                        bliskością natury. Położone zaledwie 10 minut od centrum Poznania, oferuje ciszę i zieleń bez
                        kompromisów – z łatwym dostępem
                        do miejskich udogodnień.</p>
                </div>
                @include('_components.button', [
                    'slot' => 'Poznaj szczegóły',
                    'variant' => 'primary',
                    'type' => 'link',
                    'href' => '/post'
                ])



                                                                                     <div class="flex gap-[10px] mt-[42px]">
                        <button class="border  rounded-full w-[53px] h-[53px] flex justify-center items-center rotate-180">
                        <img src="/assets/img/arrow.svg">
                    </button>
                    <button class="border border-headings-dark rounded-full w-[53px] h-[53px] flex justify-center items-center">
                        <img src="/assets/img/arrow.svg">
       </button>
                </div>
            </div>
            <div>
                <img src="/assets/img/property.png" alt="nieruchomość">
                          </div>
        </div>
    </div>
</section>
<!-- posts -->
<section id='#poradnik' class="container mx-auto">
    <h2 class="my-20">Poradnik <br/> po nieruchomościach</h2>
    <div class="flex gap-8">
        @include('_components.post', [
            'imgUrl' => '/assets/img/prop-post-1.png',
            'title' => 'Jak kupić nieruchomość <br /> i nie zwariować? Przewodnik dla początkujących.'
            ])
        @include('_components.post', [
            'imgUrl' => '/assets/img/prop-post-2.png',
            'title' => 'Czym różni się inwestycja <br /> w nieruchomość od zwykłego zakupu?'
            ])
        @include('_components.post', [
            'imgUrl' => '/assets/img/prop-post-3.png',
            'title' => '5 technologii, które powinny <br /> mieć nowoczesne domy w 2025 roku.'
            ])
    </div>
    <div class="my-20 text-center">
                        @include('_components.button', [
                    'slot' => 'Więcej poradników',
                    'variant' => 'primary',
                    'type' => 'link',
                    'href' => '/posts'
                ])
    </div>
</section>
<section id="contact" class="w-full h-[900px] bg-bg-subtle pt-20">
    <div class="container mx-auto">
        <h2>Porozmawiajmy</h2>
        @include('_sections.contact')

    </div>
</section>


<!-- @foreach ($posts->where('featured', true) as $featuredPost)
    <div class="w-full mb-6">
        @if ($featuredPost->cover_image)
            <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
        @endif

        <p class="text-gray-700 font-medium my-2">
            {{ $featuredPost->getDate()->format('F j, Y') }}
        </p>

        <h2 class="text-3xl mt-0">
            <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}"
                class="text-gray-900 font-extrabold">
                {{ $featuredPost->title }}
            </a>
        </h2>

        <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

        <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}"
            class="uppercase tracking-wide mb-4">
            Read
        </a>
    </div>

    @if (!$loop->last)
        <hr class="border-b my-6">
    @endif
@endforeach -->

<!-- @include('_components.newsletter-signup')

@foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
    <div class="flex flex-col md:flex-row md:-mx-6">
        @foreach ($row as $post)
            <div class="w-full md:w-1/2 md:mx-6">
                @include('_components.post-preview-inline')
            </div>

            @if (!$loop->last)
                <hr class="block md:hidden w-full border-b mt-2 mb-6">
            @endif
        @endforeach
    </div>

    @if (!$loop->last)
        <hr class="w-full border-b mt-2 mb-6">
    @endif
@endforeach -->
@stop