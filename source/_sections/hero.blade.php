<div class="container mx-auto">
    <div class="py-20">
        <h1 class="text-4xl sm:text-6xl">Twój klucz do lepszej <br /> przyszłości</h1>
        <p class="lg:w-6/12">W RealEstate nieruchomości to coś więcej niż tylko budynki - to miejsca,
            w których powstają historie, rozwijają się biznesy i spełniają marzenia.</p>
        <div class="flex flex-col md:flex-row gap-5 mt-[0.625rem]">
            @include('_components.button', [
                'slot' => 'Nasze Inwestycje',
                'variant' => 'primary',
                'type' => 'link',
                'href' => '/inwestycje'
            ])
            @include('_components.button', [
                'slot' => 'Poznajmy się',
                'variant' => 'secondary',
                'type' => 'link',
                'href' => '#contact'
            ])
        </div>
    </div>
</div>