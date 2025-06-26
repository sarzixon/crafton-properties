@extends('_layouts.main')

@section('body')
@include('_sections.hero')
<!-- investments -->
<section class="container mx-auto">
    <div class="text-center flex flex-col items-center mb-20">
        <h2 class="text-3xl lg:text-4xl">Nasze inwestycje</h2>
        <p class="lg:max-w-3xl py-0">Nasze inwestycje to miejsca, które łączą nowoczesny design, funkcjonalność i
            trwałość.
            Każdy projekt
            realizowany
            przez RealEstate to wynik pasji, zaangażowania i dbałości o każdy szczegół.</p>
    </div>
    <div id="inwestycje">
        <div class="flex flex-col lg:flex-row gap-8 border border-stroke rounded-[14px] overflow-hidden items-stretch">
            <div class="lg:max-w-[515px] p-9">
                <div class="embla">
                    <div class="embla__viewport">
                        <div class="embla__container">
                            <div class="embla__slide">
                                @include('_components.offer', [
                                        'location' => 'Poznań 20-300',
                                        'title' => 'Poznań Park',
                                        'desc' => 'Poznań Park to kameralne osiedle nowoczesnych domów, które harmonijnie łączy komfort życia z bliskością natury. Położone zaledwie 10 minut od centrum Poznania, oferuje ciszę i zieleń bez kompromisów – z łatwym dostępem 
                                    do miejskich udogodnień.',
                                        'href' => '/offer-1'
                                ])
                            </div>
                            <div class="embla__slide">
                                @include('_components.offer', [
                                        'location' => 'Kraków 20-300',
                                        'title' => 'Kraków Park',
                                        'desc' => 'Kraków Park to kameralne osiedle nowoczesnych domów, które harmonijnie łączy komfort życia z bliskością natury. Położone zaledwie 10 minut od centrum Poznania, oferuje ciszę i zieleń bez kompromisów – z łatwym dostępem 
                                    do miejskich udogodnień.',
                                        'href' => '/offer-2'
                                ])
                            </div>
                            <div class="embla__slide">
                                    @include('_components.offer', [
                                            'location' => 'Warszawa 20-300',
                                            'title' => 'Warszawa Park',
                                            'desc' => 'Warszawa Park to kameralne osiedle nowoczesnych domów, które harmonijnie łączy komfort życia z bliskością natury. Położone zaledwie 10 minut od centrum Poznania, oferuje ciszę i zieleń bez kompromisów – z łatwym dostępem 
                                        do miejskich udogodnień.',
                                            'href' => '/offer-3'
                                    ])
                            </div>
                        </div>
                    </div>
                </div>
                     
              
                          
                         <div class="flex gap-[10px] mt-[42px]">

                                                       <button
                        class="embla__button--prev border disabled:border-stroke border-headings-dark rounded-full w-[53px] h-[53px] flex justify-center items-center rotate-180">
                        <img src="/assets/img/arrow.svg">
                    </button>
                    <button
                        class="embla__button--next border disabled:border-stroke border-headings-dark rounded-full w-[53px] h-[53px] flex justify-center items-center">
                        <img src="/assets/img/arrow.svg">
                    </button>
                </div>
            </div>
            
            <div>
                <div class="embla h-full">
                    <div class="embla__viewport h-full">
                        <div class="embla__container h-full">
                            <div class="embla__slide h-full"><img src="/assets/img/property.png" alt="nieruchomość" class="h-full w-full object-cover"></div>
                            <div class="embla__slide h-full"><img src="/assets/img/property.png" alt="nieruchomość" class="h-full w-full object-cover"></div>
                            <div class="embla__slide h-full"><img src="/assets/img/property.png" alt="nieruchomość" class="h-full w-full object-cover"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- posts -->

<section id='#poradnik' class="container mx-auto">
    <h2 class="my-20 break-words text-center lg:text-left text-3xl lg:text-4xl">Poradnik <br /> po nieruchomościach</h2>
    <div class="flex flex-col items-center lg:flex-row gap-8">
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
<section id="contact" class="w-full min-h-[900px] bg-bg-subtle pt-20">
    <div class="container mx-auto">
        <h2 class="mb-5 text-3xl lg:text-4xl">Porozmawiajmy</h2>
        @include('_sections.contact')

    </div>
</section>

@stop